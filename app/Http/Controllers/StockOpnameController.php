<?php

namespace App\Http\Controllers;

use App\Models\StockOpname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockOpnameController extends Controller
{
    public function index()
    {
        $data_stock_opname = StockOpname::all();
        return view('pages.penyimpanan.stock-opname.index',compact('data_stock_opname'));
    }

    public function create()
    {
        $products = DB::table('get_product')->get();
        return view('pages.penyimpanan.stock-opname.create', compact('products'));
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $data = DB::table('detail_stock_opname as dso')
            ->join('stock_opname as so','dso.stock_opname_id','=','so.id')
            ->join('products as p','dso.product_id','=','p.id')
            ->where('dso.id','=',$id)
            ->select('so.*','dso.*','p.*',
                db::raw("(SELECT t.name  FROM product_types as t where t.id = p.product_type_id) as type"),
                db::raw("(SELECT c.name  FROM product_categories as c where c.id = p.product_category_id) as category"),
                db::raw("(SELECT u.name   FROM product_uom as u where u.id = p.product_uom_id) as uom"),
                db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga'),
                db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si WHERE si.product_id = dso.product_id) AS stok_barang")
            )->get();
//        dd($data);
        return view('pages.penyimpanan.stock-opname.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
