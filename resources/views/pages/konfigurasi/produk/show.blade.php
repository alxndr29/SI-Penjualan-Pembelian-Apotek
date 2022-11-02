@extends('layouts.simple.master')
@section('title', 'Detail Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Detail Produk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item"><a href="{{route('jenis-produk.index')}}">Daftar Jenis Produk</a></li>
    <li class="breadcrumb-item">{{$product->nama}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <div>
                                <span>Nama</span>
                                <h5>{{$product->nama}}</h5>
                            </div>
                            <div>
                                <span>Jenis</span>
                                <h5>{{$product->Type->name}}</h5>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <span>Kategori</span>
                                <h5>{{$product->Category->name}}</h5>
                            </div>
                            <div>
                                <span>Satuan</span>
                                <h5>{{$product->UOM->name}}</h5>
                            </div>
                            {{--                            <div>--}}
                            {{--                                <span>Batas Minimum Stok</span>--}}
                            {{--                                <h5>5 Produk</h5>--}}
                            {{--                            </div>--}}
                            {{--                            <div>--}}
                            {{--                                <span>Diskon</span>--}}
                            {{--                                <h5>5%</h5>--}}
                            {{--                            </div>--}}
                            {{--                            <div>--}}
                            {{--                                <span>Keuntungan yang diambil</span>--}}
                            {{--                                <h5>5%</h5>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex ">
                            <p>sdasd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Masuk</h4>
                        <div class="table-responsive">
                            <table class="cell-border" style="min-width: 100%" id="basic-1">
                                <thead>
{{--                                <tr class="d-flex">--}}
{{--                                    <th class="col-1">No</th>--}}
{{--                                    <th class="col-3">Nomor Transaksi</th>--}}
{{--                                    <th class="col-3">Supplier</th>--}}
{{--                                    <th class="col-3">Expired Date</th>--}}
{{--                                    <th>Tanggal Masuk</th>--}}
{{--                                    <th>Jumlah</th>--}}
{{--                                    <th>Harga Beli</th>--}}
{{--                                </tr>--}}
                                <tr>
                                    <th>Nomor Transaksi</th>
                                    <th>Supplier</th>
                                    <th>Expired Date</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Jumlah</th>
                                    <th>Harga Beli</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @for($i; $i < 100; $i++)
                                    <tr>
                                        <td>PO-0{{$i < 10 ? '0'.$i : $i}}</td>
                                        <td>Supplier A</td>
                                        <td>20-10-2022</td>
                                        <td>01-10-2022 16:06:05</td>
                                        <td>15 Strip</td>
                                        <td>Rp. 150.000</td>
                                    </tr>
                                @endfor
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Keluar</h4>
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nomor Transaksi</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Jumlah</th>
                                    <th>Harga Jual</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @for($i; $i < 100; $i++)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>SO-0{{$i}}</td>
                                        <td>Pelanggan Umum</td>
                                        <td>01-10-2022 16:06:05</td>
                                        <td>15 Item</td>
                                        <td>Rp. 15.000</td>
                                    </tr>
                                @endfor
                                </tbody>
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
