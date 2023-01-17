<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\StockOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use PhpParser\Node\Stmt\Catch_;
use App\Models\Sales;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\StockIN;

class SalesController extends Controller
{
    public function index()
    {
        $products = DB::table('get_product')->get();
        $customers = Customer::all();
        $currentMonth = Carbon::now()->month;
        $stockProduct = DB::table('products as p')
            ->select(
                'p.nama',
                db::raw("(SELECT DOX.stock_aktual FROM detail_stock_opname AS DOX INNER JOIN stock_opname AS opn WHERE opn.state = 'Finish' AND dox.product_id = p.id AND opn.bulan = '". $currentMonth ."') AS stok_awal"),
                db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '". $currentMonth ."') AS stok_masuk"),
                db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '". $currentMonth ."') AS stok_keluar"),
                db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga')
            )->get();

        return view('pages.transaksi.penjualan.buat-transaksi-baru', compact('products', 'customers','stockProduct'));
    }

    public function ambil_data_ajax_produk()
    {
        try {
            // $data = Product::join('product_uom', 'product_uom.id', '=', 'products.product_uom_id')
            //     ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            //     ->join('product_types', 'product_types.id', '=', 'products.product_type_id')
            //     ->leftJoin('stock_in', 'stock_in.product_id', '=', 'products.id')
            //     ->select(
            //         'products.*',
            //         'product_uom.name as uom_name',
            //         'product_categories.name as categories_name',
            //         'product_types.name as types_name',
            //         DB::raw('sum(stock_in.jumlah) as jumlah_stok'),
            //         DB::raw('max(stock_in.harga) as harga')
            //     )
            //     //->where(DB::raw('stock_in.id in (select max(id) from stock_in group by product_id)'))
            //     ->groupBy('products.id')
            //     ->get();
            $data = DB::table('get_product_penjualanpembelian')->get();
            return response()->json(
                [
                    'produk' => $data,
                    'status' => 'ok'
                ]
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => $e,
                    'status' => 'bad'
                ]
            );
        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        //
        // return $request->all();
        $maxId = Sales::max('id') + 1;
        try {
            $sales = new Sales();
            $sales->customer_id = $request->get('pelanggan');
            $sales->employee_id = Auth::user()->id;
            $sales->no_transaction = 'INV//-SALES-' . $maxId . '-' . date('Y-m-d');
            $sales->transaction_date = Carbon::now();
            $sales->payment_method = $request->get('metode-pembayaran');
            if ($request->get('metode-pembayaran') == "Cash") {
                $sales->no_bpjs = "Tidak Ada";
                $sales->state = "Lunas";
            } else {
                $sales->no_bpjs = $request->get('nomor-bpjs');
                $sales->state = "Belum Lunas";
            }
            $sales->total = $request->get('total');
            $sales->save();

            foreach ($request->get('data_produk') as $value) {
                $harga_ppn = ($value['harga'] * 0.11 + $value['harga']);
                $hargaperitem = ($harga_ppn * $value['keuntungan'] / 100) + $harga_ppn;
                $potongan = $hargaperitem - ($hargaperitem * $value['diskon'] / 100);
                $penjualan = $value['qty'] * $hargaperitem;
                $totalpotongan =  $value['qty'] * $potongan;

                $hpp =  $value['qty'] * $value['harga'];
                $hasilAkhir = $totalpotongan - $hpp;
                // return $hasilAkhir;
                // return $penjualan." / ".$totalpotongan;
                DB::table('stock_out')->insert([
                    'sales_order_id' => $sales->id,
                    'product_id' => $value['id'],
                    'jumlah' => $value['qty'],
                    'keuntungan' => 0,
                    'diskon' => $value['diskon'],
                    'harga' => $value['harga'],
                    'keuntungan' => $value['keuntungan'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'laba_keuntungan' => ($value['harga'] * $value['keuntungan'] / 100),
                    'laba_kotor' => $hasilAkhir
                ]);
                if ($value['product_type_id'] == "1") {
                    $stok_in = StockIN::where('product_id', $value['id'])->orderBy('expired_date', 'asc')->get();
                } else {
                    $stok_in = StockIN::where('product_id', $value['id'])->orderBy('created_at', 'asc')->get();
                }
                $kebutuhan = (int)$value['qty'];
                foreach ($stok_in as $key => $value2) {
                    $stok = (int)$value2->jumlah;
                    if ($stok != 0 && ($stok >= $kebutuhan)) {
                        $stok_in = StockIN::where('product_id', '=', $value['id'])->where('id', '=', $value2->id)->first();
                        $stok_in->jumlah = $stok - $kebutuhan;
                        $stok_in->save();
                        $kebutuhan = $stok - $kebutuhan;
                        break;
                    } else if ($stok != 0 && ($stok < $kebutuhan)) {
                        $stok_in = StockIN::where('product_id', '=', $value['id'])->where('id', '=', $value2->id)->first();
                        $stok_in->jumlah = 0;
                        $stok_in->save();
                        $kebutuhan = $kebutuhan - $stok;
                    } else {
                    }
                }
            }
            DB::commit();
            return response()->json(
                [
                    'status' => 'ok',
                    'data' => $request->all()
                ]
            );
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(
                [
                    'error' => $e->getMessage(),
                    'status' => 'bad'
                ]
            );
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    //Custom Function
    public function riwayat_transaksi()
    {
//        $total_barang_terjual = StockOut::whereDate('created_at', Carbon::today())->sum('jumlah');
//<<<<<<< Updated upstream

//        $total_pendapatan = Sales::whereDate('created_at', Carbon::today())->sum('total');
//        $total_keuntungan = 0;
//        $total_pembeli = Sales::whereDate('created_at', Carbon::today())->count();
//        // $stock_out = StockOut::whereDate('created_at', Carbon::today())
//        // ->join('products','products.id','=','stock_out.product_id')
//        // ->select()
//        // ->get();
//        $stock_out = 0;
//        return view('pages.transaksi.penjualan.transaksi-hari-ini', compact('stock_out','total_barang_terjual','total_pendapatan','total_keuntungan','total_pembeli'));
//=======
        $stock_out = StockOut::with('SalesOrder.Customer', 'Product')->
        where('created_at', '>=', Carbon::now()->toDateString())
            ->get();
//        dd($stock_out);
        $totalBarangTerjual = $stock_out->count();

        $totalPembeli = $stock_out->groupBy('sales_order_id')->count();

        $totalKeuntungan = 0;
        $totalPendapatan = StockOut::selectRaw('SUM(harga*jumlah) as pendapatan')->where('created_at', '>=', Carbon::now()->toDateString())->pluck('pendapatan')->first();
        $stock_out->each(function ($value) use (&$totalKeuntungan, $totalPendapatan) {
            $totalKeuntungan += (($value->harga * $value->keuntungan / 100) * $value->jumlah) - (($value->harga * $value->diskon / 100) * $value->jumlah);
        });
        return view('pages.transaksi.penjualan.transaksi-hari-ini', compact('stock_out', 'totalPendapatan', 'totalKeuntungan', 'totalPembeli', 'totalBarangTerjual'));
    }

    public function viewLaporanBulananPenjualan($tglawal = null, $tglakhir = null)
    {
        if ($tglawal != null && $tglakhir != null) {
              $salesOrder = Sales::where('state', '=', 'Lunas')->whereBetween(DB::raw('DATE(transaction_date)'), [$tglawal,$tglakhir])->get();
           // $salesOrder = Sales::where('state', '=', 'Lunas')->where('created_at','>=', $tglawal)->where('created_at','<=', $tglakhir)->get();
        } else {
            $salesOrder = Sales::where('state', '=', 'Lunas')->get();
        }
        return view('pages.transaksi.penjualan.laporan-bulanan', compact('salesOrder', 'tglawal', 'tglakhir'));
    }
}
