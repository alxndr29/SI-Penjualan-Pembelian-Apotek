<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockIN;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboardView()
    {
        $products = DB::table('get_product')->get();
        $productByExpiredDate = DB::table('stock_in as si')
            ->join('products as p','si.product_id','=','p.id')
            ->join('purchase_order as po','si.purchase_order_id','=','po.id')
            ->where('si.jumlah','>',0)
            ->where('si.expired_date','<',Carbon::now()) //
            ->select('p.nama', 'si.*','po.no_transaction as nomor_transaksi')
            ->get();
        return view('dashboard.index', compact('products','productByExpiredDate'));
    }
}
