<?php

namespace App\Http\Controllers;

use App\Models\StockOpname;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Catch_;
use App\Models\Product;
use App\Models\StockIN;

class StockOpnameController extends Controller
{
    public function index()
    {
        $data_stock_opname = StockOpname::all();
        return view('pages.penyimpanan.stock-opname.index', compact('data_stock_opname'));
    }

    public function create()
    {
        $products = DB::table('get_product')->get();
        return view('pages.penyimpanan.stock-opname.create', compact('products'));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            if ($request->get('tombol') == 'draft') {
                $stock_opname = StockOpname::create([
                    'no_opname' => Carbon::parse($request->tanggal_mulai)->format('m'),
                    'bulan' => Carbon::parse($request->tanggal_mulai)->format('m'),
                    'tanggal_mulai' => $request->get('tanggal_awal_pemeriksaan'),
                    'tanggal_berakhir' => $request->get('tanggal_akhir_pemeriksaan'),
                    'operator' => \Auth::id(),
                    'state' => 'Draft'
                ]);
                foreach ($request->get('data_products') as $key => $value) {
                    $stock_komputer = StockIN::where('product_id', $key);
                    DB::table('detail_stock_opname')->insert([
                        'stock_opname_id' => $stock_opname->id,
                        'product_id' => $key,
                        'stock_computer' => $stock_komputer->sum('jumlah'),
                        'stock_aktual' => $value,
                        'stock_selisih' => $value - $stock_komputer->sum('jumlah'),
                        'created_at' => date('Y-m-d'),
                        'updated_at' => date('Y-m-d')
                    ]);
                }
            } else {
                $stock_opname = StockOpname::create([
                    'no_opname' => Carbon::parse($request->tanggal_mulai)->format('m'),
                    'bulan' => Carbon::parse($request->tanggal_mulai)->format('m'),
                    'tanggal_mulai' => $request->get('tanggal_awal_pemeriksaan'),
                    'tanggal_berakhir' => $request->get('tanggal_akhir_pemeriksaan'),
                    'operator' => \Auth::id(),
                    'state' => 'Finish'
                ]);
                foreach ($request->get('data_products') as $key => $value) {
                    $stock_komputer = StockIN::where('product_id', $key);
                    DB::table('detail_stock_opname')->insert([
                        'stock_opname_id' => $stock_opname->id,
                        'product_id' => $key,
                        'stock_computer' => $stock_komputer->sum('jumlah'),
                        'stock_aktual' => $value,
                        'stock_selisih' => $value - $stock_komputer->sum('jumlah'),
                        'created_at' => date('Y-m-d'),
                        'updated_at' => date('Y-m-d')
                    ]);
                    $selisih = $value - $stock_komputer->sum('jumlah');
                    // return $selisih;
                    if ($value != $stock_komputer->sum('jumlah')) {
                        $data = $stock_komputer->first();
                        $result;
                        if ($data->product_type_id == 1) {
                            // array_push($result, StockIN::where('product_id', $key)->orderBy('expired_date', 'asc')->get());
                            $result = StockIN::where('product_id', $key)->orderBy('expired_date', 'asc')->get();
                        } else {
                            // array_push($result, StockIN::where('product_id', $key)->orderBy('created_at', 'asc')->get());
                            $result = StockIN::where('product_id', $key)->orderBy('created_at', 'asc')->get();
                        }
                        // return ($result);
                        foreach ($result as $key => $value2) {
                            if ($selisih < 0) {
                                $stok = (int) $value2->jumlah;
                                if ($stok != 0 && ($stok >= $selisih)) {
                                    $stok_in = StockIN::where('id', '=', $value2->id)->first();
                                    // $stok_in->jumlah = ($stok + $selisih);
                                    if (($stok + $selisih < 0)) {
                                        $stok_in->jumlah = 0;
                                        $stok_in->save();
                                        $selisih = $stok + $selisih;
                                    } else {
                                        // break;
                                        $stok_in->jumlah = $stok + $selisih;
                                        $stok_in->save();
                                        $selisih = $stok + $selisih;
                                        break;
                                    }
                                    // return $selisih;
                                    // return 'sini';
                                } else if ($stok != 0 && ($stok < $selisih)) {
                                    $stok_in = StockIN::where('product_id', '=', $value2['id'])->where('id', '=', $value2->id)->first();
                                    $stok_in->jumlah = 0;
                                    $stok_in->save();
                                    $selisih = $selisih - $stok;
                                } else { }
                            } else if ($selisih > 0) {
                                // $stok = (int) $value2->jumlah;
                                // if ($stok != 0 && ($stok >= $selisih)) {
                                //     $stok_in = StockIN::where('id', '=', $value2->id)->first();
                                //     $stok_in->jumlah = ($stok + $selisih);
                                //     $stok_in->save();
                                //     $selisih = $stok + $selisih;
                                //     break;
                                // } else if ($stok != 0 && ($stok < $selisih)) {
                                //     $stok_in = StockIN::where('product_id', '=', $value2['id'])->where('id', '=', $value2->id)->first();
                                //     $stok_in->jumlah = 0;
                                //     $stok_in->save();
                                //     $selisih = $selisih + $stok;
                                // } else { }
                            } else { }
                        }
                    }
                    // return $selisih;
                }
            }
            DB::commit();
            // return $request->get('data_products');
            return redirect('penyimpanan/stock-opname/')->with(['success' => 'menambahkan data baru']);
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            return StockOpname::join('detail_stock_opname', 'stock_opname.id', '=', 'detail_stock_opname.stock_opname_id')
                ->join('products', 'products.id', 'detail_stock_opname.product_id')
                ->select('products.nama', 'detail_stock_opname.*')
                ->groupBy('products.id')
                ->where('stock_opname.id', $id)
                ->get();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function verifikasiOpname(Request $request)
    {
        $month = Carbon::parse($request->date)->format('m');
        $year = Carbon::parse($request->date)->format('Y');
        $listMonth = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        if($month == 01){
            $lastMonth = 12;
            $lastYear = $year - 1;
        }
        else{
            $lastMonth = $month -1 ;
        }


        $stockProduct = DB::table('products as p')
            ->select(
                'p.nama','p.id as product_id',
                db::raw("(SELECT DOX.stock_akhir FROM detail_stock_opname AS DOX WHERE dox.product_id = p.id AND YEAR(dox.created_at) = " . $lastYear . " AND MONTH(dox.created_at) = " . $lastMonth  . ") AS stock_last_month"),
                db::raw("(SELECT SUM(si.stok_masuk) FROM stock_in AS si INNER JOIN purchase_order AS po ON si.purchase_order_id = po.id WHERE po.state = 'Lunas' AND si.product_id = p.id AND MONTH(po.transaction_date) = '" . $month . "' AND YEAR(po.transaction_date) = " . $year . ") AS stok_masuk"),
                db::raw("(SELECT SUM(s_out.jumlah) FROM stock_out AS s_out INNER JOIN sales_order AS so ON s_out.sales_order_id = so.id WHERE so.state = 'Lunas' AND s_out.product_id = p.id AND MONTH(so.transaction_date) = '" . $month . "' AND YEAR(so.transaction_date) = " . $year . ") AS stok_keluar"),
            )->get();

        return response()->json([
            'status' => 200,
            'data' => view('pages.penyimpanan.stock-opname._verifikasiOpnameModal',compact('stockProduct'))->render(),
            'stockProduct' => $stockProduct,
            'bulan' => $listMonth[$month]
        ]);
    }

    public function closingStock(Request $request)
    {
        $stockOpname = DB::table('detail_stock_opname')->where('stock_opname_id', $request->stock_opname_id)->get();

        DB::table('stock_opname')
            ->where('id', $request->stock_opname_id)
            ->update([
                'state_closing' => 1
            ]);
        foreach ($request->stok_akhir as $key => $value)
        {
            DB::table('detail_stock_opname')
                ->where('product_id', $key)
                ->where('stock_opname_id', $request->stock_opname_id)
                ->update([
                    'stock_akhir' => $value
                ]);
        }
        return redirect()->route('stock-opname.index')->with(['success' => 'Berhasil Closing Stock']);
    }
    public function edit($id)
    {
        // $data = DB::table('detail_stock_opname as dso')
        //     ->join('stock_opname as so', 'dso.stock_opname_id', '=', 'so.id')
        //     ->join('products as p', 'dso.product_id', '=', 'p.id')
        //     ->where('dso.id', '=', $id)
        //     ->select(
        //         'so.*',
        //         'dso.*',
        //         'p.*',
        //         db::raw("(SELECT t.name  FROM product_types as t where t.id = p.product_type_id) as type"),
        //         db::raw("(SELECT c.name  FROM product_categories as c where c.id = p.product_category_id) as category"),
        //         db::raw("(SELECT u.name   FROM product_uom as u where u.id = p.product_uom_id) as uom"),
        //         db::raw('(SELECT si.harga FROM stock_in AS si WHERE si.product_id = p.id AND si.jumlah > 0 ORDER BY CASE WHEN p.product_type_id = 1 then si.created_at END ASC, CASE WHEN p.product_type_id = 2 THEN si.expired_date END ASC LIMIT 1) AS harga'),
        //         db::raw("(SELECT SUM(si.jumlah) FROM stock_in AS si WHERE si.product_id = dso.product_id) AS stok_barang")
        //     )->get();
        $data = StockOpname::find($id);
        // $data2 = StockOpname::join('detail_stock_opname', 'stock_opname.id', '=', 'detail_stock_opname.stock_opname_id')
        //     ->join('products', 'products.id', 'detail_stock_opname.product_id')
        //     ->select('products.nama','products.id as idproducts', 'detail_stock_opname.*')
        //     ->groupBy('products.id')
        //     ->where('stock_opname.id', $id)
        //     ->get();
        $data2 = DB::table('get_product')
            ->join('detail_stock_opname', 'get_product.id', '=', 'detail_stock_opname.product_id')
            ->where('detail_stock_opname.stock_opname_id', $id)
            ->select('get_product.*','get_product.id as idproduct', 'detail_stock_opname.*')
            ->get();
        // return $data2;
        return view('pages.penyimpanan.stock-opname.edit', compact('data', 'data2'));
    }

    public function update(Request $request, $id)
    {
        // return $id;
        DB::beginTransaction();
        // return $request->get('data_products');
        // try {
        if ($request->get('tombol') == 'draft') {
            $stock_opname = StockOpname::where('id', '=', $id)->update([
                'no_opname' => Carbon::parse($request->tanggal_mulai)->format('m'),
                'bulan' => Carbon::parse($request->tanggal_mulai)->format('m'),
                'tanggal_mulai' => $request->get('tanggal_awal_pemeriksaan'),
                'tanggal_berakhir' => $request->get('tanggal_akhir_pemeriksaan'),
                'operator' => \Auth::id(),
                'state' => 'Draft'
            ]);
            foreach ($request->get('data_products') as $key => $value) {
                $stock_komputer = StockIN::where('product_id', $key);
                DB::table('detail_stock_opname')->where('stock_opname_id', '=', $id)->where('product_id', '=', $key)->update([
                    // 'stock_opname_id' => $id,
                    // 'product_id' => $key,
                    'stock_computer' => $stock_komputer->sum('jumlah'),
                    'stock_aktual' => $value,
                    'stock_selisih' => $value - $stock_komputer->sum('jumlah'),
                    'created_at' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d')
                ]);
            }
        } else {
            $stock_opname = StockOpname::where('id', '=', $id)->update([
                'no_opname' => Carbon::parse($request->tanggal_mulai)->format('m'),
                'bulan' => Carbon::parse($request->tanggal_mulai)->format('m'),
                'tanggal_mulai' => $request->get('tanggal_awal_pemeriksaan'),
                'tanggal_berakhir' => $request->get('tanggal_akhir_pemeriksaan'),
                'operator' => \Auth::id(),
                'state' => 'Finish'
            ]);
            foreach ($request->get('data_products') as $key => $value) {
                $stock_komputer = StockIN::where('product_id', $key);
                DB::table('detail_stock_opname')->where('stock_opname_id', '=', $id)->where('product_id', $key)->update([
                    // 'stock_opname_id' => $id,
                    // 'product_id' => $key,
                    'stock_computer' => $stock_komputer->sum('jumlah'),
                    'stock_aktual' => $value,
                    'stock_selisih' => $value - $stock_komputer->sum('jumlah'),
                    'created_at' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d')
                ]);
                $selisih = $value - $stock_komputer->sum('jumlah');
                // return $selisih;
                if ($value != $stock_komputer->sum('jumlah')) {
                    $data = $stock_komputer->first();
                    $result;
                    if ($data->product_type_id == 1) {
                        // array_push($result, StockIN::where('product_id', $key)->orderBy('expired_date', 'asc')->get());
                        $result = StockIN::where('product_id', $key)->orderBy('expired_date', 'asc')->get();
                    } else {
                        // array_push($result, StockIN::where('product_id', $key)->orderBy('created_at', 'asc')->get());
                        $result = StockIN::where('product_id', $key)->orderBy('created_at', 'asc')->get();
                    }
                    // return ($result);
                    foreach ($result as $key => $value2) {
                        if ($selisih < 0) {
                            $stok = (int) $value2->jumlah;
                            if ($stok != 0 && ($stok >= $selisih)) {
                                $stok_in = StockIN::where('id', '=', $value2->id)->first();
                                // $stok_in->jumlah = ($stok + $selisih);
                                if (($stok + $selisih < 0)) {
                                    $stok_in->jumlah = 0;
                                    $stok_in->save();
                                    $selisih = $stok + $selisih;
                                } else {
                                    // break;
                                    $stok_in->jumlah = $stok + $selisih;
                                    $stok_in->save();
                                    $selisih = $stok + $selisih;
                                    break;
                                }
                                // return $selisih;
                                // return 'sini';
                            } else if ($stok != 0 && ($stok < $selisih)) {
                                $stok_in = StockIN::where('product_id', '=', $value2['id'])->where('id', '=', $value2->id)->first();
                                $stok_in->jumlah = 0;
                                $stok_in->save();
                                $selisih = $selisih - $stok;
                            } else { }
                        } else if ($selisih > 0) {
                            // $stok = (int) $value2->jumlah;
                            // if ($stok != 0 && ($stok >= $selisih)) {
                            //     $stok_in = StockIN::where('id', '=', $value2->id)->first();
                            //     $stok_in->jumlah = ($stok + $selisih);
                            //     $stok_in->save();
                            //     $selisih = $stok + $selisih;
                            //     break;
                            // } else if ($stok != 0 && ($stok < $selisih)) {
                            //     $stok_in = StockIN::where('product_id', '=', $value2['id'])->where('id', '=', $value2->id)->first();
                            //     $stok_in->jumlah = 0;
                            //     $stok_in->save();
                            //     $selisih = $selisih + $stok;
                            // } else { }
                        } else { }
                    }
                }
                // return $selisih;
            }
        }
        DB::commit();
        // return $request->get('data_products');
        return redirect('penyimpanan/stock-opname/')->with(['success' => 'menambahkan edit baru']);
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return $e->getMessage();
        // }
    }

    public function destroy($id)
    { }
}
