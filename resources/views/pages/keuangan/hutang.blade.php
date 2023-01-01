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
                        <table class="display" id="basic-1" style="min-width: 100%; font-size: 12px">
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
                                    <td style="text-align:right;">{{number_format($hutang->total,0,',','.') }}</td>
                                    <td><span class="badge {{$hutang->state == 'Lunas' ? 'badge-success' : 'badge-danger'}}">{{$hutang->state}} {{ $hutang->state == 'Lunas' ? "(" . date('d-M-Y',strtotime($hutang->tanggal_pelunasan)) . ")" : "" }}
                                        </span> </td>
                                    <td>
                                        <a class="btn btn-primary btn-xl me-2" {{$hutang->state == 'Lunas' ? 'hidden' : ''}} data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" onclick="showHutang({{$hutang->id}})">Set Status</a>
                                        <a class="btn btn-outline-info btn-xl me-2" data-bs-toggle="modal" onclick="showPurchaseOrder({{$hutang->id}})" data-bs-target=".order">Detail Order</a>
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
    <div id="modalHutang">

    </div>
</x-modal-large>
<x-detail-order title="Detail Purchase Order" type="purchase">
    <div id="purchase">


    </div>
    <div class="table-responsive mt-4">
        <table class="display" id="basic-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Expired Date</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="detail_po">

            </tbody>
        </table>
    </div>
</x-detail-order>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script>
    function showHutang(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("showModalHutang")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id,
            },
            success: function(v) {
                $('#modalHutang').html(v.data)
            }
        });
    }

    function showPurchaseOrder(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("showModalPurchaseOrder")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id,
            },
            success: function(v) {
                $('#purchase').html(v.purchase_order)
                $('#detail_po').html(v.detail_purchase)
            }
        });
    }
</script>
@endsection