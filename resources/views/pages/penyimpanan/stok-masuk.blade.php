@extends('layouts.simple.master')
@section('title', 'Stok Masuk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Stok Masuk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Penyimpanan
    </li>
    <li class="breadcrumb-item active">Stok Masuk</li>
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
                                    <th>Waktu</th>
                                    <th>No.Transaksi</th>
                                    <th>Produk</th>
                                    <th>Supplier</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($stockIn as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->created_at)->format('d M y h:m:s')}}</td>
                                        <td class="text-primary fw-bolder" >PO-{{$item->purchase_order->no_transaction}}</td>
                                        <td>{{$item->product->nama}}</td>
                                        <td>{{$item->purchase_order->supplier->name}}</td>
                                        <td><span class="fw-bold badge badge-info">{{$item->Product->Type->name}}</span> - {{$item->Product->Category->name}}</td>
                                        <td>{{$item->jumlah}} {{$item->Product->UOM->name}}</td>
                                        <td>Rp. {{$item->harga}}</td>
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
