<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <?php echo e(Html::style('public/assest/login/css/style.css')); ?>

    <?php echo e(Html::style('public/assest/login/css/font-awesome.min.css')); ?>

    
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <!--//Style-CSS -->


</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Welcome to <span>Avyukt Healthcare</span></h1>
        
        <div class="container">
            <!-- /form -->
            
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <div class="logo" style="text-align:center;"><img src="https://www.avyukthealthcare.com/wp-content/uploads/2020/09/avyukt-healthcare-logo11.png" width="150px"></img></div>
                        <center><h3>Employee Log In</h3></center>
                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success" style="color:green">
                            <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

                        </div>
                        <?php elseif(Session::has('failed')): ?>
                        <div class="alert alert-danger" style="color:red">
                            <strong>Danger!</strong> <?php echo e(Session::get('failed')); ?>

                        </div>
                        <?php elseif(Session::has('error')): ?>
                        <div class="alert alert-danger" style="color:red"> 
                            <strong></strong> <?php echo e(Session::get('error')); ?>

                        </div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('user.login')); ?>">
                        <?php echo csrf_field(); ?>
                            <input type="email" class="text  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="User Email" value="<?php echo e($email); ?>" required autocomplete="email" autofocus>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          
                                <input type="password" class="password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Enter OTP" required autocomplete="current-password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>

                        </form>
                       
                                    <a class="btn btn-link" href="<?php echo e(route('user.login')); ?>">
                                        <?php echo e(__('Resend OTP?')); ?>

                                    </a>
                              
                        <!--<?php if(Route::has('password.request')): ?>-->
                        <!--            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">-->
                        <!--                <?php echo e(__('Forgot Your Password?')); ?>-->
                        <!--            </a>-->
                        <!--        <?php endif; ?>-->
                    </div>
                    
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <?php echo e(Html::image('public/assest/login/images/Banner_2.png')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© <strong>Copyright</strong> AHC Company</p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html><?php /**PATH C:\xampp\htdocs\final-health\resources\views/employee/login_otp.blade.php ENDPATH**/ ?>