<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockIN;
use App\Models\StockOut;
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
        $jumlahProdukStokHabis = 0;
        foreach ($products as $product) {
            if ($product->stok_barang < $product->min_stock) {
                $jumlahProdukStokHabis++;
            }
        }
        $productByExpiredDate = DB::table('stock_in as si')
            ->join('products as p', 'si.product_id', '=', 'p.id')
            ->join('purchase_order as po', 'si.purchase_order_id', '=', 'po.id')
            ->where('si.jumlah', '>', 0)
            ->where('si.expired_date', '<', Carbon::now()) //
            ->where('p.product_type_id', 1)
            ->select('p.nama', 'si.*', 'po.no_transaction as nomor_transaksi')
            ->get();
        $jumlahProdukTerjual = DB::table('sales_order')->join('stock_out', 'stock_out.sales_order_id', '=', 'sales_order.id')
            ->whereDate('sales_order.transaction_date', '=', Carbon::now()->toDateString())
            ->sum('stock_out.jumlah');
        $pendapatan = DB::table('sales_order')
            ->whereDate('transaction_date', '=', Carbon::now()->toDateString())
            ->where('state', 'Lunas')
            ->sum('total');
        return view('dashboard.index', compact('products', 'productByExpiredDate', 'jumlahProdukTerjual', 'pendapatan', 'jumlahProdukStokHabis'));
    }
}
