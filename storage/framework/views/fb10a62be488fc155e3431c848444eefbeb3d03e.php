<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo e($method); ?>  <?php echo e($pageName); ?></h2>
                  
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
                        <?php echo e(Form::open(['route'=>['admin.update.employee',$result->id],'class'=>'classname','method' => 'post','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="user_id">
                       <div class="form-group  row"><label class="col-sm-2 col-form-label">Employee Name*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('name', $result->name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Email*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('email', $result->email,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>
                        
                                  <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Password(leave Blank If not want to update)</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::password('password',['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Contact No.</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('mobile', $result->mobile,['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('designation')); ?> <span>

                                    </div>
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Designation</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('designation', $result->designation,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('designation')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('address', $result->address, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('address')); ?> <span>

                                    </div>
                                    
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Date Of Birth</label>

                                    <div class="col-sm-4"><input type="date" value="<?php echo e($result->dob); ?>" name="dob" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('dob')); ?> <span></div>


                                    
                                </div>
                             

                                
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/resources/views/admin/employee/edit.blade.php ENDPATH**/ ?>