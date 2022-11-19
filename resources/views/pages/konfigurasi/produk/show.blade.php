@extends('layouts.simple.master')
@section('title', 'Detail Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Detail Produk</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item">Produk</li>
    <li class="breadcrumb-item"><a href="{{route('daftar-produk.index')}}">Daftar Produk</a></li>
    <li class="breadcrumb-item">{{$product->first()->nama}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card" style="height: 95%;">
                    <div class="card-body">
                        <div class="row gy-4">
                            <div class="col-12">
                                <span >Nama</span>
                                <h3 class="mt-2">{{$product->first()->nama}}</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="mb-2">Jenis</div>
                                <div class="badge badge-info">{{$product->first()->type_product}}</div>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <div class="mb-2">Kategori</div>
                                <div>{{$product->first()->category}}</div>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <div class="mb-2">UOM</div>
                                <div>{{$product->first()->uom_product}}</div>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <div class="mb-2">Minimum Stok</div>
                                <div>{{$product->first()->min_stock}}</div>
                            </div>
                        </div>

{{--                        <div class="d-flex justify-content-between mb-4">--}}
{{--                            <div>--}}
{{--                                <span>Nama</span>--}}
{{--                                <h5>{{$product->nama}}</h5>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span>Jenis</span>--}}
{{--                                <h5>{{$product->Type->name}}</h5>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <div>--}}
{{--                                <span>Kategori</span>--}}
{{--                                <h5>{{$product->Category->name}}</h5>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span>Satuan</span>--}}
{{--                                <h5>{{$product->UOM->name}}</h5>--}}
{{--                            </div>--}}
{{--                            --}}{{--                            <div>--}}
{{--                            --}}{{--                                <span>Batas Minimum Stok</span>--}}
{{--                            --}}{{--                                <h5>5 Produk</h5>--}}
{{--                            --}}{{--                            </div>--}}
{{--                            --}}{{--                            <div>--}}
{{--                            --}}{{--                                <span>Diskon</span>--}}
{{--                            --}}{{--                                <h5>5%</h5>--}}
{{--                            --}}{{--                            </div>--}}
{{--                            --}}{{--                            <div>--}}
{{--                            --}}{{--                                <span>Keuntungan yang diambil</span>--}}
{{--                            --}}{{--                                <h5>5%</h5>--}}
{{--                            --}}{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dashed">
                            <thead>
                            <th>Keterangan</th>
                            <th>Nilai</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Keuntangan Yang Diambil</td>
                                <td>{{$product->first()->keuntungan}} %</td>
                            </tr>
                            <tr>
                                <td>Diskon Barang</td>
                                <td>{{$product->first()->diskon}} %</td>
                            </tr>
                            <tr>
                                <td>Harga Beli Terakhir</td>
                                <td class="text-success"> Rp. {{number_format($product->first()->harga,0,',','.') }}</td>
                            </tr>
                            <tr>
                                <td>Harga Penjualan (+ Keuntungan)</td>
                                <td class="text-danger"> Rp. {{number_format($product->first()->harga + ($product->first()->harga * $product->first()->keuntungan / 100),0,',','.') }}</td>
                            </tr>
                            <tr>
                                <td>Total Stok Saat Ini</td>
                                <td>{{$product->first()->stok_barang}} {{$product->first()->uom_product}}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total Asset Terakhir</td>
                                <td class="fw-bold"> Rp. {{number_format($product->first()->stok_barang * $product->first()->harga,0,',','.') }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Masuk</h4>
                        <div class="table-responsive">
                            <table class="cell-border" style="min-width: 100%; font-size: 11px" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Nomor Transaksi</th>
                                    <th>Supplier</th>
                                    @if($product->first()->product_type_id == 1)
                                        <th>Expired Date</th>
                                    @endif
                                    <th>Tanggal Masuk</th>
                                    <th>Jumlah</th>
                                    <th>Harga Beli</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($stock_in as $item)
                                    <tr>
                                        <td><a href="" class="fw-bolder text-primary">PO-0{{$i < 10 ? '0'.$i : $i}}</a></td>
                                        <td>{{$item->purchase_order->supplier->name}}</td>
                                        @if($product->first()->product_type_id == 1)
                                            <td>{{ \Carbon\Carbon::parse($item->expired_date)->format('d M y') }}</td>
                                        @endif
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M y') }}</td>
                                        <td class="fw-bold {{$item->jumlah == 0 ? 'text-danger' : 'text-success'}}">{{$item->jumlah}} {{$item->product->UOM->name}}</td>
                                        <td> Rp. {{number_format($item->harga,0,',','.') }}</td>
                                    </tr>
                                @endforeach
{{--                                @for($i; $i < 100; $i++)--}}
{{--                                    <tr>--}}
{{--                                        <td><a href="" class="fw-bolder text-primary">PO-0{{$i < 10 ? '0'.$i : $i}}</a></td>--}}
{{--                                        <td>Supplier A</td>--}}
{{--                                        <td>20-10-2022</td>--}}
{{--                                        <td>01-10-2022 16:06:05</td>--}}
{{--                                        <td>15 Strip</td>--}}
{{--                                        <td>Rp. 150.000</td>--}}
{{--                                    </tr>--}}
{{--                                @endfor--}}
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Keluar</h4>
                        <div class="table-responsive">
                            <table class="cell-border" style="min-width: 100%; font-size: 11px" id="basic-2">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>Nomor Transaksi</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Jumlah</th>
                                    <th>Harga Jual</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($stock_out as $item)
                                    <tr>
                                        <td><a href="" class="fw-bolder text-danger">{{$item->SalesOrder->no_transaction}}</a></td>
                                        <td>{{$item->SalesOrder->Customer->name}}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M y') }}</td>
                                        <td>15 Item</td>
                                        <td>Rp. 15.000</td>
                                    </tr>
                                @endforeach
                                </tbody>
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
