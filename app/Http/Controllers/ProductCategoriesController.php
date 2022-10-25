<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductCategoriesController extends Controller
{
    public function index()
    {
        $productType = ProductType::all();
        $categories = ProductCategory::with('Type')->get();
        return view('pages.konfigurasi.kategori.index',compact('categories','productType'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        ProductCategory::create([
            'product_type_id' => $request->jenis,
            'name' => $request->name,
            'description' => $request->deskripsi
        ]);

        return redirect()->route('kategori-produk.index')->with(['success' => 'menambahkan data baru']);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $productType = ProductType::all();
        $productCategory = ProductCategory::find($id);
        return view('pages.konfigurasi.kategori.edit', compact('productCategory','productType'));

    }

    public function update(Request $request, $id)
    {
        $productCategory = productCategory::find($id);
        $productCategory->update([
            'product_type_id' => $request->input('jenis'),
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('kategori-produk.index')->with(['success' => 'merubah data menjadi ' . $request->input('name')]);
    }

    public function destroy($id)
    {
        $productCategory = productCategory::find($id);
        $productCategory->delete();
        return redirect()->route('kategori-produk.index')->with(['success' => 'menghapus data']);
    }
}
