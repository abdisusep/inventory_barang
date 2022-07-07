
 
<?php $__env->startSection('title', 'Transaksi Barang Masuk'); ?>

<?php $__env->startSection('content'); ?>
<form class="mt-4" action="<?php echo e(route('barang_masuk.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Transaksi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_transaksi" value="TRM-<?php echo e(date('Ymdhs').rand(0000,9999)); ?>" readonly>
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="tanggal" value="<?php echo e(old('tanggal')); ?>">
      <?php $__errorArgs = ['tanggal'];
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
    <label class="col-sm-2 col-form-label">Barang</label>
    <div class="col-sm-5">
      <select name="kode_barang" class="form-control">
        <option value="">--Pilih--</option>
        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($bar->kode_barang); ?>"><?php echo e($bar->nama_barang); ?> | <?php echo e($bar->stok); ?> <?php echo e($bar->satuan); ?>.</option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
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
    <label class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="jumlah" value="<?php echo e(old('jumlah')); ?>">
      <?php $__errorArgs = ['jumlah'];
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
    <label class="col-sm-2 col-form-label">Supplier/Pengirim</label>
    <div class="col-sm-5">
      <select name="pengirim" class="form-control">
        <option value="">--Pilih--</option>
        <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($sup->nama_supplier); ?>"><?php echo e($sup->nama_supplier); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['pengirim'];
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/transaksi/barang_masuk/create.blade.php ENDPATH**/ ?>