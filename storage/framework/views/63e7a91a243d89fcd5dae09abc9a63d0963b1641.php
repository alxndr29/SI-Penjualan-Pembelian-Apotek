
<?php $__env->startSection('title', 'Daftar Pelanggan'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Daftar Pelanggan</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item active">Pelanggan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                    <strong>Berhasil</strong> <?php echo e($message); ?>

                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No.Telp</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                ?>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i += 1); ?></td>
                                        <<td><?php echo e($customer->name); ?></td>
                                        <td><?php echo e($customer->address); ?></td>
                                        <td><?php echo e($customer->telephone); ?></td>
                                        <td>
                                            <span class="badge badge-<?php echo e($customer->status == 0 ? 'danger' : 'success'); ?>"><?php echo e($customer->status == 0 ? 'Tidak Aktif' : 'Aktif'); ?></span>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="<?php echo e(route('pelanggan.destroy', $customer->id)); ?>"
                                                  method="POST">
                                                <a href="<?php echo e(route('pelanggan.edit',$customer->id)); ?>"
                                                   class="btn btn-warning btn-xl me-2">Edit</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-danger btn-xs" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
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
    </div>
    <?php if (isset($component)) { $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ModalLarge::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\ModalLarge::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pelanggan']); ?>
        <form method="POST" action="<?php echo e(route('pelanggan.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                               autofocus="true" name="name"
                               placeholder="Masukan Nama Pelanggan" >
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="telfon">No.Telfon</label>
                        <input class="form-control form-control-lg" id="telfon"
                               autofocus="true" name="telfon"
                               placeholder="Masukan Nomor Telfon" >
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="alamat">Alamat Pelanggan</label>
                        <textarea class="form-control form-control-lg" id="alamat" name="alamat"
                                  rows="3" placeholder="Masukan Alamat Pelanggan"></textarea>
                    </div>

                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b)): ?>
<?php $component = $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b; ?>
<?php unset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alx\Documents\apotek-paramel\resources\views/pages/konfigurasi/pelanggan/index.blade.php ENDPATH**/ ?>