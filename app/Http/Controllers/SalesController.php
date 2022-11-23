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
        return view('pages.transaksi.penjualan.buat-transaksi-baru', compact('products', 'customers'));
    }

    public function ambil_data_ajax_produk()
    {
        try {
            $data = Product::join('product_uom', 'product_uom.id', '=', 'products.product_uom_id')
                ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
                ->join('product_types', 'product_types.id', '=', 'products.product_type_id')
                ->leftJoin('stock_in', 'stock_in.product_id', '=', 'products.id')
                ->select(
                    'products.*',
                    'product_uom.name as uom_name',
                    'product_categories.name as categories_name',
                    'product_types.name as types_name',
                    DB::raw('sum(stock_in.jumlah) as jumlah_stok'),
                    DB::raw('max(stock_in.harga) as harga')
                )
                //->where(DB::raw('stock_in.id in (select max(id) from stock_in group by product_id)'))
                ->groupBy('products.id')

                ->get();

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
        //
        // return $request->all();
        try {
            $sales = new Sales();
            $sales->customer_id = $request->get('pelanggan');
            $sales->employee_id = Auth::user()->id;
            $sales->no_transaction = 1;
            $sales->transaction_date = Carbon::now();
            $sales->payment_method = $request->get('metode-pembayaran');
            if ($request->get('metode-pembayaran') == "Cash") {
                $sales->no_bpjs = "Tidak Ada";
                $sales->no_bpjs = "Lunass";
            } else {
                $sales->no_bpjs = $request->get('nomor-bpjs');
                $sales->state = "Belum Lunas";
            }
            $sales->total = $request->get('total');
            $sales->save();

            foreach ($request->get('data_produk') as  $value) {
                DB::table('stock_out')->insert([
                    'sales_order_id' => $sales->id,
                    'product_id' => $value['id'],
                    'jumlah' => $value['qty'],
                    'keuntungan' => 0,
                    'diskon' => $value['diskon'],
                    'harga' => $value['harga'],
                    'keuntungan' => $value['keuntungan'],
                    'created_at' => Carbon::now,
                    'updated_at' => Carbon::now
                ]);
                if ($value['product_type_id'] == "1") {
                    $stok_in = StockIN::where('product_id', $value['id'])->orderBy('created_at', 'asc')->get();
                } else {
                    $stok_in = StockIN::where('product_id', $value['id'])->orderBy('expired_date', 'asc')->get();
                }
                $kebutuhan = (int) $value['qty'];
                foreach ($stok_in as $key => $value2) {
                    $stok = (int) $value2->jumlah;
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
                    } else { }
                }
            }
            return response()->json(
                [
                    'status' => 'ok',
                    'data' => $request->all()
                ]
            );
        } catch (\Exception $e) {
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
        $total_barang_terjual = StockOut::whereDate('created_at', Carbon::today())->sum('jumlah');
        $total_pendapatan = Sales::whereDate('created_at', Carbon::today())->sum('total');
        $total_keuntungan = 0;
        $total_pembeli = Sales::whereDate('created_at', Carbon::today())->count();
        // $stock_out = StockOut::whereDate('created_at', Carbon::today())
        // ->join('products','products.id','=','stock_out.product_id')
        // ->select()
        // ->get();
        $stock_out = 0;
        return view('pages.transaksi.penjualan.transaksi-hari-ini', compact('stock_out','total_barang_terjual','total_pendapatan','total_keuntungan','total_pembeli'));
    }

    public function viewLaporanBulananPenjualan($tglawal = null, $tglakhir = null)
    {
        if ($tglawal != null && $tglakhir != null) {
            $salesOrder = Sales::where('state', '=', 'Lunas')->whereBetWeen('created_at', [$tglawal, $tglakhir])->get();
        } else {
            $salesOrder = Sales::where('state', '=', 'Lunas')->get();
        }
        return view('pages.transaksi.penjualan.laporan-bulanan', compact('salesOrder','tglawal','tglakhir'));
    }
}
