<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductUOM;
use Illuminate\Http\Request;

class ProductUOMsController extends Controller
{
    public function index()
    {
        $ProductsUOM = ProductUOM::all();
        return view('pages.konfigurasi.satuan.index',compact('ProductsUOM'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        ProductUOM::create([
            'name' => $request->name,
            'description' => $request->deskripsi
        ]);

        return redirect()->route('satuan-produk.index')->with(['success' => 'menambahkan data baru']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $UOMS = ProductUOM::find($id);
        return view('pages.konfigurasi.satuan.edit', compact('UOMS'));
    }

    public function update(Request $request, $id)
    {
        $UOMS = ProductUOM::find($id);
        $UOMS->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('satuan-produk.index')->with(['success' => 'Merubah data ']);
    }

    public function destroy($id)
    {
        $UOMS = ProductUOM::find($id);
        $UOMS->delete();
        return redirect()->route('satuan-produk.index')->with(['success' => 'menghapus data']);
    }
}
