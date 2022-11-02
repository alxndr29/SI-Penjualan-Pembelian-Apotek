<?php

namespace App\Http\Controllers;

use App\Models\ProductUOM;
use App\Models\StockOut;
use Illuminate\Support\Facades\DB;

class PenyimpananController extends Controller
{

    public function stokBarangView()
    {
        return view('pages.penyimpanan.stok-barang');
    }

    public function barangMasukView()
    {
        return view('pages.penyimpanan.stok-masuk');
    }

    public function barangKeluarView()
    {
//        $stockOut = DB::table('stock_out as s')
//            ->join('sales_order as so', 's.sales_order_id', '=', 'so.id')
//            ->join('products as p', 's.product_id', '=', 'p.id')
//            ->select('so.*', 'p.*', 's.*')
//            ->get();
        $stockOut = StockOut::with('product','sales_order')->get();
        dd($stockOut);
        $uoms = ProductUOM::pluck('id', 'name');
        return view('pages.penyimpanan.stok-keluar', compact('stockOut', 'uoms'));
    }
}
