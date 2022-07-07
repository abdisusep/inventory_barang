 
<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<p class="m-0 fs-14">Selamat Datang <b><?php echo e(Auth::user()->name); ?></b></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/dashboard.blade.php ENDPATH**/ ?>