<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        // return $request->all();
        try{
            User::create([
                'name' => $request->get('nama'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'role' => $request->get('role')
            ]);

            return redirect()->route('user.index')->with(['success' => 'menambahkan data baru']);
        }catch(\Exception $e){
            return $e->getMessage();
        }
        

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.konfigurasi.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // $productCategory = productCategory::find($id);
        // $productCategory->update([
        //     'product_type_id' => $request->input('jenis'),
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description')
        // ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->get('password')){
            $user->password = bcrypt($request->get('password'));
        }
    
        $user->role = $request->get('role');
        $user->save();
        return redirect()->route('user.index')->with(['success' => 'ubah data']);
    }

    public function destroy($id)
    {
        // return $id;
        // $productCategory = productCategory::find($id);
        // $productCategory->delete();
        // return redirect()->route('kategori-produk.index')->with(['success' => 'menghapus data']);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'menghapus data']);
    }
}
