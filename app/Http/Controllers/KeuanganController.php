<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
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
        return view('pages.keuangan.piutang');
    }
    public function cashFlowView()
    {
        return view('pages.keuangan.cashflow');
    }
}
