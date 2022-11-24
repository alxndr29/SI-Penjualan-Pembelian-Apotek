<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StockIN;
<<<<<<< Updated upstream
use Illuminate\Support\Carbon;
=======
use Carbon\Carbon;
>>>>>>> Stashed changes
class PurchasesController extends Controller
{
    public function index()
    {
        $product = ProductCategory::all();
        $supplier = Supplier::all();
<<<<<<< Updated upstream
        return view('pages.transaksi.pembelian.buat-transaksi-baru', compact('supplier'));
=======
        $currentMonth = Carbon::now()->month;
        $stockProduct = DB::table('products as p')
            ->select(
                'p.nama',
                db::raw("(SELECT DOX.stock_aktual FROM detail_stock_opname AS DOX INNER JOIN stock_opname AS opn WHERE opn.state = 'Finish' AND dox.product_id = p.id AND opn.bulan = '". $currentMonth ."') AS stok_awal"),
                db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '". $currentMonth ."') AS stok_masuk"),
                db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '". $currentMonth ."') AS stok_keluar"),
                db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga')
            )->get();

        return view('pages.transaksi.pembelian.buat-transaksi-baru',compact('supplier','stockProduct'));
>>>>>>> Stashed changes
    }

    public function create()
    { }

    public function store(Request $request)
    {
        // return $request->get('data_produk');
        // return $request->get('metode-pembayaran');
        DB::beginTransaction();
        try {
            $purchase = new Purchase();
            $purchase->supplier_id = $request->get('supplier');
            $purchase->employe_id = 1;
            $purchase->no_transaction = '1234567';
            $purchase->transaction_date = date('Y-m-d');

            $purchase->tanggal_pelunasan = null;
            $purchase->total = $request->get('total_akhir');
            if ($request->get('metode-pembayaran') == "Cash") {
                $purchase->state = 'Lunas';
                $purchase->payment_method = 'Tunai';
            } else {
                $purchase->state = 'Belum Lunas';
                $purchase->payment_method = 'Kredit';
                $purchase->tanggal_jatuh_tempo = $request->get('tanggal-jatuh-tempo');
            }

            $purchase->save();

            foreach ($request->get('data_produk') as $key => $value) {
                $stock_in = new StockIN();
                $stock_in->purchase_order_id = $purchase->id;
                $stock_in->product_id = $value['id'];
                $stock_in->expired_date = Carbon::parse($value['expired'])->format('Y-m-d');
                $stock_in->jumlah = $value['qty_pembelian'];
                $stock_in->diskon = $value['diskon_pembelian'];
                $stock_in->harga = $value['harga_pembelian'];
                $stock_in->save();
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
                    'status' => 'bad',
                    'data' => $e->getMessage()
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

    // Custom Function

    public function viewLaporanBulananPembelian($tglawal = null, $tglakhir = null)
    {
        if ($tglawal != null && $tglakhir != null) {
            $purchaseOrder = Purchase::where('state', '=', 'Lunas')->whereBetWeen('created_at', [$tglawal, $tglakhir])->get();
        } else {
            $purchaseOrder = Purchase::where('state', '=', 'Lunas')->get();
        }
        return view('pages.transaksi.pembelian.laporan-bulanan', compact('purchaseOrder', 'tglawal', 'tglakhir'));
    }
}
