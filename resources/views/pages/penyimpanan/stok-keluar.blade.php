@extends('layouts.simple.master')
@section('title', 'Stok Keluar')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Stok Keluar</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Stok Keluar</li>
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
                                    <th>Waktu dan Jam</th>
                                    <th>Produk</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Customer</th>
                                    <th>Jumlah Stok Dikeluarkan</th>
                                    <th>Harga</th>
                                    <th>Grand Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($stockOut as $item)
                                <tr>
                                    <td>{{$i++}} </td>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d M y h:m:s')}}</td>
                                    <!-- <td class="text-danger fw-bolder" >{{$item->SalesOrder->no_transaction}}</td> -->
                                    <td>{{$item->product->nama}}</td>
                                    <td><span class="fw-bold badge badge-info">{{$item->Product->Type->name}}</span> - {{$item->Product->Category->name}}</td>
                                    <td>{{$item->SalesOrder->Customer->name}}</td>
                                    <td>{{$item->jumlah}} {{$item->Product->UOM->name}}</td>
                                    <td>Rp.{{number_format($item->harga * $item->jumlah,0,',','.') }}</td>
                                    <td>Rp. {{number_format( ($item->harga * $item->jumlah) + ($item->harga * $item->jumlah * $item->Product->keuntungan / 100) - ($item->harga * $item->jumlah * $item->Product->diskon / 100) )}}</td>
                                </tr>

                                @endforeach

                                {{-- @foreach($suppliers as $supplier)--}}
                                {{-- <tr>--}}
                                {{-- <td>{{$i+= 1}}</td>--}}
                                {{-- <td>{{$supplier->name}}</td>--}}
                                {{-- <td>{{$supplier->address}}</td>--}}
                                {{-- <td>{{$supplier->telephone}}</td>--}}
                                {{-- <td>--}}
                                {{-- <span class="badge badge-{{$supplier->status == 0 ? 'danger' : 'success'}}">{{$supplier->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</span>--}}
                                {{-- </td>--}}
                                {{-- <td>--}}
                                {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{-- action="{{ route('supplier.destroy', $supplier->id) }}" metdod="POST">--}}
                                {{-- <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>--}}
                                {{-- @csrf--}}
                                {{-- @metdod('DELETE')--}}
                                {{-- <button class="btn btn-danger btn-xs" type="submit"--}}
                                {{-- data-original-title="btn btn-danger btn-xs" title=""--}}
                                {{-- data-bs-original-title="">Delete--}}
                                {{-- </button>--}}
                                {{-- </form>--}}

                                {{-- </td>--}}
                                {{-- </tr>--}}
                                {{-- @endforeach--}}
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