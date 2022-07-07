
 
<?php $__env->startSection('title', 'Tambah Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
  <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-light btn-sm loading"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
</div>
<form action="<?php echo e(route('barang.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_barang" value="<?php echo e(old('kode_barang')); ?>">
      <?php $__errorArgs = ['kode_barang'];
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
    <label class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_barang" value="<?php echo e(old('nama_barang')); ?>">
      <?php $__errorArgs = ['nama_barang'];
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
    <label class="col-sm-2 col-form-label">Jenis Barang</label>
    <div class="col-sm-5">
      <select name="jenis_barang" class="form-control">
        <option value="">--Pilih--</option>
        <?php $__currentLoopData = $jenis_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jen_bar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($jen_bar->jenis_barang); ?>"><?php echo e($jen_bar->jenis_barang); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
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
    <label class="col-sm-2 col-form-label">Satuan</label>
    <div class="col-sm-5">
      <select name="satuan" class="form-control">
        <option value="">--Pilih--</option>
        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($sat->satuan); ?>"><?php echo e($sat->satuan); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['satuan'];
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/barang/create.blade.php ENDPATH**/ ?>