<?php foreach($attributes->onlyProps(['title']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title']); ?>
<?php foreach (array_filter((['title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="modal fade bd-example-modal-lg"  tabindex="9999" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Tambah Data <?php echo e($title); ?></h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>


<?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/components/modal-large.blade.php ENDPATH**/ ?>