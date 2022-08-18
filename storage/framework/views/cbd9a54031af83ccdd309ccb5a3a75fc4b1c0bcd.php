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
                        <?php echo e(Form::open(['route'=>['admin.update.company',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="user_id">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Company Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->company ?? old('company')); ?>" name="company" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('company')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->name ??  old('name')); ?>" name="name" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">prfix your domain name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->perifix ?? old('perifix')); ?>" name="perifix" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('perifix')); ?> <span></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->email ?? old('email')); ?>" name="email" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <span style="color:red">(if you want Change Password then fill password otherwise leave password)</span>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Password</label>
                                

                                    <div class="col-sm-10"><input type="password" value="" name="password" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>

                                    </div>
                                </div>


                                

                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Country</label>

                                    <div class="col-sm-10">
                                       <?php echo e(Form::select('country', array('India' => 'India'),$result->country, ['class'=>'form-control'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('country')); ?> <span>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">State</label>

                                    <div class="col-sm-10">
                                       <?php echo e(Form::select('state_id', $states,$result->state_id, ['class'=>'form-control'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('state')); ?> <span>

                                    </div>
                                </div>

                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-10">
                                    <textarea  name="address" class="form-control"><?php echo e($result->address ?? old('address')); ?></textarea>
                                    <span class="" style="color:red"> <?php echo e($errors->first('address')); ?> <span>

                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10"><input type="file" name="image" class="form-control">
                                <br>
                                <img src="<?php echo e(env('APP_URL')); ?><?php echo e($result->image); ?>" height="150px;"/></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/seoagencyindia/public_html/healthcare/resources/views/admin/company/edit.blade.php ENDPATH**/ ?>