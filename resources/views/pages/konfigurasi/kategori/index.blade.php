@extends('layouts.simple.master')
@section('title', 'Kategori Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">

@endsection

@section('breadcrumb-title')
    <h3>Daftar Kategori Produk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item active">Daftar Kategori Produk</li>
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
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th>Tanggal Diubah Terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <td>{{$category->type->name}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->created_at}}</td>
                                        <td>{{$category->updated_at}}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('kategori-produk.destroy', $category->id) }}"
                                                  method="POST">
                                                <a href="{{route('kategori-produk.edit', $category->id)}}"
                                                   class="btn btn-warning btn-xl me-2">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs" type="submit">
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
    </div>
    <x-modal-large title="Kategori Produk">
        <form method="POST" action="{{route('kategori-produk.store')}}">
            @csrf
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-xl-12">
                        <label class="form-label" for="Kategori">Kategori Produk</label>
                        <select class="form-select digits" id="exampleFormControlSelect9" name="jenis">
                            @foreach($productType as $item)
                                <option
                                    value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-12">
                        <label class="form-label" for="Kategori">Kategori Produk</label>
                        <input class="form-control form-control-lg" id="Kategori"
                               placeholder="Masukan Kategori Produk" name="name">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control form-control-lg" id="deskripsi" name="deskripsi"
                                  rows="3" placeholder="Masukan deskripsi produk"></textarea>
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
