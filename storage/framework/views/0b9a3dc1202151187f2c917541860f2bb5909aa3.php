<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Register Form</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
    <?php echo e(Html::style('public/assest/front/css/style.css')); ?>

	<!--//Style-CSS -->
</head>
<style>
    .customecl{
        background: #fff;
								outline: none;
								width: 100%;
								font-size: 17px;
								padding: 10px 15px;
								color: #090e0d;
								border: 2px solid #BECED0;
    }
    </style>
<body>
	<!-- /login-section -->
	<section class="w3l-login-6">
		<div class="login-hny">
			<div class="form-content">
				<div class="form-right">
					<div class="overlay">
						<div class="grid-info-form">
                       
							<h5><?php echo e($result->company); ?></h5>
							<h3>CREATE ACCOUNT </h3>
							<p>Register and login your company account.</p>
							<a href="<?php echo e(env('APP_URL')); ?>user/login" class="read-more-1 btn">Login Account</a>
						</div>
					
					</div>
				</div>
				<div class="form-left">
					<div class="middle">
                    <?php if(Session::has('success')): ?>
                            <div class="alert alert-success" style="color:green">
                                    <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

                                </div>
                                <?php elseif(Session::has('failed')): ?>
                                <div class="alert alert-danger" style="color:red">
                                    <strong>Danger!</strong> <?php echo e(Session::get('failed')); ?>

                                </div>
                                <?php endif; ?>
						<h4>Join Us</h4>
						<h4><b><?php echo e($result->company); ?></b> <span>Employee Registration</span></h4> 
					</div>
                    <?php echo e(Form::open(['route'=>['employee.register',$result->id,$result->slug],'class'=>'signin-form','id'=>'myForm','files'=>'true'])); ?>


<div class="col-sm-6">
							<div class="form-input">
								<label>Employee Name</label>
								<input type="text" name="name" placeholder=""  />
                                <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
							</div></div>


							

							<div class="col-sm-6">
							<div class="form-input">
								<label>Employee Code</label>
								<input type="text" name="employee_code" placeholder=""  />
                                <span class="" style="color:red"> <?php echo e($errors->first('employee_code')); ?> <span>
							</div></div>
							<div class="col-sm-6">
							<div class="form-input">
								<label>Employee Mobile Number
</label>
								<input type="number" name="mobile" placeholder=""  />
                                <span class="" style="color:red"> <?php echo e($errors->first('mobile')); ?> <span>
							</div></div>
							<div class="col-sm-6">
							<div class="form-input">
								<label>Employee Designation
</label>
								<input type="text" name="designation" placeholder=""  />
                                <span class="" style="color:red"> <?php echo e($errors->first('designation')); ?> <span>
							</div>
</div>
                            
						
							<div class="col-sm-6">
							<div class="form-input">
								<label>Email (without domain name) </label>
								<input type="text" name="email" placeholder=""  /><?php echo e($result->perifix); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>
							</div></div>
							<div class="col-sm-6">
							<div class="form-input">
								<label>Password</label>
								<input type="password" name="password" placeholder=""  />
                                <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>
							</div>
							</div>
								<div class="col-sm-12">
							<div class="form-input">
					<label>Gender</label>
							<label class="container">Male
								<input type="radio" checked name="gender" value="Male">
								<span class="checkmark"></span>
							</label>
							<label class="container">Female
								<input type="radio" name="gender" value="Female">
								<span class="checkmark"></span>
							</label>
                            <span class="" style="color:red"> <?php echo e($errors->first('gender')); ?> <span>
				</div>
				</div>
				
							
							<div class="col-sm-12 submit">
							<button class="btn">Create account</button>
                            <?php echo e(Form::close()); ?>

                            
                            </div>
				
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- //login-section -->
</body>

</html><?php /**PATH C:\xampp\htdocs\health\resources\views/register.blade.php ENDPATH**/ ?>