@extends('layouts.simple.master')
@section('title', 'Daftar User')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Daftar User</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Konfigurasi
</li>
<li class="breadcrumb-item active">Daftar User</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-4">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Create
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
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User Login</th>
                                    <th>Email</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th>Tanggal Diubah Terakhir</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$i+= 1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-xs" type="submit" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="">Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-modal-large title="User">
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="modal-body">
            <div class="row gy-4">
                <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Nama Pegawai</label>
                    <input class="form-control form-control-lg" id="exampleFormControlInput1 " autofocus="true" name="nama" placeholder="Masukan Nama Pegawai">
                </div>
                <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Email</label>
                    <input class="form-control form-control-lg" id="exampleFormControlInput1 " autofocus="true" name="email" placeholder="Masukan Nama Produk">
                </div>
                <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Password</label>
                    <input class="form-control form-control-lg" id="exampleFormControlInput1 " autofocus="true" name="password" type="password" placeholder="Masukan Password Untuk Pegawai">
                </div>
                <div class="col-12">
                    <label class="form-label">Role</label>
                    <select class="form-select digits" name="role">
                        <option value="Admin" selected>Admin</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
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
@endsection