@extends('layouts.simple.master')
@section('title', 'Satuan Produk')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Buat Transaksi Baru</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">
    Transaksi
</li>
<li class="breadcrumb-item">Penjualan</li>
<li class="breadcrumb-item active">Buat Transaksi Baru</li>
@endsection

@section('content')
{{-- <view-penjualan></view-penjualan>--}}
<div class="container-fluid">
    <div class="card">
        <div class="card-body py-3">
            <div class="row">
                <div class="col-3">
                    <label class="form-label" for="exampleFormControlInput1">No.Transaksi</label>
                    <input class="form-control disabled" disabled id="exampleFormControlInput1" type="email" placeholder="Otomatis" data-bs-original-title="" title="">
                </div>
                <div class="col-3">
                    <label>Pelanggan</label>
                    <select class="js-example-basic-single col-sm-12 form-control-sm" id="pelanggan">
                        <option value="1">Pelanggan Umum</option>
                        @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <metode-pembayaran transaksi="penjualan"></metode-pembayaran>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="col-form-label">Produk</div>
                        <select class="js-example-basic-single col-sm-12" id="select-product">

                        </select>
                    </div>
                    <div class="mb-3">

                        <label class="col-form-label">Jumlah</label>
                        <div class="input-group">
                            <input class="form-control" type="number" placeholder="0" id="jumlah-pembelian-produk">
                            <span class="input-group-text" id="detail-produk-satuan">UOM</span>
                        </div>
                    </div>
                    <hr class="mt-4 mb-4">
                    <h5 class="py-2">Detail Produk</h5>
                    <div class="my-2">
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <p class="fw-light">Jenis</p>
                            </div>
                            <div>
                                <p class="fw-bolder" id="detail-produk-jenis">-</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <p class="fw-light">Kategori</p>
                            </div>
                            <div>
                                <p class="fw-bolder" id="detail-produk-kategori">-</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <p class="fw-light">Harga Jual</p>
                            </div>
                            <div>
                                <p class="fw-bolder" id="detail-produk-harga">-</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row gy-2">
                <div class="col-12">
                    <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100" data-bs-toggle="modal" data-bs-target=".modal-penyimpanan-barang">Lihat Penyimpanan
                    </button>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100" data-bs-toggle="modal" data-bs-target=".modal-tambah-data-pelanggan">Tambah Pelanggan</button>
                </div>
                <!-- <div class="col-6">
                        <button type="button" class="btn btn-outline-danger txt-dark btn-md me-3 w-100">Draft</button>
                    </div> -->
                <div class="col-12">
                    <button class="btn btn-outline-warning txt-dark btn-md me-3 w-100" id="button-cancel">Cancel
                    </button>
                </div>
                <div class="col-12">
                    <button class="btn btn-success btn-lg me-3 w-100" id="button-simpan-transaksi">Simpan
                        Transaksi
                    </button>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body py-3">
                    <div class="table-responsive">

                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Diskon (%)</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tabel-daftar-produk">
                                @php
                                $i = 0;
                                @endphp

                                <!-- <tr>
                                    <td></td>
                                    <td>Panadol</td>
                                    <td>Rp. 131.000</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>Rp. 655.000</td>
                                    <td>
                                        <button class="btn btn-outline-secondary txt-secondary btn-sm" type="button" data-bs-original-title="">Remove
                                        </button>
                                    </td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-body p-4">
                    <div class="d-flex flex-column ">
                        <h6>Rincian Harga</h6>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <p class="fw-light">Total Harga Barang</p>
                            </div>
                            <div>
                                <p class="fw-bolder" id="total-harga-barang">Rp. 0</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <p class="fw-light">Total Potongan Diskon</p>
                            </div>
                            <div>
                                <p class="fw-bolder txt-danger" id="total-potongan-diskon">- 0</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <p class="fw-light">PPN (10%)</p>
                            </div>
                            <div>
                                <p class="fw-bolder" id="ppn">0</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <h5 class="fw-bold text-success">Grand Total</h5>
                            </div>
                            <div>
                                <H5 class="fw-bold text-success" id="grand-total">Rp. 0</H5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-modal-large title="Tambah Data Pelanggan">
    <form method="POST" action="{{route('pelanggan.store')}}">
        @csrf
        <div class="modal-body">
            <div class="row gy-4">
                <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                    <input class="form-control form-control-lg" id="exampleFormControlInput1 " autofocus="true" name="name" placeholder="Masukan Nama Pelanggan">
                </div>
                <div class="col-12">
                    <label class="form-label" for="telfon">No.Telfon</label>
                    <input class="form-control form-control-lg" id="telfon" autofocus="true" name="telfon" placeholder="Masukan Nomor Telfon">
                </div>
                <div class="col-12">
                    <label class="form-label" for="alamat">Alamat Pelanggan</label>
                    <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat Pelanggan"></textarea>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</x-modal-large>
<x-modal-large title="Penyimpanan Barang">
    <div class="table-responsive">
        <table class="display" id="basic-2">
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
                    <td style="text-align:right;">{{number_format($items->harga,0,',','.') }}</td>
                    <td class="fw-bold text-success">Rp.{{number_format($items->harga * $items->stok_keluar,0,',','.') }}</td>
                    <td>{{$items->stok_awal + $items->stok_masuk - $items->stok_keluar }}</td>
                    <td class="fw-bold" style="text-align:right;">{{number_format(($items->stok_awal + $items->stok_masuk - $items->stok_keluar) * $items->harga,0,',','.') }}</td>
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
</x-modal-large>
<x-modal-large title="Pelanggan">
    <form method="POST" action="{{route('pelanggan.store')}}">
        @csrf
        <div class="modal-body">
            <div class="row gy-4">
                <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                    <input class="form-control form-control-lg" id="exampleFormControlInput1 " autofocus="true" name="name" placeholder="Masukan Nama Pelanggan">
                </div>
                <div class="col-12">
                    <label class="form-label" for="telfon">No.Telfon</label>
                    <input class="form-control form-control-lg" id="telfon" autofocus="true" name="telfon" placeholder="Masukan Nomor Telfon">
                </div>
                <div class="col-12">
                    <label class="form-label" for="alamat">Alamat Pelanggan</label>
                    <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat Pelanggan"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</x-modal-large>
@endsection

@section('script')
@vite('resources/js/app-vue.js')

<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>

<script type="text/javascript">
    var data_produk = [];
    var daftar_produk_jual = [];
    $(document).ready(function() {
        get_data();
        $("#button-cancel").on('click', function() {
            location.reload();
        });
        $("#select-product").change(function() {
            show_detail_produk(this.value);
        });
        $("#jumlah-pembelian-produk").keyup(function(e) {
            var jmlh = this.value;
            if (e.keyCode == 13) {
                $.each(daftar_produk_jual, function(i, v) {
                    if (v.id == $("#select-product").val()) {
                        double = true;
                        index_double = i;
                    }
                });
                if (double) {
                    daftar_produk_jual[index_double].qty = (parseInt(jmlh) + parseInt(daftar_produk_jual[index_double].qty));
                    double = false;
                    index_double = 0;
                } else {
                    $.each(data_produk, function(i, v) {
                        if (v.id == $("#select-product").val()) {
                            if (jmlh > parseInt(v.jumlah_stok)) {
                                alert('Stok tidak mencukupi. Sisa stok: ' + v.jumlah_stok);
                            } else {
                                daftar_produk_jual[counter] = {};
                                daftar_produk_jual[counter].categories_name = v.categories_name;
                                daftar_produk_jual[counter].created_at = v.created_at;
                                daftar_produk_jual[counter].diskon = v.diskon;
                                daftar_produk_jual[counter].harga = v.harga;
                                daftar_produk_jual[counter].id = v.id;
                                daftar_produk_jual[counter].jumlah_stok = v.jumlah_stok;
                                daftar_produk_jual[counter].nama = v.nama;
                                daftar_produk_jual[counter].keuntungan = v.keuntungan;
                                daftar_produk_jual[counter].product_category_id = v.product_category_id;
                                daftar_produk_jual[counter].product_type_id = v.product_type_id;
                                daftar_produk_jual[counter].product_uom_id = v.product_uom_id;
                                daftar_produk_jual[counter].types_name = v.types_name;
                                // daftar_produk_jual[counter].uom_name = v.uom_name;
                                daftar_produk_jual[counter].updated_at = v.updated_at;
                                daftar_produk_jual[counter].qty = jmlh;
                                counter++;
                                return false;
                            }
                        }
                    });
                }
                console.log(daftar_produk_jual);
                show_data();
                $("#jumlah-pembelian-produk").val(0);
            }
        });
        $("#button-simpan-transaksi").on('click', function() {
            // alert($("#nomor_bpjs").val() + "/" +$("#metode_penjualan").val());
            $.ajax({
                type: "post", //THIS NEEDS TO BE GET
                url: "{{route('transaksi-penjualan.store')}}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'data_produk': daftar_produk_jual,
                    'pelanggan': $("#pelanggan").val(),
                    'metode-pembayaran': $("#metode_penjualan").val(),
                    'nomor-bpjs': $("#nomor_bpjs").val(),
                    'total': grand_total + ppn - total_disc
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == "ok") {
                        location.reload();
                        // alert('mantap');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    });

    function get_data() {
        $("#select-product").append('<option value="" selected>' + 'Pilih Produk' + '</option>');
        $.ajax({
            type: "GET", //THIS NEEDS TO BE GET
            url: "{{route('ambil-data-ajax-produk')}}",
            success: function(data) {
                data_produk = data.produk;
                console.log(data_produk);
                $.each(data.produk, function(i, v) {
                    $("#select-product").append('<option value="' + v.id + '">' + v.nama + '</option>');
                });
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function show_detail_produk(id) {
        $.each(data_produk, function(i, v) {
            if (v.id == id) {
                $("#detail-produk-jenis").html(v.types_name);
                $("#detail-produk-kategori").html(v.categories_name);
                $("#detail-produk-satuan").html(v.uom_name);
                $("#detail-produk-harga").html('Rp.' + addCommas(v.harga));
            }
        });
    }

    var total_harga_barang = 0;
    var grand_total = 0;
    var ppn = 0;
    var total_disc = 0;

    function show_data() {
        $("#tabel-daftar-produk").empty();
        total_harga_barang = 0;
        grand_total = 0;
        ppn = 0;
        // daftar_produk_jual.flat(Infinity);
        daftar_produk_jual = daftar_produk_jual.filter(Boolean);
        $.each(daftar_produk_jual, function(i, v) {
            $("#tabel-daftar-produk").append(
                '<tr>' +
                '<td>' + (i += 1) + '</td>' +
                '<td>' + v.nama + '</td>' +
                '<td style="text-align:right;">' + addCommas(v.harga + (v.harga * v.keuntungan / 100)) + '</td>' +
                '<td>' + v.qty + '</td>' +
                '<td>' + v.diskon + '</td>' +
                '<td style="text-align:right;">' + addCommas((v.harga * v.qty) + (v.harga * v.qty * v.keuntungan / 100) - ((v.harga * v.qty * v.keuntungan / 100) * v.qty * v.diskon / 100)) + '</td>' +
                '<td>' +
                '<button id="hapus-produk-jual" data-id="' + v.id + '"class="btn btn-outline-secondary txt-secondary btn-sm" type="button" data-bs-original-title="">' +
                'Remove' +
                '</button>' +
                '</td>' +
                '</tr>'
            );
            total_harga_barang += v.harga * v.qty + (v.harga * v.qty * v.keuntungan / 100);
            grand_total += v.harga * v.qty + (v.harga * v.qty * v.keuntungan / 100);
            total_disc += ((v.harga * v.qty * v.keuntungan / 100) * v.qty * v.diskon / 100);
            ppn = (total_harga_barang - total_disc) * 0.10;
        });
        $("#ppn").html('Rp. ' + addCommas(ppn));
        $("#total-harga-barang").html('Rp. ' + addCommas(total_harga_barang));
        $("#total-potongan-diskon").html('Rp. ' + addCommas(total_disc));
        $("#grand-total").html('Rp. ' + addCommas(grand_total + ppn - total_disc));

        // total_harga_barang = 0;
        // grand_total = 0;
        // ppn = 0;
        // total_disc = 0;
    }

    $("body").on("click", "#hapus-produk-jual", function(e) {
        var id = $(this).attr('data-id');
        $.each(daftar_produk_jual, function(i, v) {
            if (id == v.id) {
                daftar_produk_jual.splice(i, 1);
                console.table(daftar_produk_jual);
                show_data();
                return false;
            }
        });
        show_data();
    });

    var counter = 0;
    var double = false;
    var index_double = 0;


    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>
@endsection