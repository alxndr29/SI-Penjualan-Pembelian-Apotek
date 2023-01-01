@extends('layouts.simple.master')
@section('title', 'Stok Barang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Stok Barang</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Stok Barang</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <label class="form-label" for="months">Bulan</label>
                            <select class="form-select digits" id="months">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-lg btn-primary w-100 mt-4" id='btn-cari'>Cari Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Stok Awal</th>
                                    <th>Stok Masuk</th>
                                    <th>Total Persediaan</th>
                                    <th>Stok Keluar</th>
                                    <th>Harga</th>
                                    <th>Total Penjualan</th>
                                    <th>Stok Akhir</th>
                                    <th>Asset (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($stockProduct as $items)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><a href="" class="fw-bold text-primary">{{$items->nama}}</a></td>
                                    <td>{{$items->stok_awal ?? '0'}}</td>
                                    <td>{{$items->stok_masuk ?? '0'}}</td>
                                    <td>{{$items->stok_masuk + $items->stok_awal}}</td>
                                    <td class="text-danger fw-bold">{{$items->stok_keluar ?? '0'}}</td>
                                    <td style="text-align:right">{{number_format($items->harga,0,',','.') }}</td>
                                    <td class="fw-bold text-success" style="text-align:right">{{number_format($items->harga * $items->stok_keluar,0,',','.') }}</td>
                                    <td>{{$items->stok_awal + $items->stok_masuk - $items->stok_keluar }}</td>
                                    <td class="fw-bold" style="text-align:right">{{number_format(($items->stok_awal + $items->stok_masuk - $items->stok_keluar) * $items->harga,0,',','.') }}</td>
                                </tr>
                                @endforeach
                                {{-- @for($i = 1; $i<100; $i++)--}}
                                {{-- <tr>--}}
                                {{-- <td>{{$i}}</td>--}}
                                {{-- <td><a href="" class="fw-bold text-primary">Paramex {{$i}}</a></td>--}}
                                {{-- <td>{{rand(50,512)}}</td>--}}
                                {{-- <td>{{rand(50,512)}}</td>--}}
                                {{-- <td>{{rand(50,512)}}</td>--}}
                                {{-- <td class="text-danger fw-bold">{{rand(10,20)}}</td>--}}
                                {{-- <td>Rp. {{number_format(rand(20000,50000),0,',','.') }}</td>--}}
                                {{-- <td class="fw-bold text-success">Rp.{{number_format($i * rand(20000,50000),0,',','.') }}</td>--}}
                                {{-- <td>{{rand(50,512)}}</td>--}}
                                {{-- <td class="fw-bold">Rp. {{number_format($i * rand(20000,50000),0,',','.') }}</td>--}}
                                {{-- </tr>--}}
                                {{-- @endfor--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-modal-large title="Detail Barang">

</x-modal-large>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script type="text/javascript">
    var d = new Date(),
        n = d.getMonth(),
        y = d.getFullYear();
    console.log(n)
    $('#months option:eq(' + n + ')').prop('selected', true);
    $('#years option[value="' + y + '"]').prop('selected', true);

    $(document).ready(function() {
        $("#btn-cari").on('click', function() {
            location.href = "{{url('penyimpanan/stok-barang')}}/" + $("#months").val();
        });
    });
</script>
@endsection