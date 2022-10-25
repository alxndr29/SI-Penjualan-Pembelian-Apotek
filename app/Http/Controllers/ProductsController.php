<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\ProductUOM;
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


        return view('pages.konfigurasi.produk.index',compact('products','product_categories','product_uoms'));
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
        $product = Product::find($id);
        return view('pages.konfigurasi.produk.show',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $product_uoms = ProductUOM::all();
        $product_categories = ProductCategory::all();

        return view('pages.konfigurasi.produk.edit', compact('product','product_uoms','product_categories'));
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

    }
}
