<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Sales;
use App\Models\StockIN;
use App\Models\StockOut;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class KeuanganController extends Controller
{
    public function hutangView()
    {
        $data_hutang = Purchase::with('supplier')->
        where('payment_method', '=', 'Kredit')->get();

        return view('pages.keuangan.hutang', compact('data_hutang'));
    }



    public function UpdateStatusHutang($id,Request $request)
    {
        $transaction = DB::table('purchase_order')
            ->where('id', '=', $id)
            ->update([
                'tanggal_pelunasan' => $request->tanggal_pelunasan,
                'state' => 'Lunas'
            ]);

        return redirect()->route('hutang')->with(['success' => 'menambahkan data baru']);
    }

    public function piutangView()
    {
        $data_piutang = Sales::with('Customer')->where('payment_method', '=', 'BPJS')->get();

        return view('pages.keuangan.piutang', compact('data_piutang'));
    }

    public function UpdateStatusPiutang($id,Request $request)
    {
        $transaction = DB::table('sales_order')
            ->where('id', '=', $id)
            ->update([
                'tanggal_pelunasan' => $request->tanggal_pelunasan,
                'state' => 'Lunas'
            ]);

        return redirect()->route('piutang')->with(['success' => 'menambahkan data baru']);
    }

    public function cashFlowView()
    {
        $cashflowByMonth = DB::table('get_cashflow')->get();
        return view('pages.keuangan.cashflow',compact('cashflowByMonth'));
    }

    public function showModalHutang(Request $request)
    {
        $purchase_order = Purchase::find($request->id);
        return response()->json(array(
            'status' => 1,
            'data' => view('pages.keuangan.component-hutang._showModalHutang',compact('purchase_order'))->render()
        ), 200);

    }
    public function showModalPurchaseOrder(Request $request)
    {
        $purchase_order = Purchase::find($request->id);
        $detail_order = StockIN::where('purchase_order_id','=',$request->id)->get();

        return response()->json(array(
            'status' => 1,
            'purchase_order' => view('pages.keuangan.component-hutang._showModalPurchaseOrder',compact('purchase_order'))->render(),
            'detail_purchase' => view('pages.keuangan.component-hutang._showModalDetailPurchaseOrder',compact('detail_order'))->render()
        ), 200);

    }


    public function showModalPiutang(Request $request)
    {
        $sales_order = Sales::find($request->id);
        return response()->json(array(
            'status' => 1,
            'data' => view('pages.keuangan.component-piutang._showModalPiutang',compact('sales_order'))->render()
        ), 200);

    }
    public function showModalSalesOrder(Request $request)
    {
        $sales_order = Sales::find($request->id);
        $detail_order = StockOut::where('sales_order_id','=',$request->id)->get();
        return response()->json(array(
            'status' => 1,
            'sales_order' => view('pages.keuangan.component-piutang._showModalSalesOrder',compact('sales_order'))->render(),
            'detail_sales' => view('pages.keuangan.component-piutang._showModalDetailSalesOrder',compact('detail_order'))->render()
        ), 200);

    }
}
