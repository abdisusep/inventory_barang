<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body class="bg-light">

    <div class="mb-4">
        <?php echo $__env->yieldContent('navbar'); ?>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="mt-2 fw-normal"><?php echo $__env->yieldContent('title'); ?></h5>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('js/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable();

            $('.logout').click(() => {
                Swal.fire({
                    text: "Yakin ingin logout ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, logout!',
                    showClass: {
                        popup: 'animate__animated animate__fadeIn'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOut'
                    }
                }).then((result) => {
                if (result.isConfirmed) {
                    LoadingShow();
                    window.location.href = "<?php echo e(route('logout')); ?>";
                }
                });
            });

            <?php if(session('success')): ?>
            alertMessage("success", "<?php echo e(session('message')); ?>")
            <?php endif; ?>
            
            <?php if(session('failed')): ?>
            alertMessage("error", "<?php echo e(session('message')); ?>")
            <?php endif; ?>
        } );
    </script>
</body>
</html><?php /**PATH E:\inventory-barang\resources\views/layouts/master.blade.php ENDPATH**/ ?>