<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Heureuy Login Form">
    <meta name="keywords" content="HTML, CSS, JavaScript, Login, Form, Bootstrap, JQuery, SweetAlert, AOS">
    <meta name="author" content="Susep Supriatna">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>"/>
    <style>
        .swal-loading{
            width: 250px !important;
            opacity: 0.9 !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 vh-100 d-flex align-items-center justify-content-center col-background">
                <div class="animate__animated animate__fadeInDown">
                    <img src="<?php echo e(asset('images/login.png')); ?>" class="w-100" alt="bg">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 bg-white vh-100 d-flex align-items-center">
                <form class="box" id="loginForm" method="POST" action="<?php echo e(route('login_post')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="text-center mb-4">
                        <img src="<?php echo e(asset('images/favicon.png')); ?>" class="logo animate__animated animate__fadeInDown" width="60px" height="60px" alt="Logo">
                        <h3 class="m-0 fw-600 animate__animated animate__fadeInDown">Login User</h3>
                        <p class="fs-14 fw-500 animate__animated animate__fadeInDown">PT. Teodore Pan Garmindo</p>
                    </div>
                    <div class="input-group animate__animated animate__fadeInDown">
                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                        <div class="form-floating flex-grow-1">
                            <input type="text" class="form-control rounded-right" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Email" oninput="isEmpty()">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="animate__animated animate__fadeInDown">
                        <small class="text-danger"><?php echo e($message); ?></small>
                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group mt-3 animate__animated animate__fadeInDown">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <div class="form-floating flex-grow-1">
                            <input type="password" class="form-control rounded-right" name="password" id="password" placeholder="Password" oninput="isEmpty()">
                            <label for="password">Password</label>
                        </div>
                        <span class="show-password rounded-right fs-14 d-none" id="showPassword">
                            <i class="fa-solid fa-eye"></i>
                        </span>
                    </div>
                    
                    <div class="mt-5 animate__animated animate__fadeInDown">
                        <button class="btn btn-primary w-100 fw-500 loading" type="submit" id="btnSubmit" disabled>
                            <span id="textLogin">Login</span>
                            <img src="<?php echo e(asset('images/loading.gif')); ?>" class="loader d-none" width="30px" height="30px" alt="Loader">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" ></script>
    <script src="<?php echo e(asset('js/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <?php if(session('login')): ?>
        <script>
            alertMessage("error", "<?php echo e(session('login')); ?>");
        </script>
    <?php endif; ?>
</body>
</html>
<?php /**PATH E:\inventory-barang\resources\views/login.blade.php ENDPATH**/ ?>