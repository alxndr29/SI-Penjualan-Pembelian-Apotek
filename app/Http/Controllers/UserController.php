<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.konfigurasi.user.index',compact('users'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('kategori-produk.index')->with(['success' => 'menambahkan data baru']);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.konfigurasi.kategori.edit', compact('user'));
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
