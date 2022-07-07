
 
<?php $__env->startSection('title', 'List Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-light btn-sm loading"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div>
<table class="table table-bordered datatable">
    <thead>
    <tr class="bg-light">
      <th scope="col">#</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Satuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?>.</td>
        <td><?php echo e($brg->kode_barang); ?></td>
        <td><?php echo e($brg->nama_barang); ?></td>
        <td><?php echo e($brg->jenis_barang); ?></td>
        <td><?php echo e($brg->satuan); ?></td>
        <td>
            <form action="<?php echo e(route('barang.destroy', $brg->id)); ?>" method="post">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <a href="<?php echo e(route('barang.edit', $brg->id)); ?>" class="btn btn-outline-warning btn-sm loading"><i class="fa-solid fa-edit"></i></a>
                <button type="submit" class="btn btn-outline-danger btn-sm loading"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/barang/index.blade.php ENDPATH**/ ?>