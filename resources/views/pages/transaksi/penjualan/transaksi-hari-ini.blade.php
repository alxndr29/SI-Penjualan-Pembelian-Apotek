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
