<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypesController extends Controller
{
    public function index()
    {
        $items = ProductType::all();
        return view('pages.konfigurasi.jenis.index', compact('items'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        ProductType::create([
            'name' => $request->name,
            'description' => $request->deskripsi
        ]);

        return redirect()->route('jenis-produk.index')->with(['success' => 'menambahkan data baru']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $productType = ProductType::find($id);
        return view('pages.konfigurasi.jenis.edit', compact('productType'));
    }

    public function update($id, Request $request)
    {
        $productType = ProductType::find($id);
        $productType->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('jenis-produk.index')->with(['success' => 'merubah data menjadi ' . $request->input('name')]);
    }

    public function destroy($id)
    {
        $productType = ProductType::find($id);
        $productType->delete();
        return redirect()->route('jenis-produk.index')->with(['success' => 'menghapus data']);
    }
}
