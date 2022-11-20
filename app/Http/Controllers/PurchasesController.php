<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StockIN;

class PurchasesController extends Controller
{
    public function index()
    {
        $product = ProductCategory::all();
        $supplier = Supplier::all();
        return view('pages.transaksi.pembelian.buat-transaksi-baru',compact('supplier'));
    }

    public function create()
    { }

    public function store(Request $request)
    {
        // return $request->get('metode-pembayaran');
        DB::beginTransaction();
        try {
            $purchase = new Purchase();
            $purchase->supplier_id = $request->get('supplier');
            $purchase->employe_id = 1;
            $purchase->no_transaction = '1234567';

            $purchase->tanggal_pelunasan = null;
            $purchase->total = $request->get('total');
            if($request->get('metode-pembayaran') == "Cash"){
                $purchase->state = 'Lunas';
                $purchase->payment_method = 'Tunai';
            }else{
                $purchase->state = 'Belum Lunas';
                $purchase->payment_method = 'Kredit';
                $purchase->tanggal_jatuh_tempo = $request->get('tanggal-jatuh-tempo');
            }

            $purchase->save();

            foreach($request->get('data_produk') as $key => $value){
                $stock_in = new StockIN();
                $stock_in->purchase_order_id = $purchase->id;
                $stock_in->product_id = $value['id'];
                $stock_in->expired_date = $value['expired'];
                $stock_in->jumlah = $value['expired'];
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

    public function viewLaporanBulananPembelian()
    {
        $purchaseOrder = Purchase::where('state','=','Lunas')->get();

        return view('pages.transaksi.pembelian.laporan-bulanan',compact('purchaseOrder'));
    }
}
