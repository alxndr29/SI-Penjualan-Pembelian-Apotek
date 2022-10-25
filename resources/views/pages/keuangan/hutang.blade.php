@extends('layouts.simple.master')
@section('title', 'Hutang')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Hutang</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Keuangan
    </li>
    <li class="breadcrumb-item active">Hutang</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Transaksi</th>
                                    <th>Supplier</th>
                                    <th>Tanggal dan Waktu Transaksi</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <th>Total Transaksi</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                <tr>
                                    <td>1</td>
                                    <td class="text-primary fw-bolder">PO-00001</td>
                                    <td>PT Jaya Abadi</td>
                                    <td>20-10-2022 13:05:05</td>
                                    <td>20-10-2022 13:05:05</td>
                                    <td>Rp. 15.000</td>
                                    <td><span class="badge badge-success">Lunas (20-10-2022 13:05:05)</span> </td>
                                    <td>
                                        <a class="btn btn-primary btn-xl me-2">Set Status</a>
                                        <a class="btn btn-outline-info btn-xl me-2">Detail Order</a>
                                    </td>
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
                                {{--                                                  action="{{ route('supplier.destroy', $supplier->id) }}" metdod="POST">--}}
                                {{--                                                <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-warning btn-xl me-2">Edit</a>--}}
                                {{--                                                @csrf--}}
                                {{--                                                @metdod('DELETE')--}}
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
