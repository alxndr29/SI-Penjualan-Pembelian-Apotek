<?php

namespace App\Http\Controllers;

use App\Models\ProductUOM;
use App\Models\StockIN;
use App\Models\StockOut;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyimpananController extends Controller
{

    public function stokBarangView(Request $request)
    {
        //        $stokProduct = DB::table('products')
        //            ->rightJoin('')
        // return Carbon::now()->month;
        $month = $request->month;
        if (isset($month)) {
            $year = Carbon::now()->year;

            if($month == 01){
                $lastMonth = 12;
                $year = $year - 1;
            }
            else{
                $lastMonth = $month -1 ;
            }
            $stockProduct = DB::table('products as p')
                ->select(
                    'p.nama',
                    db::raw("(SELECT DOX.stock_akhir FROM detail_stock_opname AS DOX WHERE  dox.product_id = p.id AND YEAR(dox.created_at) = " . $year . " AND MONTH(dox.created_at) = " . $lastMonth  . ") AS stok_awal"),
                    db::raw("(SELECT SUM(si.stok_masuk) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '" . $month. "') AS stok_masuk"),
                    db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '" . $month . "') AS stok_keluar"),
                    db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga')
                )->get();
        } else {
            $curmonth = Carbon::now()->month;
            $year = Carbon::now()->year;
            if($curmonth == 01){
                $lastMonth = 12;
                $year = $year - 1;
            }
            $stockProduct = DB::table('products as p')
                ->select(
                    'p.nama',
                    db::raw("(SELECT DOX.stock_akhir FROM detail_stock_opname AS DOX WHERE  dox.product_id = p.id AND YEAR(dox.created_at) = '" . $year . "' AND MONTH(dox.created_at) = '" . $lastMonth . "') AS stok_awal"),
                    db::raw("(SELECT SUM(si.stok_masuk) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '" . $curmonth . "') AS stok_masuk"),
                    db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '" . $curmonth . "') AS stok_keluar"),
                    db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga')
                )->get();
        }

        return view('pages.penyimpanan.stok-barang', compact('stockProduct' , 'month'));
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
        // return $stockOut;
        $uoms = ProductUOM::pluck('id', 'name');
        // return 'a';
        return view('pages.penyimpanan.stok-keluar', compact('stockOut', 'uoms'));
    }
}
