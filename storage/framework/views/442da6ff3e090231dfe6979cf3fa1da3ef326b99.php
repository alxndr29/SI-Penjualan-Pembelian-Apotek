<?php $__env->startSection('title', 'Stok Masuk'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Stok Masuk</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">
        Penyimpanan
    </li>
    <li class="breadcrumb-item active">Stok Masuk</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Transaksi</th>
                                    <th>Produk</th>
                                    <th>Supplier</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <tr>
                                    <td>1</td>
                                    <td class="text-primary fw-bolder" >PO-00001</td>
                                    <td>Panadol Extra</td>
                                    <td>Pelanggan Umum</td>
                                    <td><span class="fw-bold badge badge-info">Obat-Obatan</span> - Vitamin C</td>
                                    <td>10 Strip</td>
                                    <td>Rp. 15.000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td class="text-primary fw-bolder" >PO-00001</td>
                                    <td>Panadol Extra D</td>
                                    <td>Pelanggan Umum</td>
                                    <td><span class="fw-bold badge badge-info">Obat-Obatan</span> - Vitamin C</td>
                                    <td>15 Strip</td>
                                    <td>Rp. 10.000</td>
                                </tr>
























                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/pages/penyimpanan/stok-masuk.blade.php ENDPATH**/ ?>