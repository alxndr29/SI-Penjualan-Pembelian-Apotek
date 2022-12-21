<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\ProductUOM;
use App\Models\StockIN;
use App\Models\StockOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
//        $products = Product::with('Category','UOM','Type','stock_in')
//            ->get();
        $product_uoms = ProductUOM::all();
        $product_categories = ProductCategory::all();

        $products = DB::table('get_product')->get();


        return view('pages.konfigurasi.produk.index', compact('products', 'product_categories', 'product_uoms'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = ProductCategory::where('id', $request->product_categories)->pluck('product_type_id');
        Product::create([
            'nama' => $request->name,
            'product_type_id' => $data->first(),
            'product_category_id' => $request->product_categories,
            'product_uom_id' => $request->product_uom,
            'diskon' => $request->diskon,
            'keuntungan' => $request->keuntungan,
            'min_stock' => $request->min_stock,
        ]);

        return redirect()->route('daftar-produk.index')->with(['success' => 'menambahkan data baru']);
    }

    public function show($id)
    {
        $products = Product::with('type')->find($id);
        $product = DB::table('products as p')
            ->join('product_categories as c', 'p.product_category_id', '=', 'c.id')
            ->join('product_uom as u', 'p.product_uom_id', '=', 'u.id')
            ->join('product_types as t', 'p.product_type_id', '=', 't.id')
            ->where('p.id', '=', $id)
            ->select('p.*', 't.name as type_product', 'u.name as uom_product', 'c.name as category',
                db::raw("(SELECT si.harga FROM stock_in AS si
                WHERE si.product_id = ".$id ." AND si.jumlah > 0
                ORDER BY CASE WHEN p.product_type_id = 1 then si.expired_date END ASC, CASE WHEN p.product_type_id = 2 THEN si.created_at END ASC
                LIMIT 1) AS harga"),
                db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si WHERE si.product_id = " .$id . ") AS stok_barang")
            )->get();
        if ($product->first()->product_type_id == 1) {
            $stock_in = StockIN::with('purchase_order.supplier', 'product')
                ->where('product_id', '=', $id)
                ->orderBy('expired_date', 'asc')->get();
        } else {
            $stock_in = StockIN::with('purchase_order.supplier', 'product.UOM')
                ->where('product_id', '=', $id)
                ->orderBy('created_at', 'asc')->get();
        }
        $stock_out = StockOut::with('SalesOrder.Customer')
            ->where('product_id', '=', $id)
            ->orderByDesc('created_at')->get();
        return view('pages.konfigurasi.produk.show', compact('product', 'stock_in', 'stock_out'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $product_uoms = ProductUOM::all();
        $product_categories = ProductCategory::all();

        return view('pages.konfigurasi.produk.edit', compact('product', 'product_uoms', 'product_categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = ProductCategory::where('id', $request->product_categories)->pluck('product_type_id');
        $product->update([
            'nama' => $request->name,
            'product_type_id' => $data->first(),
            'product_category_id' => $request->product_categories,
            'product_uom_id' => $request->product_uom,
            'min' => $request->min_stock,
            'diskon' => $request->diskon,
            'keuntungan' => $request->keuntungan,
        ]);
        return redirect()->route('daftar-produk.index')->with(['success' => 'Merubah Data']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('daftar-produk.index')->with(['success' => 'Merubah Data']);
    }
}
