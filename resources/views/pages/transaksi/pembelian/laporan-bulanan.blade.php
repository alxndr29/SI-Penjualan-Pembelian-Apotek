@extends('layouts.simple.master')
@section('title', 'Laporan Bulanan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Laporan Bulanan</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Transaksi
</li>
<li class="breadcrumb-item">Pembelian</li>
<li class="breadcrumb-item active">Laporan Bulanan</li>
@endsection

@section('content')
{{-- <view-penjualan></view-penjualan>--}}
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-4">
                                <label class="form-label" for="exampleFormControlSelect9">Tanggal Jatuh Tempo</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="date" v-model="date" id="tglawal">
                                </div>
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="exampleFormControlSelect9">Tanggal Jatuh Tempo</label>
                                <div class="input-group">
                                    <input class="datepicker-here form-control digits" type="date" v-model="date" id="tglakhir">
                                </div>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-lg btn-primary mt-4" id="btn-filter">Filter</button>
                            </div>
                        </div>
                        <br>
                        @if($tglawal != null && $tglakhir != null)
                        <div class="row">
                            <div class="col">
                                Menampilkan Data dari {{$tglawal}} sampai {{$tglakhir}}
                            </div>
                        </div>
                        @endisset

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Supplier</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Pembelian</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Pegawai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 0;
                                    @endphp
                                    @foreach($purchaseOrder as $item)
                                    <tr>
                                        <td>{{$i += 1}}</td>
                                        <td class="text-primary fw-bold">PO-{{$item->no_transaction}}</td>
                                        <td>{{$item->supplier->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->transaction_date)->format('d M y h:m:s')}}</td>
                                        <td>Rp. {{number_format($item->total,0,',','.') }}</td>
                                        <td><span class="badge badge-primary">{{$item->payment_method}}</span></td>
                                        <td>{{$item->employee->name}}</td>
                                        <td><button class="btn btn-primary" type="button" data-bs-toggle="modal" onclick="showPurchaseOrder({{$item->id}})" data-bs-target=".bd-example-modal-lg">Detail Order
                                            </button></td>
                                    </tr>
                                    @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
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
@vite('resources/js/app-vue.js')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>

<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script type="text/javascript">
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
    $(document).ready(function() {
        $("#btn-filter").on('click', function() {
            location.href = "{{url('transaksi/pembelian/laporan-transaksi')}}/" + $("#tglawal").val() + "/" + $("#tglakhir").val();
        });
    });
</script>
@endsection