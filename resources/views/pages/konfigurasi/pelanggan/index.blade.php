@extends('layouts.simple.master')
@section('title', 'Daftar Pelanggan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">

@endsection

@section('breadcrumb-title')
    <h3>Daftar Pelanggan</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item active">Pelanggan</li>
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
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No.Telp</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <<td>{{$customer->name}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->telephone}}</td>
                                        <td>
                                            <span class="badge badge-{{$customer->status == 0 ? 'danger' : 'success'}}">{{$customer->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</span>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('pelanggan.destroy', $customer->id) }}"
                                                  method="POST">
                                                <a href="{{route('pelanggan.edit',$customer->id)}}"
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
    <x-modal-large title="Pelanggan">
        <form method="POST" action="{{route('pelanggan.store')}}">
            @csrf
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                               autofocus="true" name="name"
                               placeholder="Masukan Nama Pelanggan" >
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="telfon">No.Telfon</label>
                        <input class="form-control form-control-lg" id="telfon"
                               autofocus="true" name="telfon"
                               placeholder="Masukan Nomor Telfon" >
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="alamat">Alamat Pelanggan</label>
                        <textarea class="form-control form-control-lg" id="alamat" name="alamat"
                                  rows="3" placeholder="Masukan Alamat Pelanggan"></textarea>
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
