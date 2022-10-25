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
                            <table class="display" id="basic-1">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
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
                                        <th>{{$i}}</th>
                                        <th>PO-001</th>
                                        <th>Supplier A</th>
                                        <th>20-10-2022</th>
                                        <th>01-10-2022 16:06:05</th>
                                        <th></th>
                                        <th>Harga Beli</th>
                                    </tr>
                                @endforeach


                                {{--                            @foreach($products as $product)--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>{{$i += 1}}</td>--}}
                                {{--                                    <td style="font-size: 11px">{{$product->nama}}</td>--}}
                                {{--                                    <td>{{$product->uom}}</td>--}}
                                {{--                                    <td>{{$product->type}}</td>--}}
                                {{--                                    <td>{{$product->category}}</td>--}}
                                {{--                                    <td class="text-center">{{ $product->min_stock != 0 ? $product->min_stock : '0'}}</td>--}}
                                {{--                                    <td class="text-center">{{$product->keuntungan}} %</td>--}}
                                {{--                                    <td class="text-center">{{$product->diskon}} %</td>--}}
                                {{--                                    <td class="text-center">--}}
                                {{--                                        Rp. {{number_format($product->harga * 1.45,0,',','.') }}</td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{--                                              action="{{ route('daftar-produk.destroy', $product->id) }}"--}}
                                {{--                                              method="POST">--}}
                                {{--                                            <a href="{{route('daftar-produk.show', $product->id)}}"--}}
                                {{--                                               class="btn btn-info btn-sm">Detail</a>--}}
                                {{--                                            <a href="{{route('daftar-produk.edit', $product->id)}}"--}}
                                {{--                                               class="btn btn-warning btn-sm">Edit</a>--}}
                                {{--                                            @csrf--}}
                                {{--                                            @method('DELETE')--}}
                                {{--                                            <button class="btn btn-danger btn-sm" type="submit">--}}
                                {{--                                                Delete--}}
                                {{--                                            </button>--}}
                                {{--                                        </form>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                {{--                            @endforeach--}}

                                </tfoot>
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
                            <table class="display" id="basic-1">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Tanggal Expired</th>
                                    <th>Sisa Stok</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>No</td>
                                        <td>{{$product->nama}}</td>
                                        <td>{{$product->uom}}</td>
                                        <td><span class="fw-bold badge badge-info">{{$product->type}}</span> - {{$product->category}}</td>
                                        <td>{{$product->min_stock}}</td>
                                        <td>15</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                        <td>{{$product->harga == null ? '0' : $product->harga}}</td>
                                    </tr>
                                @endforeach


                                {{--                            @foreach($products as $product)--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>{{$i += 1}}</td>--}}
                                {{--                                    <td style="font-size: 11px">{{$product->nama}}</td>--}}
                                {{--                                    <td>{{$product->uom}}</td>--}}
                                {{--                                    <td>{{$product->type}}</td>--}}
                                {{--                                    <td>{{$product->category}}</td>--}}
                                {{--                                    <td class="text-center">{{ $product->min_stock != 0 ? $product->min_stock : '0'}}</td>--}}
                                {{--                                    <td class="text-center">{{$product->keuntungan}} %</td>--}}
                                {{--                                    <td class="text-center">{{$product->diskon}} %</td>--}}
                                {{--                                    <td class="text-center">--}}
                                {{--                                        Rp. {{number_format($product->harga * 1.45,0,',','.') }}</td>--}}
                                {{--                                    <td>--}}
                                {{--                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{--                                              action="{{ route('daftar-produk.destroy', $product->id) }}"--}}
                                {{--                                              method="POST">--}}
                                {{--                                            <a href="{{route('daftar-produk.show', $product->id)}}"--}}
                                {{--                                               class="btn btn-info btn-sm">Detail</a>--}}
                                {{--                                            <a href="{{route('daftar-produk.edit', $product->id)}}"--}}
                                {{--                                               class="btn btn-warning btn-sm">Edit</a>--}}
                                {{--                                            @csrf--}}
                                {{--                                            @method('DELETE')--}}
                                {{--                                            <button class="btn btn-danger btn-sm" type="submit">--}}
                                {{--                                                Delete--}}
                                {{--                                            </button>--}}
                                {{--                                        </form>--}}
                                {{--                                    </td>--}}
                                {{--                                </tr>--}}
                                {{--                            @endforeach--}}

                                </tfoot>
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
