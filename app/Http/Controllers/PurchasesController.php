<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index()
    {
        $product = ProductCategory::all();

        return view('pages.transaksi.pembelian.buat-transaksi-baru');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    // Custom Function

    public function viewLaporanBulananPembelian()
    {
        return view('pages.transaksi.pembelian.laporan-bulanan');
    }
}
