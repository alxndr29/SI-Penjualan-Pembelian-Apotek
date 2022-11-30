@extends('layouts.simple.master')
@section('title', 'Stok Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Mulai Stok Opname</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item"><a href="{{route('stock-opname.index')}}">Daftar Stock Opname</a></li>
<li class="breadcrumb-item active">Mulai Stok Opname</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <form action="{{route('stock-opname.update',$data->id)}}" method="post">
            @csrf
            @method('put')
            <div class="col-sm-12">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-3">
                            <label class="form-label" for="exampleFormControlSelect9">Tanggal Mulai Pemeriksaan</label>
                            <div class="input-group">
                                <input class="datepicker-here form-control digits" type="date" name="tanggal_awal_pemeriksaan" value="{{$data->tanggal_mulai}}">
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="exampleFormControlSelect9">Tanggal Berakhir
                                Pemeriksaan</label>
                            <div class="input-group">
                                <input class="datepicker-here form-control digits" type="date" name="tanggal_akhir_pemeriksaan" value="{{$data->tanggal_berakhir}}">
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <button class="btn btn-lg btn-outline-dark mt-4 me-2" type="submit" value="draft" name="tombol">Simpan sebagai draft</button>
                            <button class="btn btn-lg btn-primary mt-4" type="submit" name="tombol">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="cell-border" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis & Kategori</th>
                                        <th>Harga Jual</th>
                                        <th>Stok Sistem</th>
                                        <th>Stok Aktual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data2 as $key => $value)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td><span class="fw-bold badge badge-info">{{$value->type}}</span> - {{$value->category}}</td>
                                        <td>Rp. {{number_format($value->harga,0,',','.') }}</td>
                                        <td><span id="stok_sistem">{{number_format($value->stok_barang,0,',','.') }} </span>{{$value->uom}}</td>
                                        <td>
                                            <div class="input-group">
                                                <input value="{{$value->stock_aktual}}" class="form-control" type="number" min="0" value="{{$value->stok_barang}}" placeholder="Masukan Jumlah Stok Aktual" id="stok_aktual" name="data_products[{{$value->idproduct}}]">
                                                <span class="input-group-text" id="detail-produk-satuan">{{$value->uom}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                <tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection