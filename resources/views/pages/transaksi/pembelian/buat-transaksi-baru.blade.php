@extends('layouts.simple.master')
@section('title', 'Satuan Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Buat Transaksi Baru</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Transaksi
    </li>
    <li class="breadcrumb-item">Pembelian</li>
    <li class="breadcrumb-item active">Buat Transaksi</li>
@endsection

@section('content')
    {{--        <view-penjualan></view-penjualan>--}}
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body py-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label" for="exampleFormControlInput1">No.Transaksi</label>
                            <input class="form-control disabled" disabled id="exampleFormControlInput1" type="text"
                                   placeholder="Otomatis" data-bs-original-title="" title="">
                        </div>
                        <div class="col-4">
                            <label>Supplier</label>
                            <select class="js-example-basic-single col-sm-12 form-control-sm">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        {{-- Component Vue--}}
                        <metode-pembayaran transaksi="Pembelian"></metode-pembayaran>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="col-form-label">Produk</div>
                                <select class="js-example-basic-single col-sm-12">
                                    <option value="AL">ACYCLOVIR 400 MG</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="col-form-label">Expired Date</div>
                                <input class="datepicker-here form-control digits" type="text" data-language="en">
                            </div>
                            <div class="col-lg-12 col-xl-12 col-xxl-8">
                                <label class="col-form-label">Jumlah</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="0"><span class="input-group-text">Tablet</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12 col-xxl-4">
                                <label class="col-form-label">Diskon Pembelian</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="1"><span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12 col-xxl-12">
                                <label class="col-form-label">Harga Pembelian</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span><input class="form-control" style="text-align: right;" type="text" placeholder="Masukan Harga Pembelian : Ex. 50.000">
                                </div>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">
                        <h5 class="py-2">Detail Produk</h5>
                        <div class="my-2">
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Jenis</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Kategori</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Stok Saat ini</p></div>
                                <div><p class="fw-bolder">15 Item</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div><p class="fw-light">Harga Jual</p></div>
                                <div><p class="fw-bolder">B</p></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row gy-2 mb-3">
                    <div class="col-12">
                        <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100">Lihat Penyimpanan
                        </button>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100">Tambah Pelanggan</button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-warning txt-dark btn-md me-3 w-100">Cancel</button>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success btn-lg me-3 w-100">Simpan Transaksi</button>
                    </div>
                </div>
            </div>
            <div class="col-8">

                <div class="card">
                    <div class="card-body py-3">
                        <div class="table-responsive">

                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Expired Date</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon (%)</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Panadol</td>
                                    <td>20/10/2022</td>
                                    <td>Rp. 131.000</td>
                                    <td><input type="number" value="0"></td>
                                    <td>5</td>
                                    <td>Rp. 655.000</td>
                                    <td>
                                        <button class="btn btn-outline-secondary txt-secondary btn-sm" type="button"
                                                data-bs-original-title="">Remove
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-body p-4">
                        <div class="d-flex flex-column ">
                            <h6>Rincian Harga</h6>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">Total Harga Barang</p></div>
                                <div><p class="fw-bolder">Rp. 612.311</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">Total Potongan Diskon</p></div>
                                <div><p class="fw-bolder txt-danger">- Rp.131.000</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><p class="fw-light">PPN (10%)</p></div>
                                <div><p class="fw-bolder">127.900</p></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div><h5 class="fw-bold text-success">Grand Total</h5></div>
                                <div><H5 class="fw-bold text-success">Rp. 612.312</H5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal-large title="Tambah Data Pelanggan"></x-modal-large>
    <x-modal-large title="Penyimpanan Barang"></x-modal-large>
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
