@extends('layouts.simple.master')
@section('title', 'Stok Barang')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Stok Opname</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Penyimpanan
    </li>
    <li class="breadcrumb-item active">Stok Opname</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <a href="{{route('stock-opname.create')}}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Adjusting</th>
                                    <th>Bulan</th>
                                    <th>Mulai Tanggal</th>
                                    <th>S/D Tanggal</th>
                                    <th>Operator</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                <tr>
                                    <td>1</td>
                                    <td>OPN-0001</td>
                                    <td>Januari</td>
                                    <td>22-06-2022</td>
                                    <td>30-06-2022</td>
                                    <td>Pegawai A</td>
                                    <td> <a href=""
                                            class="btn btn-primary btn-sm me-2">Detail Barang</a></td>
                                </tr>
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
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
