@extends('layouts.simple.master')
@section('title', 'Daftar Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Halaman Daftar Produk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item active">Daftar Produk</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> {{$message}}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Batas Min Stok</th>
                                    <th>Keuntungan Barang</th>
                                    <th>Diskon Penjualan</th>
                                    <th>Harga Pokok</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <td style="font-size: 11px">{{$product->nama}}</td>
                                        <td>{{$product->uom}}</td>
                                        <td>{{$product->type}}</td>
                                        <td>{{$product->category}}</td>
                                        <td class="text-center">{{ $product->min_stock != 0 ? $product->min_stock : '0'}}</td>
                                        <td class="text-center">{{$product->keuntungan}} %</td>
                                        <td class="text-center">{{$product->diskon}} %</td>
                                        <td class="text-center">
                                            Rp. {{number_format($product->harga * 1.45,0,',','.') }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('daftar-produk.destroy', $product->id) }}"
                                                  method="POST">
                                                <a href="{{route('daftar-produk.show', $product->id)}}"
                                                   class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{route('daftar-produk.edit', $product->id)}}"
                                                   class="btn btn-warning btn-sm">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal-large title="Produk">
        <form method="POST" action="{{route('daftar-produk.store')}}">
            @csrf
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                               autofocus="true" name="name"
                               placeholder="Masukan Nama Produk">
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label" for="product_uom">Satuan Produk</label>
                        <select class="form-select digits" id="product_uom" name="product_uom">
                            @foreach($product_uoms as $uom)
                                <option
                                    value="{{$uom->id}}">{{$uom->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <label class="form-label" for="product_categories">Kategori Produk</label>
                        <select class="form-select digits" id="product_categories" name="product_categories">
                            @foreach($product_categories as $category)
                                <option
                                    value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="Diskon">Batas Minum Stok Barang</label>
                        <div class="input-group">
                            <input class="form-control" type="number" name="min_stock"
                                   placeholder="Masukan Batas Minimum Untuk Produk Ini"
                                   aria-label="Recipient's username"><span class="input-group-text">Item</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="Diskon">Keuntungan</label>
                        <div class="input-group">
                            <input class="form-control" type="number" name="keuntungan"
                                   placeholder="Masukan Besaran Keuntungan Untuk Produk Ini"
                                   aria-label="Recipient's username"><span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="Diskon">Diskon</label>
                        <div class="input-group">
                            <input class="form-control" type="number" name="diskon"
                                   placeholder="Masukan Diskon Untuk Produk Ini" aria-label="Recipient's username"><span
                                class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </x-modal-large>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
