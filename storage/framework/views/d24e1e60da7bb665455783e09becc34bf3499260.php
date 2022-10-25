<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Dashboard</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Produk</h6>
                        <h3 class="mb-4">1566 Produk</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Produk Terjual Hari Ini</h6>
                        <h3 class="mb-4">614 Pesanan</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Pendapatan</h6>
                        <h3 class="mb-4">Rp 15.000.000</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4">Total Pendapatan Bersih</h6>
                        <h3 class="mb-4">Rp. 15.000.000</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Produk Kadaluwarsa</h4>
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Batas Min Stok</th>
                                    <th>Sisa Stok</th>
                                    <th>Harga Jual</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo e($product->nama); ?></td>
                                        <td><?php echo e($product->uom); ?></td>
                                        <td><span class="fw-bold badge badge-info"><?php echo e($product->type); ?></span> - <?php echo e($product->category); ?></td>
                                        <td><?php echo e($product->min_stock); ?></td>
                                        <td>15</td>
                                        <td><?php echo e($product->harga == null ? '0' : $product->harga); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Stok Habis</h4>
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr class="fs-sm-6">
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Jenis & Kategori</th>
                                    <th>Batas Min Stok</th>
                                    <th>Sisa Stok</th>
                                    <th>Harga Jual</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>No</td>
                                        <td><?php echo e($product->nama); ?></td>
                                        <td><?php echo e($product->uom); ?></td>
                                        <td><span class="fw-bold badge badge-info"><?php echo e($product->type); ?></span> - <?php echo e($product->category); ?></td>
                                        <td><?php echo e($product->min_stock); ?></td>
                                        <td>15</td>
                                        <td><?php echo e($product->harga == null ? '0' : $product->harga); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                                </tfoot>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/dashboard/index.blade.php ENDPATH**/ ?>