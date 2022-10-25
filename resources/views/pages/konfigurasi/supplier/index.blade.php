@extends('layouts.simple.master')
@section('title', 'Daftar Supplier')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Halaman Daftar Supplier</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item active">Daftar Supplier</li>
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
                    <div class="card-header">
                        <h5>Daftar Supplier</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Supplier</th>
                                    <th>Alamat</th>
                                    <th>No.Telfon</th>
                                    <th>Nomor Pembayaran / Rekening Bank</th>
                                    <th>Deskripsi</th>
                                    <th>State</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>{{$i+= 1}}</td>
                                        <td>{{$supplier->name}}</td>
                                        <td>{{$supplier->address}}</td>
                                        <td>{{$supplier->telephone}}</td>
                                        <td>{{$supplier->bank_address}}</td>
                                        <td>{{$supplier->description}}</td>
                                        <td>
                                            <span class="badge badge-{{$supplier->status == 0 ? 'danger' : 'success'}}">{{$supplier->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</span>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                                <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>
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
    <x-modal-large title="Supplier">
        <form method="POST" action="{{route('supplier.store')}}">
            @csrf
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                               autofocus="true" name="name"
                               placeholder="Masukan Nama Supplier" >
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="Alamat">Alamat</label>
                        <input class="form-control form-control-lg" id="Alamat "
                               autofocus="true" name="alamat"
                               placeholder="Masukan Alamat Supplier">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="telfon">No.Telfon</label>
                        <input class="form-control form-control-lg" id="telfon"
                               autofocus="true" name="telfon"
                               placeholder="Masukan Nomor Telfon Supplier" >
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="rekening">Nomor Pembayaran / Nomor Rekening</label>
                        <input class="form-control form-control-lg" id="rekening "
                               autofocus="true" name="rekening"
                               placeholder="Masukan Nomor Pembayaran / Rekening" >
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="Deskripsi">Deskripsi</label>
                        <textarea class="form-control form-control-lg" id="Deskripsi" name="description"
                                  rows="3"></textarea>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form
    </x-modal-large>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
