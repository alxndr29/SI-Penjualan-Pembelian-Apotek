@extends('layouts.simple.master')
@section('title', 'Stok Barang')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Stok Barang</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Penyimpanan</li>
    <li class="breadcrumb-item active">Stok Barang</li>
@endsection

@section('content')
   <div class="row"></div>
@endsection

@section('script')
    <script src="{{mix('js/app.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
