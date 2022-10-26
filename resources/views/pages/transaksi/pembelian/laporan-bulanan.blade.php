@extends('layouts.simple.master')
@section('title', 'Laporan Bulanan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Laporan Bulanan</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Transaksi
    </li>
    <li class="breadcrumb-item">Pembelian</li>
    <li class="breadcrumb-item active">Laporan Bulanan</li>
@endsection

@section('content')
    {{--        <view-penjualan></view-penjualan>--}}
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                    <label class="form-label" for="exampleFormControlSelect9">Tanggal Jatuh Tempo</label>
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="date" v-model="date">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="form-label" for="exampleFormControlSelect9">Tanggal Jatuh Tempo</label>
                                    <div class="input-group">
                                        <input class="datepicker-here form-control digits" type="date" v-model="date">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-lg btn-primary mt-4">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Supplier</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Pembelian</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Pegawai</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tr>
                                        <td>1</td>
                                        <td class="text-primary fw-bold">PO-0001</td>
                                        <td>PT A</td>
                                        <td>20-10-2022 16:12:11</td>
                                        <td>Rp. 150.000</td>
                                        <td>Cash</td>
                                        <td>User A</td>
                                        <td><button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                    data-bs-target=".bd-example-modal-lg">Detail Order
                                            </button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <x-modal-large title="Detail Transaksi" mode="">
        <div class="d-flex justify-content-between mb-4 px-4">
            <div>
                <span>Nomor Transaksi</span>
                <h5>PO-0001</h5>
            </div>
            <div>
                <span>Supplier</span>
                <h5>PT A</h5>
            </div>
            <div>
                <span>Metode Pembayaran</span>
                <h5>Kredit</h5>
            </div>

        </div>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </x-modal-large>
@endsection

@section('script')
    @vite('resources/js/app-vue.js')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>

    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
@endsection
