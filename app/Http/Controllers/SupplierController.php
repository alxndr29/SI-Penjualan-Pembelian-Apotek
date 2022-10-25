<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('pages.konfigurasi.supplier.index',compact('suppliers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        Supplier::create([
            'name' => $request->input('name'),
            'address' => $request->input('alamat'),
            'telephone' => $request->input('telfon'),
            'bank_address' => $request->input('rekening'),
            'description' => $request->input('description'),
            'status' => true,
        ]);

        return redirect()->route('supplier.index')->with(['success' => 'menambahkan data baru']);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('pages.konfigurasi.supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->update([
            'name' => $request->input('name'),
            'address' => $request->input('alamat'),
            'telephone' => $request->input('telfon'),
            'bank_address' => $request->input('rekening'),
            'description' => $request->input('description'),
            'status' => $request->input('state'),
        ]);
        return redirect()->route('supplier.index')->with(['success' => 'Merubah data ' . $request->input('name')]);
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->route('supplier.index')->with(['success' => 'menghapus data']);
    }
}
