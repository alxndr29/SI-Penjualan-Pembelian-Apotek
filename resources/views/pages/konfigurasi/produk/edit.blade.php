@extends('layouts.simple.master')
@section('title', 'Edit Data Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Edit Data - {{$product->nama}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item"><a href="{{route('daftar-produk.index')}}">Daftar Jenis Produk</a></li>
    <li class="breadcrumb-item">{{$product->nama}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('daftar-produk.update',$product->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-12">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                                           autofocus="true" name="name"
                                           placeholder="Masukan Nama Produk" value="{{$product->nama}}">
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label" for="product_uom">Satuan Produk</label>
                                    <select class="js-example-basic-single col-sm-12" id="product_uom" name="product_uom">
                                        @foreach($product_uoms as $uom)
                                            <option
                                                value="{{$uom->id}}" {{$uom->id == $product->UOM->id ? 'selected' : ''}}>{{$uom->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label" for="product_categories">Kategori Produk</label>
{{--                                    <select class="form-select digits" id="product_categories" name="product_categories">--}}

{{--                                    </select>--}}
                                    <select class="js-example-basic-single col-sm-12" name="product_categories">
                                        @foreach($product_categories as $category)
                                            <option
                                                value="{{$category->id}}" {{$category->id == $product->Category->id ? 'selected' : ''}}>[{{$category->Type->name }}] - {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="Diskon">Batas Minimum Stok</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="min_stock" value="{{$product->min_stock}}" placeholder="Masukan Diskon Untuk Produk Ini" aria-label="Recipient's username"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="Diskon">Diskon</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="diskon" value="{{$product->diskon}}" placeholder="Masukan Diskon Untuk Produk Ini" aria-label="Recipient's username"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="Diskon">Keuntungan Penjualan</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="keuntungan" value="{{$product->keuntungan}}" placeholder="Masukan Diskon Untuk Produk Ini" aria-label="Recipient's username"><span class="input-group-text">%</span>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary btn-lg mt-4" type="submit" >Simpan Data</button>
                            <a href="{{ route('daftar-produk.index') }}" class="btn btn-outline-secondary btn-lg mt-4" >Kembali</a>
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
