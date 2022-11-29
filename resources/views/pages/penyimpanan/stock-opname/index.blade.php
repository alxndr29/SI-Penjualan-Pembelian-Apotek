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
        <div class="col">
            @if ($message = Session::get('success'))
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> {{$message}}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
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
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($data_stock_opname as $item)
                                <tr>
                                    <td>{{$i += 1}}</td>
                                    <td>OPN-{{$item->no_opname}}</td>
                                    <td>{{$item->bulan}}</td>
                                    <td>{{$item->tanggal_mulai}}</td>
                                    <td>{{$item->tanggal_berakhir}}</td>
                                    <td>{{$item->operator}}</td>
                                    <td><span class="badge badge-{{$item->state == 'Draft' ? 'warning' : 'success'}}">{{$item->state}}</span></td>
                                    <td>
                                        <a href="{{ route('stock-opname.edit',$item->id) }}" class="btn btn-info btn-sm" type="submit">
                                            Lanjutkan Pemeriksaaan
                                        </a>
                                        <a href="" class="btn btn-outline-primary btn-sm me-2">Detail Barang</a>

                                    </td>
                                </tr>

                                @endforeach

                                {{-- @foreach($suppliers as $supplier)--}}
                                {{-- <tr>--}}
                                {{-- <td>{{$i+= 1}}</td>--}}
                                {{-- <td>{{$supplier->name}}</td>--}}
                                {{-- <td>{{$supplier->address}}</td>--}}
                                {{-- <td>{{$supplier->telephone}}</td>--}}
                                {{-- <td>--}}
                                {{-- <span class="badge badge-{{$supplier->status == 0 ? 'danger' : 'success'}}">{{$supplier->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</span>--}}
                                {{-- </td>--}}
                                {{-- <td>--}}
                                {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"--}}
                                {{-- action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">--}}
                                {{-- <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>--}}
                                {{-- @csrf--}}
                                {{-- @method('DELETE')--}}
                                {{-- <button class="btn btn-danger btn-xs" type="submit"--}}
                                {{-- data-original-title="btn btn-danger btn-xs" title=""--}}
                                {{-- data-bs-original-title="">Delete--}}
                                {{-- </button>--}}
                                {{-- </form>--}}

                                {{-- </td>--}}
                                {{-- </tr>--}}
                                {{-- @endforeach--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-detail-order title="Daftar Barang Pemeriksaan" type="opname">

</x-detail-order>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script>

</script>
@endsection