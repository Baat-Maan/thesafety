<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo e($method); ?>  <?php echo e($pageName); ?></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a><?php echo e($pageName); ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong><?php echo e($method); ?> <?php echo e($pageName); ?></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($method); ?>  <?php echo e($pageName); ?></h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('employee.save.dependent')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> Relation</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e(old('relation')); ?>" name="relation" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> Contact No</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e(old('contact_no')); ?>" name="contact_no" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_no')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> DOB</label>

                                    <div class="col-sm-3"><input type="date" value="<?php echo e(old('dob')); ?>" name="dob" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('dob')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                               
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\health\resources\views/employee/dependent/add.blade.php ENDPATH**/ ?>