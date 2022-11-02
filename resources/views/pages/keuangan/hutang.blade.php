@extends('layouts.simple.master')
@section('title', 'Hutang')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Daftar Hutang</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Keuangan
    </li>
    <li class="breadcrumb-item active">Daftar Hutang</li>
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
                                @foreach($data_hutang as $hutang)
                                    <tr>
                                        <td>{{$i+=1}}</td>
                                        <td class="text-primary fw-bolder">PO-000{{$hutang->no_transaction}}</td>
                                        <td>{{$hutang->supplier->name}}</td>
                                        <td>{{$hutang->created_at}}</td>
                                        <td>{{ \Carbon\Carbon::parse($hutang->tanggal_jatuh_tempo)->format('d M y') }}</td>
                                        <td> Rp. {{number_format($hutang->total,0,',','.') }}</td>
                                        <td><span class="badge {{$hutang->state == 'Lunas' ? 'badge-success' : 'badge-danger'}}">{{$hutang->state}} ({{date('d-M-Y',strtotime($hutang->tanggal_pelunasan))}})</span> </td>
                                        <td>
                                            <a class="btn btn-primary btn-xl me-2" {{$hutang->state == 'lunas' ? 'hidden' : ''}} data-bs-toggle="modal"
                                               data-bs-target=".bd-example-modal-lg">Set Status</a>
                                            <a class="btn btn-outline-info btn-xl me-2">Detail Order</a>
                                        </td>
                                    </tr>
                                @endforeach


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
    <x-modal-large title="Ubah Status"></x-modal-large>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
