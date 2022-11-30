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
                                        @if ($item->state == "Draft")
                                        <a href="{{ route('stock-opname.edit',$item->id) }}" class="btn btn-info btn-sm" type="submit">
                                            Lanjutkan Pemeriksaaan
                                        </a>
                                        @endif
                                        <button class="btn btn-outline-primary btn-sm me-2" onClick="modalOpname({{$item->id}})">Detail Barang</button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Stok Opname ID</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Nama</th>
                            <th scope="col">Stock Computer</th>
                            <th scope="col">Stock Aktual</th>
                            <th scope="col">Stock Selisih</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script type="text/javascript">
    // A $( document ).ready() block.
    $(document).ready(function() {
       
    });

    function modalOpname(id) {
        $.ajax({
            url: "{{url('penyimpanan/stock-opname')}}/" + id,
            type: 'GET',
            success: function(response) {
                console.log(response);
                $("#isi-tabel").empty();
                $.each(response, function(index,value){
                    $("#isi-tabel").append(
                        '<tr>' +
                            '<th scope="row">'+(index+1)+'</th>' +
                            '<td>'+value.stock_opname_id+'</td>' +
                            '<td>'+value.product_id+'</td>' +
                            '<td>'+value.nama+'</td>'+
                            '<td>'+value.stock_computer+'</td>' +
                            '<td>'+value.stock_aktual+'</td>' +
                            '<td>'+value.stock_selisih+'</td>' +
                        '</tr>'
                    );
                });
                $("#exampleModal").modal('show');
            },
            error: function(response) {
                console.log(response);
            }
        });
        
    }
</script>
@endsection