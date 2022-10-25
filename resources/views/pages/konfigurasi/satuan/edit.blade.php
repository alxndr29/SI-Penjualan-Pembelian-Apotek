@extends('layouts.simple.master')
@section('title', 'Edit Satuan Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Edit Data - {{$UOMS->name}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item"><a href="{{route('satuan-produk.index')}}">Daftar Satuan Produk</a></li>
    <li class="breadcrumb-item">{{$UOMS->name}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('satuan-produk.update',$UOMS->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                                        <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                                               autofocus="true" name="name"
                                               placeholder="Masukan Nama" value="{{$UOMS->name}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Deskripsi">Deskripsi</label>
                                    <textarea class="form-control form-control-lg" id="Deskripsi" name="description"
                                              rows="3">{{$UOMS->description}}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg mt-4" type="submit" >Simpan Data</button>
                            <a href="{{ route('satuan-produk.index') }}" class="btn btn-outline-secondary btn-lg mt-4" >Kembali</a>
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
