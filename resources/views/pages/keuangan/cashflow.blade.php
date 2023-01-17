@extends('layouts.simple.master')
@section('title', 'Cashflow')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Cashflow</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Cashflow</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Pemasukan</th>
                                    <th>Pengeluaran</th>
                                    <th>Piutang</th>
                                    <th>Hutang</th>
                                    <th>Keuntungan</th>
                                    <th>Laba Kotor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($cashflowByMonth as $item)
                                <tr>
                                    <td>{{$i += 1}}</td>
                                    <td>{{$item->bulan}}</td>
                                    <td style="text-align:right;">{{number_format($item->pemasukan,0,',','.') }}</td>
                                    <td style="text-align:right;">{{number_format($item->pengeluaran,0,',','.') }}</td>
                                    <td style="text-align:right;">{{number_format($item->piutang,0,',','.') }}</td>
                                    <td style="text-align:right;">{{number_format($item->hutang,0,',','.') }}</td>
                                    <td style="text-align:right;">{{number_format(99999,0,',','.') }}</td>
                                    <td style="text-align:right;">{{number_format(88888,0,',','.') }}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection