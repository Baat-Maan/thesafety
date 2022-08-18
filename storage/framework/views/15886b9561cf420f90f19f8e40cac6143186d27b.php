<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile Setting</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-7">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Update Profile Details</h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('admin.update.profile')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Company Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->company ?? old('company')); ?>" name="company" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('company')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->name ?? old('name')); ?>" name="name" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span></div>
                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e($result->email ?? old('email')); ?>" name="email" class="form-control" disabled>
                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Country</label>

                                    <div class="col-sm-10">
                                       <?php echo e(Form::select('country', array('India' => 'India'),'India', ['class'=>'form-control'])); ?>

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
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10"><input type="file" name="image" class="form-control">
                                <br>
                            <img src="../<?php echo e($result->image); ?>" height="150px;"/></div>
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
                <!--<div class="col-lg-5">-->
                <!--    <div class="ibox ">-->
                <!--        <div class="ibox-title">-->
                <!--            <h5>Change Password</h5>-->
                            
                <!--        </div>-->
                <!--        <div class="ibox-content">-->
                <!--        <form method="POST" action="<?php echo e(route('admin.update.password')); ?>" enctype="multipart/form-data">-->
                <!--        <?php echo csrf_field(); ?>-->
                <!--                <p>Please Enter new password and confirm password if you want change.</p>-->
                <!--                <div class="form-group row"><label class="col-lg-2 col-form-label">New Password</label>-->

                <!--                    <div class="col-lg-10"><input type="password" placeholder="New Password" name="password" class="form-control"> -->
                <!--                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="form-group row"><label class="col-lg-2 col-form-label">Confirm Password</label>-->

                <!--                    <div class="col-lg-10"><input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control"></div>-->
                <!--                </div>-->
                                
                <!--                <div class="form-group row">-->
                <!--                    <div class="">-->
                <!--                        <button class="btn btn-white btn-sm" type="reset">Reset</button>-->
                <!--                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            
            
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/AHC/resources/views/admin/updateProfile.blade.php ENDPATH**/ ?>