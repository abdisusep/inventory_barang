
 
<?php $__env->startSection('title', 'List Jenis Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('jenis_barang.create')); ?>" class="btn btn-light btn-sm loading"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div>
<table class="table table-bordered datatable">
    <thead>
    <tr class="bg-light">
      <th scope="col">#</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $jenis_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jbrg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?>.</td>
        <td><?php echo e($jbrg->jenis_barang); ?></td>
        <td>
            <form action="<?php echo e(route('jenis_barang.destroy', $jbrg->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a href="<?php echo e(route('jenis_barang.edit', $jbrg->id)); ?>" class="btn btn-outline-warning btn-sm loading"><i class="fa-solid fa-edit"></i></a>
                <button type="submit" class="btn btn-outline-danger btn-sm loading"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/jenis_barang/index.blade.php ENDPATH**/ ?>