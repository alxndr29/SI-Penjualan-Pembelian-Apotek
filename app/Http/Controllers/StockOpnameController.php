<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockOpnameController extends Controller
{
    public function index()
    {
        return view('pages.penyimpanan.stock-opname.index');
    }

    public function create()
    {
        $products = DB::table('get_product')->get();
        return view('pages.penyimpanan.stock-opname.create', compact('products'));
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
