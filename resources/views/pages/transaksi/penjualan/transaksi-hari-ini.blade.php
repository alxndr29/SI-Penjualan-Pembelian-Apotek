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
                            <h3 class="mb-4">614 Produk</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Pendapatan</h6>
                            <h3 class="mb-4">Rp. 156.000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Keuntungan</h6>
                            <h3 class="mb-4">Rp. 13.000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4">Total Pembeli</h6>
                            <h3 class="mb-4">614 Pesanan</h3>
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
                                    <th>Pelanggan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Jumlah Stok Dikeluarkan</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="fw-bold text-danger">SO-0001</td>
                                    <td>Paramex A</td>
                                    <td>Pelanggan Umum</td>
                                    <td><span class="fw-bold badge badge-info">Obat-Obatan</span> - Vitamin C</td>
                                    <td>15 Strip</td>
                                    <td>Rp. 150.000</td>
                                </tr>
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
