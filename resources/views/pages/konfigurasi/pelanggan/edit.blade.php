@extends('layouts.simple.master')
@section('title', 'Edit Pelanggan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Edit Data - {{$customer->name}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item"><a href="{{route('kategori-produk.index')}}">Daftar Pelanggan</a></li>
    <li class="breadcrumb-item">Edit Data - {{$customer->name}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('pelanggan.update',$customer->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-12">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                                           autofocus="true" name="name"
                                           placeholder="Masukan Nama Pelanggan" value="{{$customer->name}}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="telfon">No.Telfon</label>
                                    <input class="form-control form-control-lg" id="telfon"
                                           autofocus="true" name="telfon"
                                           placeholder="Masukan Nomor Telfon" {{$customer->telephone}}>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="alamat">Alamat Pelanggan</label>
                                    <textarea class="form-control form-control-lg" id="alamat" name="alamat"
                                              rows="3" placeholder="Masukan Alamat Pelanggan">{{$customer->address}}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Telfon">No.Telfon</label>
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-success">
                                            <input class="form-check-input" {{$customer->status != 0 ? 'checked' : ''}} id="Active" type="radio" name="state" value="1">
                                            <label class="form-check-label" for="Active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-danger">
                                            <input class="form-check-input" {{$customer->status == 0 ? 'checked' : ''}} id="Inactive" type="radio" name="state" value="0" data-bs-original-title="" title="">
                                            <label class="form-check-label" for="Inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary btn-lg mt-4" type="submit">Simpan Data</button>
                            <a href="{{ route('pelanggan.index') }}"
                               class="btn btn-outline-secondary btn-lg mt-4">Kembali</a>
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
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
