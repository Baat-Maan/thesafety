<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <link rel="icon" href="<?php echo e(env('APP_URL')); ?>public/fav-icon1.png" sizes="32x32" />
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
    
    <style>.sep {
    height: 3px;
    width: 53px;
    background: linear-gradient(45deg, #212a87, #ec9a9a);
    margin: 10px 0px;
}</style>
    <!--//Style-CSS -->


</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        
        <div class="container">
            <!-- /form -->
           
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <!--<div class="logo" style="text-align:center;"><img src="<?php echo e(env('APP_URL')); ?>public/assest/login/images/tos-LOGO-new.png" height="80px" width="170px"></img></div>  --->
                        <div class="sep"></div>
                        <h5 style="font-family: 'Noto Sans JP';
    color: #5a5a5a;
    font-size: 16px;
    font-weight: 400;">Login As a Admin User</h5>
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
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                            <input type="email" class="text  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="User Name" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
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
unset($__errorArgs, $__bag); ?>" name="password" placeholder="User Password" required autocomplete="current-password">
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
                        
                        <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                    </div>
                    
                    <div class="w3l_form align-self">
                        <div class="logo" style="text-align:right; padding: 10px 12px;"><img src="<?php echo e(env('APP_URL')); ?>public/assest/login/images/tos-LOGO-new.png"  width="170px"></img></div>
                        <div class="left_grid_info">
                            <?php echo e(Html::image('public/assest/login/images/side_login.png')); ?>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© <strong>Copyright</strong> TRENDY ONLINE SOLUTION Company</p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html><?php /**PATH /home2/tossamba/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>