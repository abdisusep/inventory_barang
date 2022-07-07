
 
<?php $__env->startSection('title', 'Laporan Stok Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('cetak_stok_barang_pdf')); ?>" target="_blank" class="btn btn-light btn-sm text-danger fw-bold"><i class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
    <a href="<?php echo e(route('cetak_stok_barang_excel')); ?>" target="_blank" class="btn btn-light btn-sm text-success fw-bold"><i class="fa-solid fa-file-excel"></i> Cetak Excel</a>
</div>

<div>
  <table class="table table-bordered datatable">
      <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Stok</th>
        <th scope="col">Satuan</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($loop->iteration); ?>.</td>
          <td><?php echo e($brg->kode_barang); ?></td>
          <td><?php echo e($brg->nama_barang); ?></td>
          <td><?php echo e($brg->jenis_barang); ?></td>
          <td><?php echo e($brg->stok); ?></td>
          <td><?php echo e($brg->satuan); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/barang/report.blade.php ENDPATH**/ ?>