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
                        <?php echo e(Form::open(['route'=>['employee.update.dependent',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="id">


                        <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label"> Name</label>
    
                                        <div class="col-sm-4">
                                            <?php echo Form::text('name', $result->name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                    </div>
                                    <label class="col-sm-2 col-form-label"> Relation</label>
    
                                        <div class="col-sm-4">
                                            <?php echo Form::text('relation', $result->relation,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                    </div>
                                    </div>
                                    
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row">
                                        
                                    <label class="col-sm-2 col-form-label"> Contact No</label>
    
                                        <div class="col-sm-4">
                                            <?php echo Form::number('contact_no', $result->contact_no,['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                        <span class="" style="color:red"> <?php echo e($errors->first('contact_no')); ?> <span>
                                    </div>
                                     <label class="col-sm-2 col-form-label"> DOB</label>
    
                                        <div class="col-sm-4">
                                            <?php echo Form::date('dob', $result->dob,['class' => 'form-control']); ?>

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
                                <?php echo e(Form::close()); ?>

                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/employee/dependent/edit.blade.php ENDPATH**/ ?>