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
            <form action="{{route('stock-opname.store')}}" method="post">
                @csrf
                <div class="col-sm-12">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label" for="exampleFormControlSelect9">Tanggal Mulai Pemeriksaan</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="date" name="tanggal_awal_pemeriksaan">
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="exampleFormControlSelect9">Tanggal Berakhir
                                    Pemeriksaan</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="date" name="tanggal_akhir_pemeriksaan">
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
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($products as $product)
                                        <tr>
                                            {{-- <td type="hidden" name="data_products[]">{{$product->id}}</td>--}}
                                            <td>{{$i += 1}}</td>
                                            <td>{{$product->nama}}</td>
                                            <td><span class="fw-bold badge badge-info">{{$product->type}}</span> - {{$product->category}}</td>
                                            <td>Rp. {{number_format($product->harga,0,',','.') }}</td>
                                            <td><span id="stok_sistem">{{number_format($product->stok_barang,0,',','.') }} </span>{{$product->uom}}</td>
                                            <td>
                                                <div class="input-group">
                                                    <input class="form-control" type="number" min="0" value="{{$product->stok_barang}}" placeholder="Masukan Jumlah Stok Aktual"
                                                           id="stok_aktual" name="data_products[{{$product->id}}]">
                                                    <span class="input-group-text" id="detail-produk-satuan">{{$product->uom}}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--                                @for($i = 1; $i<100;$i++)--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>1</td>--}}
                                    {{--                                        <td>Paramex {{$i}}</td>--}}
                                    {{--                                        <td><span class="fw-bold badge badge-info"></span> -</td>--}}
                                    {{--                                        <td>Rp. 15.000</td>--}}
                                    {{--                                        <td>5 Strip</td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <div class="input-group">--}}
                                    {{--                                                <input class="form-control" type="number" min="0" value="0" placeholder="Masukan Jumlah Stok Aktual"--}}
                                    {{--                                                       id="jumlah-pembelian-produk">--}}
                                    {{--                                                <span class="input-group-text" id="detail-produk-satuan">UOM</span>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                @endfor--}}

                                    {{--                                @foreach($suppliers as $supplier)--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>{{$i+= 1}}</td>--}}
                                    {{--                                        <td>{{$supplier->name}}</td>--}}
                                    {{--                                        <td>{{$supplier->address}}</td>--}}
                                    {{--                                        <td>{{$supplier->telephone}}</td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <span class="badge badge-{{$supplier->status == 0 ? 'danger' : 'success'}}">{{$supplier->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</span>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                    {{--                                                  action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">--}}
                                    {{--                                                <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>--}}
                                    {{--                                                @csrf--}}
                                    {{--                                                @method('DELETE')--}}
                                    {{--                                                <button class="btn btn-danger btn-xs" type="submit"--}}
                                    {{--                                                        data-original-title="btn btn-danger btn-xs" title=""--}}
                                    {{--                                                        data-bs-original-title="">Delete--}}
                                    {{--                                                </button>--}}
                                    {{--                                            </form>--}}

                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                @endforeach--}}
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
