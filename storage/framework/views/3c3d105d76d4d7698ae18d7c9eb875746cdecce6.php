
 
<?php $__env->startSection('title', 'Laporan Barang Keluar'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-3">
    <a href="<?php echo e(route('cetak_barang_keluar_pdf')); ?>" target="_blank" class="btn btn-light btn-sm text-danger fw-bold"><i class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
    <a href="<?php echo e(route('cetak_barang_keluar_excel')); ?>" target="_blank" class="btn btn-light btn-sm text-success fw-bold"><i class="fa-solid fa-file-excel"></i> Cetak Excel</a>
</div>

<div class="table-responsive">
  <table class="table table-bordered datatable">
      <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Transaksi</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Tujuan</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $barang_keluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brgk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($loop->iteration); ?>.</td>
          <td><?php echo e($brgk->kode_transaksi); ?></td>
          <td><?php echo e($brgk->kode_barang); ?></td>
          <td><?php echo e($brgk->nama_barang); ?></td>
          <td><?php echo e($brgk->tujuan); ?></td>
          <td><?php echo e($brgk->jumlah); ?></td>
          <td><?php echo e($brgk->tanggal); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\inventory-barang\resources\views/transaksi/barang_keluar/index.blade.php ENDPATH**/ ?>