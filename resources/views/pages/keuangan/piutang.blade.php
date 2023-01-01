@extends('layouts.simple.master')
@section('title', 'Piutang')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Piutang</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Keuangan
</li>
<li class="breadcrumb-item active">Piutang</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1" style="min-width: 100%; font-size: 12px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Transaksi</th>
                                    <th>Pelanggan</th>
                                    <th>NO.BPJS</th>
                                    <th>Tanggal dan Waktu Transaksi</th>
                                    <th>Total Transaksi</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($data_piutang as $items)
                                <tr>
                                    <td>1</td>
                                    <td class="text-danger fw-bolder">{{$items->no_transaction}}</td>
                                    <td>{{$items->Customer->name}}</td>
                                    <td>{{$items->no_bpjs}}</td>
                                    <td>{{ \Carbon\Carbon::parse($items->transaction_date)->format('d M y h:m:s') }}</td>
                                    <td style="text-align:right;">{{number_format($items->total,0,',','.') }}</td>
                                    <td><span class="badge {{$items->state == 'Lunas' ? 'badge-success' : 'badge-danger'}}">{{$items->state}} {{ $items->state == 'Lunas' ? "(" . date('d-M-Y',strtotime($items->tanggal_pelunasan))  . ")" : "" }}</span> </td>
                                    <td>
                                        <a class="btn btn-primary btn-xl me-2" {{$items->state == 'Lunas' ? 'hidden' : ''}} data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" onclick="showPiutang({{$items->id}})">Set Status</a>

                                        <a class="btn btn-outline-info btn-xl me-2" data-bs-toggle="modal" onclick="showSalesOrder({{$items->id}})" data-bs-target=".order">Detail Order</a>
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
<x-modal-large title="Ubah Status">
    <div id="modalPiutang">

    </div>
</x-modal-large>
<x-detail-order title="Detail Sales Order" type="sales">
    <div id="sales">


    </div>
    <div class="table-responsive mt-4">
        <table class="display" id="basic-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody id="detail_so">

            </tbody>
        </table>
    </div>
</x-detail-order>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script>
    function showPiutang(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("showModalPiutang")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id,
            },
            success: function(v) {
                $('#modalPiutang').html(v.data)
            }
        });
    }

    function showSalesOrder(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("showModalSalesOrder")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id,
            },
            success: function(v) {
                $('#sales').html(v.sales_order)
                $('#detail_so').html(v.detail_sales)
            }
        });
    }
</script>
@endsection