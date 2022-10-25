<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use PhpParser\Node\Stmt\Catch_;

class SalesController extends Controller
{
    public function index()
    {
        $products = DB::table('get_product')->get();
        $customers = Customer::all();

        return view('pages.transaksi.penjualan.buat-transaksi-baru', compact('products', 'customers'));
    }

    public function ambil_data_ajax_produk()
    {
        try {
            $data = Product::join('product_uom', 'product_uom.id', '=', 'products.product_uom_id')
                ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
                ->join('product_types', 'product_types.id', '=', 'products.product_type_id')
                ->leftJoin('stock_in', 'stock_in.product_id', '=', 'products.id')
                ->select(
                    'products.*',
                    'product_uom.name as uom_name',
                    'product_categories.name as categories_name',
                    'product_types.name as types_name',
                    DB::raw('sum(stock_in.jumlah) as jumlah_stok'),
                    DB::raw('max(stock_in.harga) as harga')
                )
                //->where(DB::raw('stock_in.id in (select max(id) from stock_in group by product_id)'))
                ->groupBy('products.id')

                ->get();

            return response()->json(
                [
                    'produk' => $data,
                    'status' => 'ok'
                ]
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => $e,
                    'status' => 'bad'
                ]
            );
        }
    }

    public function riwayat_transaksi()
    {
        return view('pages.transaksi.penjualan.transaksi-hari-ini');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        
        try {
            return response()->json(
                [
                    'status' => 'ok',
                    'data' => $request->all()
                ]
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => $e,
                    'status' => 'bad'
                ]
            );
        }

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
}
