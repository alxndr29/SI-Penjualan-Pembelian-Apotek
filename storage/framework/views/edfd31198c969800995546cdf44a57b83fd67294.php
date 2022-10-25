<?php $__env->startSection('title', 'Piutang'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Piutang</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">
        Keuangan
    </li>
    <li class="breadcrumb-item active">Piutang</li>
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
                                    <th>Pelanggan</th>
                                    <th>NO.BPJS</th>
                                    <th>Tanggal dan Waktu Transaksi</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <th>Total Transaksi</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <tr>
                                    <td>1</td>
                                    <td class="text-primary fw-bolder">PO-00001</td>
                                    <td>Pelanggan A</td>
                                    <td>151231231</td>
                                    <td>20-10-2022 13:05:05</td>
                                    <td>20-10-2022 13:05:05</td>
                                    <td>Rp. 15.000</td>
                                    <td><span class="badge badge-success">Lunas (20-10-2022 13:05:05)</span> </td>
                                    <td>
                                        <a class="btn btn-primary btn-xl me-2">Set Status</a>
                                        <a class="btn btn-outline-info btn-xl me-2">Detail Order</a>
                                    </td>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/pages/keuangan/piutang.blade.php ENDPATH**/ ?>