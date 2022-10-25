<?php

namespace App\Http\Controllers;

class PenyimpananController extends Controller
{

    public function stokBarangView()
    {
        return view('pages.penyimpanan.stok-barang');
    }
    public function barangMasukView()
    {
        return view('pages.penyimpanan.stok-masuk');
    }
    public function barangKeluarView()
    {
        return view('pages.penyimpanan.stok-keluar');
    }
}
