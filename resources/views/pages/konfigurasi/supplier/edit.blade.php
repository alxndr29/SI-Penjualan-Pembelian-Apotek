@extends('layouts.simple.master')
@section('title', 'Edit Satuan Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Edit Data - {{$supplier->name}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item"><a href="{{route('satuan-produk.index')}}">Daftar Satuan Produk</a></li>
    <li class="breadcrumb-item">{{$supplier->name}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('supplier.update',$supplier->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-12">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                                           autofocus="true" name="name"
                                           placeholder="Masukan Nama" value="{{$supplier->name}}">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="Alamat">Alamat</label>
                                    <input class="form-control form-control-lg" id="Alamat "
                                           autofocus="true" name="alamat"
                                           placeholder="Masukan Alamat" value="{{$supplier->address}}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="telfon">No.Telfon</label>
                                    <input class="form-control form-control-lg" id="telfon"
                                           autofocus="true" name="telfon"
                                           placeholder="Masukan Nomor Telfon" value="{{$supplier->telephone}}">
                                </div>

                                <div class="col-3">
                                    <label class="form-label" for="rekening">Nomor Pembayaran / Nomor Rekening</label>
                                    <input class="form-control form-control-lg" id="rekening "
                                           autofocus="true" name="rekening"
                                           placeholder="Masukan Nomor Pembayaran / Rekening" value="{{$supplier->bank_address}}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Telfon">No.Telfon</label>
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-success">
                                            <input class="form-check-input" {{$supplier->status != 0 ? 'checked' : ''}} id="Active" type="radio" name="state" value="1">
                                            <label class="form-check-label" for="Active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-danger">
                                            <input class="form-check-input" {{$supplier->status == 0 ? 'checked' : ''}} id="Inactive" type="radio" name="state" value="0" data-bs-original-title="" title="">
                                            <label class="form-check-label" for="Inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Deskripsi">Deskripsi</label>
                                    <textarea class="form-control form-control-lg" id="Deskripsi" name="description"
                                              rows="3">{{$supplier->description}}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg mt-4" type="submit" >Simpan Data</button>
                            <a href="{{ route('supplier.index') }}" class="btn btn-outline-secondary btn-lg mt-4" >Kembali</a>
                        </form>

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
