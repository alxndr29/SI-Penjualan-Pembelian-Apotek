
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Buat Transaksi Baru</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">
        Transaksi
    </li>
    <li class="breadcrumb-item">Penjualan</li>
    <li class="breadcrumb-item active">Buat Transaksi Baru</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-body py-3">
                <div class="row">
                    <div class="col-3">
                        <label class="form-label" for="exampleFormControlInput1">No.Transaksi</label>
                        <input class="form-control disabled" disabled id="exampleFormControlInput1" type="email"
                               placeholder="Otomatis" data-bs-original-title="" title="">
                    </div>
                    <div class="col-3">
                        <label>Pelanggan</label>
                        <select class="js-example-basic-single col-sm-12 form-control-sm">
                            <option value="">Pelanggan Umum</option>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
=======
                                <input class="form-control" type="text" placeholder="0"
                                       id="jumlah-pembelian-produk"><span class="input-group-text"
                                                                          id="detail-produk-satuan">UOM</span>
                                <input class="form-control" type="number" placeholder="0" id="jumlah-pembelian-produk">
                                <span class="input-group-text" id="detail-produk-satuan">UOM</span>
>>>>>>> 7875a5a46a8e6e025930a58366a1b829c0369c3c
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
                        <button type="button" class="btn btn-light txt-dark btn-md me-3 w-100">Lihat Penyimpanan
                        </button>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(route('pelanggan.index')); ?>" target="_blank"
                           class=" btn btn-light txt-dark btn-md me-3 w-100">Tambah Pelanggan</a>
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
                                <?php
                                    $i = 0;
                                ?>

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
                                    <p class="fw-bolder txt-danger">- 0</p>
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
    <?php if (isset($component)) { $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ModalLarge::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\ModalLarge::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Data Pelanggan']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b)): ?>
<?php $component = $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b; ?>
<?php unset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ModalLarge::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\ModalLarge::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Stok Barang']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b)): ?>
<?php $component = $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b; ?>
<?php unset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app-vue.js'); ?>

    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

    <script type="text/javascript">
        var data_produk = [];
        var daftar_produk_jual = [];
        $(document).ready(function () {
            get_data();
            $("#button-cancel").on('click', function () {
                location.reload();
            });
            $("#select-product").change(function () {
                show_detail_produk(this.value);
            });
            $("#jumlah-pembelian-produk").keyup(function (e) {
                var jmlh = this.value;
                if (e.keyCode == 13) {
                    $.each(daftar_produk_jual, function (i, v) {
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
                        $.each(data_produk, function (i, v) {
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
                                    daftar_produk_jual[counter].product_category_id = v.product_category_id;
                                    daftar_produk_jual[counter].product_type_id = v.product_type_id;
                                    daftar_produk_jual[counter].product_uom_id = v.product_uom_id;
                                    daftar_produk_jual[counter].types_name = v.types_name;
                                    daftar_produk_jual[counter].uom_name = v.uom_name;
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
            $("#button-simpan-transaksi").on('click', function () {
                $.ajax({
                    type: "post", //THIS NEEDS TO BE GET
                    url: "<?php echo e(route('transaksi-penjualan.store')); ?>",
                    data: {
                        '_token': "<?php echo e(csrf_token()); ?>",
                        'data_produk': daftar_produk_jual
                    },
                    success: function (data) {
                        if (data.status == "ok") {
                            alert('mantap');
                        }
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });
        });


        function get_data() {
            $("#select-product").append('<option value="" selected>' + 'Pilih Produk' + '</option>');
            $.ajax({
                type: "GET", //THIS NEEDS TO BE GET
                url: "<?php echo e(route('ambil-data-ajax-produk')); ?>",
                success: function (data) {
                    data_produk = data.produk;
                    console.log(data_produk);
                    $.each(data.produk, function (i, v) {
                        $("#select-product").append('<option value="' + v.id + '">' + v.nama + '</option>');
                    });
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }

        function show_detail_produk(id) {
            $.each(data_produk, function (i, v) {
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
            $.each(daftar_produk_jual, function (i, v) {
                $("#tabel-daftar-produk").append(
                    '<tr>' +
                    '<td>' + (i++) + '</td>' +
                    '<td>' + v.nama + '</td>' +
                    '<td>Rp.' + addCommas(v.harga) + '</td>' +
                    '<td>' + v.qty + '</td>' +
                    '<td>' + v.diskon + '</td>' +
                    '<td>Rp. ' + addCommas((v.harga * v.qty)) + '</td>' +
                    '<td>' +
                    '<button id="hapus-produk-jual" data-id="' + v.id + '"class="btn btn-outline-secondary txt-secondary btn-sm" type="button" data-bs-original-title="">' +
                    'Remove' +
                    '</button>' +
                    '</td>' +
                    '</tr>'
                );
                total_harga_barang += v.harga * v.qty;
                grand_total += v.harga * v.qty;
                ppn = total_harga_barang * 0.11;
            });
            $("#ppn").html('Rp. ' + addCommas(ppn));
            $("#total-harga-barang").html('Rp. ' + addCommas(total_harga_barang));
            $("#grand-total").html('Rp. ' + addCommas(grand_total + ppn));
        }

        $("body").on("click", "#hapus-produk-jual", function (e) {
            var id = $(this).attr('data-id');
            $.each(daftar_produk_jual, function (i, v) {
                if (id == v.id) {
                    daftar_produk_jual.splice(i, 1);
                    show_data();
                    return false;
                }
            });
            show_data();
        });

        var counter = 0;
        var double = false;
        var index_double = 0;

                console.log(daftar_produk_jual);
                show_data();
                $("#jumlah-pembelian-produk").val(0);
            }
        });
        $("#button-simpan-transaksi").on('click', function() {
            $.ajax({
                type: "post", //THIS NEEDS TO BE GET
                url: "<?php echo e(route('transaksi-penjualan.store')); ?>",
                data: {
                    '_token': "<?php echo e(csrf_token()); ?>",
                    'data_produk': daftar_produk_jual
                },
                success: function(data) {
                    console.log(data);
                    if(data.status == "ok"){
                        alert('mantap');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/pages/transaksi/penjualan/buat-transaksi-baru.blade.php ENDPATH**/ ?>