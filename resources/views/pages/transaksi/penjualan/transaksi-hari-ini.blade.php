@extends('layouts.simple.master')
@section('title', 'Riwayat Transaksi Hari Ini')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Riwayat Transaksi Hari Ini</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Transaksi</li>
    <li class="breadcrumb-item">Penjualan</li>
    <li class="breadcrumb-item active">Riwayat Transaksi Hari Ini</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Barang Terjual</h6>
                            <h3 class="mb-4">{{$totalBarangTerjual}} Produk</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Pendapatan / Omset</h6>
                            <h3 class="mb-4"> Rp. {{number_format($totalPendapatan,0,',','.') }} <h6 class="text-success">+ PPN {{number_format($totalPendapatan * 10 /100,0,',','.') }}</h6></h3>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Keuntungan</h6>
                            <h3 class="mb-4"> Rp. {{number_format($totalKeuntungan,0,',','.') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Pembeli</h6>
                            <h3 class="mb-4">{{$totalPembeli}} Pembeli</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Transaksi</th>
                                    <th>Produk</th>
                                    <th>HPP</th>
                                    <th>Jumlah Stok Dikeluarkan</th>
                                    <th>Total Keuntungan</th>
                                    <th>Total Potongan Diskon</th>
                                    <th>Grand Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1
                                @endphp
                                @foreach($stock_out as $item)
                                    @php
                                        $totalKeuntungan = $item->harga * $item->jumlah * $item->keuntungan / 100;
                                        $totalDiskon = $item->harga * $item->jumlah * $item->diskon / 100;
                                    @endphp
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td class="fw-bold text-danger">SO-{{$item->SalesOrder->no_transaction}}</td>
                                        <td>{{$item->Product->nama}}</td>
                                        <td>Rp. {{number_format($item->harga,0,',','.') }}</td>
                                        <td>{{$item->jumlah}} Strip</td>
                                        <td class="text-success">Rp. {{number_format($totalKeuntungan,0,',','.') ." (". $item->keuntungan."%)"}}</td>
                                        <td class="text-danger">- Rp. {{number_format($totalDiskon,0,',','.')." (". $item->diskon."%)"}}</td>
                                        <td>Rp. {{number_format($item->harga * $item->jumlah + $totalKeuntungan - $totalDiskon,0,',','.') }}</td>
                                    </tr>
                                @endforeach

                                {{--                      @php--}}
                                {{--                          $i = 1;--}}
                                {{--                      @endphp--}}
                                {{--                      @foreach($stockOut as $item)--}}
                                {{--                          <tr>--}}
                                {{--                              <td>{{$i++}} </td>--}}
                                {{--                              <td class="text-danger fw-bolder">{{$item->SalesOrder->no_transaction}}</td>--}}
                                {{--                              <td>{{$item->Product->nama}}</td>--}}
                                {{--                              <td>{{$item->SalesOrder->Customer->name}}</td>--}}
                                {{--                              <td><span class="fw-bold badge badge-info">{{$item->Product->Type->name}}</span> - {{$item->Product->Category->name}}</td>--}}
                                {{--                              <td>{{$item->jumlah}} {{$item->Product->UOM->name}}</td>--}}
                                {{--                              <td>Rp. {{$item->harga}}</td>--}}
                                {{--                          </tr>--}}
                                {{--                      @endforeach--}}

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
    <script src="{{mix('js/app.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
