@extends('layouts.simple.master')
@section('title', 'Jenis Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Daftar Jenis Produk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item active">Daftar Jenis Produk</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row gy-4">
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

            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                        <strong>Berhasil</strong> {{$message}}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th>Tanggal Diubah Terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>

                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('jenis-produk.destroy', $item->id) }}" method="POST">
                                                <a href="{{route('jenis-produk.edit', $item->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs" type="submit"
                                                        data-original-title="btn btn-danger btn-xs" title=""
                                                        data-bs-original-title="">Delete
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
    {{--Modal--}}
{{--    @include('pages.konfigurasi.jenis.show')--}}
    <x-modal-large title="Jenis Produk">
        <form method="POST" action="{{route('jenis-produk.store')}}">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="mb-3">
                            <label class="form-label" for="Supplier">Jenis Produk</label>
                            <input class="form-control form-control-lg" id="Supplier" placeholder="Masukan Jenis Produk" name="name">
                        </div>
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
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection
