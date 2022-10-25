<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('pages.konfigurasi.pelanggan.index',compact('customers'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'telephone' => $request->telfon,
            'address' => $request->alamat,
            'status' => true
        ]);

        return redirect()->route('pelanggan.index')->with(['success' => 'menambahkan data baru']);
    }

    public function show(Customer $customer)
    {
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('pages.konfigurasi.pelanggan.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update([
            'name' => $request->name,
            'telephone' => $request->telfon,
            'address' => $request->alamat,
            'status' => $request->state
        ]);
        return redirect()->route('pelanggan.index')->with(['success' => 'merubah data']);
    }

    public function destroy(Customer $customer)
    {
    }
}
