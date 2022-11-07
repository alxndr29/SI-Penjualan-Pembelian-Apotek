<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Sales;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function hutangView()
    {
        $data_hutang = Purchase::with('supplier')->
        where('payment_method', '=', 'Kredit')->get();

        return view('pages.keuangan.hutang',compact('data_hutang'));
    }
    public function piutangView()
    {
        $data_piutang = Sales::with('Customer')->where('payment_method','=','BPJS')->get();

        return view('pages.keuangan.piutang',compact('data_piutang'));
    }
    public function cashFlowView()
    {
        return view('pages.keuangan.cashflow');
    }
}
