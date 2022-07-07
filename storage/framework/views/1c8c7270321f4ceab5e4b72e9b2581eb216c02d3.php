
 
<?php $__env->startSection('title', 'Tambah Jenis Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('jenis_barang.index')); ?>" class="btn btn-light btn-sm loading"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>

<form action="<?php echo e(route('jenis_barang.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis_barang">
      <?php $__errorArgs = ['jenis_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary loading">Simpan</button>
    </div>
  </div>
  
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/jenis_barang/create.blade.php ENDPATH**/ ?>