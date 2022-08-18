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
                        <?php echo e(Form::open(['route'=>['admin.update.holiday',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="id">


                        <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Holiday Name</label>
    
                                        <div class="col-sm-10"><input type="text" value="<?php echo e($result->name ?? old('name')); ?>" name="name" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                    </div>
    
    
                                  
    
    
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                 
                                    <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Date</label>
    
                                        <div class="col-sm-10"><input type="date" value="<?php echo e($result->date ?? old('date')); ?>" name="date" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('date')); ?> <span>
                                    </div>
    
    
                                   
    
    
                                    </div>
                                   
                             
                                       
                                        <div class="hr-line-dashed"></div>
                                    <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Status</label>
    
                                        <div class="col-sm-10"> 
                                            <?php echo e(Form::select('status', ['1'=>'Active','0'=>'Deactive'],$result->status, ['class'=>'form-control','placeholder'=>'Select Status'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('status')); ?> <span>
                                    </div>
    
    
                                   
    
    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/admin/holiday/edit.blade.php ENDPATH**/ ?>