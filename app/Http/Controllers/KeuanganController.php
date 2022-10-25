<?php

namespace App\Http\Controllers;

class KeuanganController extends Controller
{
    public function hutangView()
    {
        return view('pages.keuangan.hutang');
    }
    public function piutangView()
    {
        return view('pages.keuangan.piutang');
    }
    public function cashFlowView()
    {
        return view('pages.keuangan.cashflow');
    }
}
