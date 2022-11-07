@extends('layouts.simple.master')
@section('title', 'Stok Barang')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Stok Barang</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Penyimpanan
    </li>
    <li class="breadcrumb-item active">Stok Barang</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-9">
                                <label class="form-label" for="exampleFormControlSelect9">Bulan</label>
                                <select class="form-select digits" id="exampleFormControlSelect9">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-lg btn-primary w-100 mt-4">Cari Data</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Stok Awal</th>
                                    <th>Stok Masuk</th>
                                    <th>Total Persediaan</th>
                                    <th>Stok Keluar</th>
                                    <th>Harga</th>
                                    <th>Total Penjualan</th>
                                    <th>Stok Akhir</th>
                                    <th>Asset (Rp)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @for($i = 1; $i<100; $i++)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td><a href="" class="fw-bold text-primary">Paramex {{$i}}</a></td>
                                        <td>500</td>
                                        <td>300</td>
                                        <td>800</td>
                                        <td>50</td>
                                        <td>Rp. 23.000</td>
                                        <td>Rp. {{50 * 23000}}</td>
                                        <td>750</td>
                                        <td>Rp. {{50 * 23000}}</td>
                                    </tr>
                                @endfor
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal-large title="Detail Barang">

    </x-modal-large>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
