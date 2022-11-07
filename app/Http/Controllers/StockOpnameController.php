<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function index()
    {
        return view('pages.penyimpanan.stock-opname.index');
    }

    public function create()
    {
        return view('pages.penyimpanan.stock-opname.create');
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
