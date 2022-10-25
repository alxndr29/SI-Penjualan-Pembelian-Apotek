@extends('layouts.simple.master')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Produk</h6>
                        <h3 class="mb-4">1566 Produk</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Produk Terjual Hari Ini</h6>
                        <h3 class="mb-4">614 Pesanan</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Pendapatan</h6>
                        <h3 class="mb-4">Rp 15.000.000</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Pendapatan Bersih</h6>
                        <h3 class="mb-4">Rp. 15.000.000</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Produk Kadaluwarsa</h4>
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Tanggal Expired</th>
                                    <th>Sisa Stok</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>No</td>
                                        <td>{{$product->nama}}</td>
                                        <td>{{$product->uom}}</td>
                                        <td><span class="fw-bold badge badge-info">{{$product->type}}</span> - {{$product->category}}</td>
                                        <td>{{$product->min_stock}}</td>
                                        <td>15</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                    </tr>
                                @endforeach


                                {{--                            @foreach($products as $product)--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>{{$i += 1}}</td>--}}
                                {{--                                    <td style="font-size: 11px">{{$product->nama}}</td>--}}
                                {{--                                    <td>{{$product->uom}}</td>--}}
                                {{--                                    <td>{{$product->type}}</td>--}}
                                {{--                                    <td>{{$product->category}}</td>--}}
                                {{--                                    <td class="text-center">{{ $product->min_stock != 0 ? $product->min_stock : '0'}}</td>--}}
                                {{--                                    <td class="text-center">{{$product->keuntungan}} %</td>--}}
                                {{--                                    <td class="text-center">{{$product->diskon}} %</td>--}}
                                {{--                                    <td class="text-center">--}}
                                {{--                                        Rp. {{number_format($product->harga * 1.45,0,',','.') }}</td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{--                                              action="{{ route('daftar-produk.destroy', $product->id) }}"--}}
                                {{--                                              method="POST">--}}
                                {{--                                            <a href="{{route('daftar-produk.show', $product->id)}}"--}}
                                {{--                                               class="btn btn-info btn-sm">Detail</a>--}}
                                {{--                                            <a href="{{route('daftar-produk.edit', $product->id)}}"--}}
                                {{--                                               class="btn btn-warning btn-sm">Edit</a>--}}
                                {{--                                            @csrf--}}
                                {{--                                            @method('DELETE')--}}
                                {{--                                            <button class="btn btn-danger btn-sm" type="submit">--}}
                                {{--                                                Delete--}}
                                {{--                                            </button>--}}
                                {{--                                        </form>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                {{--                            @endforeach--}}

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Habis</h4>
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Batas Min Stok</th>
                                    <th>Sisa Stok</th>
                                    <th>Harga Jual</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>No</td>
                                        <td>{{$product->nama}}</td>
                                        <td>{{$product->uom}}</td>
                                        <td><span class="fw-bold badge badge-info">{{$product->type}}</span> - {{$product->category}}</td>
                                        <td>{{$product->min_stock}}</td>
                                        <td>15</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                    </tr>
                                @endforeach


                                {{--                            @foreach($products as $product)--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>{{$i += 1}}</td>--}}
                                {{--                                    <td style="font-size: 11px">{{$product->nama}}</td>--}}
                                {{--                                    <td>{{$product->uom}}</td>--}}
                                {{--                                    <td>{{$product->type}}</td>--}}
                                {{--                                    <td>{{$product->category}}</td>--}}
                                {{--                                    <td class="text-center">{{ $product->min_stock != 0 ? $product->min_stock : '0'}}</td>--}}
                                {{--                                    <td class="text-center">{{$product->keuntungan}} %</td>--}}
                                {{--                                    <td class="text-center">{{$product->diskon}} %</td>--}}
                                {{--                                    <td class="text-center">--}}
                                {{--                                        Rp. {{number_format($product->harga * 1.45,0,',','.') }}</td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{--                                              action="{{ route('daftar-produk.destroy', $product->id) }}"--}}
                                {{--                                              method="POST">--}}
                                {{--                                            <a href="{{route('daftar-produk.show', $product->id)}}"--}}
                                {{--                                               class="btn btn-info btn-sm">Detail</a>--}}
                                {{--                                            <a href="{{route('daftar-produk.edit', $product->id)}}"--}}
                                {{--                                               class="btn btn-warning btn-sm">Edit</a>--}}
                                {{--                                            @csrf--}}
                                {{--                                            @method('DELETE')--}}
                                {{--                                            <button class="btn btn-danger btn-sm" type="submit">--}}
                                {{--                                                Delete--}}
                                {{--                                            </button>--}}
                                {{--                                        </form>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                {{--                            @endforeach--}}

                                </tfoot>
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
