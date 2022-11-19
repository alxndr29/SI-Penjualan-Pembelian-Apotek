<?php

namespace App\Http\Controllers;

use App\Models\ProductUOM;
use App\Models\StockIN;
use App\Models\StockOut;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PenyimpananController extends Controller
{

    public function stokBarangView()
    {
//        $stokProduct = DB::table('products')
//            ->rightJoin('')
        $currentMonth = Carbon::now()->month;
        $stockProduct = DB::table('products as p')
            ->select(
                'p.nama',
                db::raw("(SELECT DOX.stock_aktual FROM detail_stock_opname AS DOX INNER JOIN stock_opname AS opn WHERE opn.state = 'Finish' AND dox.product_id = p.id AND opn.bulan = '". $currentMonth ."') AS stok_awal"),
                db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '". $currentMonth ."') AS stok_masuk"),
                db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '". $currentMonth ."') AS stok_keluar"),
                db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga')
            )->get();

        return view('pages.penyimpanan.stok-barang', compact('stockProduct'));
    }

    public function barangMasukView()
    {
        $stockIn = StockIN::with('product', 'purchase_order')->get();
        return view('pages.penyimpanan.stok-masuk', compact('stockIn'));
    }

    public function barangKeluarView()
    {
//        $stockOut = DB::table('stock_out as s')
//            ->join('sales_order as so', 's.sales_order_id', '=', 'so.id')
//            ->join('products as p', 's.product_id', '=', 'p.id')
//            ->select('so.*', 'p.*', 's.*')
//            ->get();
        $stockOut = StockOut::with('Product', 'SalesOrder')->get();
        $uoms = ProductUOM::pluck('id', 'name');

        return view('pages.penyimpanan.stok-keluar', compact('stockOut', 'uoms'));
    }
}
