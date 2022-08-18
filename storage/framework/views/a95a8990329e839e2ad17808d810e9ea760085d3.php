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
                        <?php echo e(Form::open(['route'=>['admin.update.package',$result->slug],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="id">


                        <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Package Name</label>
    
                                        <div class="col-sm-4"><input type="text" value="<?php echo e($result->name ?? old('name')); ?>" name="name" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                    </div>
    
    
                                    <label class="col-sm-2 col-form-label">Package Price</label>
    
                                        <div class="col-sm-4"><input type="text" value="<?php echo e($result->prie ?? old('price')); ?>" name="price" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('price')); ?> <span>
                                    </div>
    
    
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row">
                                        <label class="col-sm-2 col-form-label">From</label>
    
                                        <div class="col-sm-4"><input type="date" value="<?php echo e($result->from_date ?? old('from_date')); ?>" name="from_date" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('from_date')); ?> <span></div>
    
    
                                        <label class="col-sm-2 col-form-label">To</label>
    
                                        <div class="col-sm-4"><input type="date" value="<?php echo e($result->from_to ?? old('from_to')); ?>" name="from_to" class="form-control">
                                        <span class="" style="color:red"> <?php echo e($errors->first('from_to')); ?> <span></div>
                                    </div>
                                    
<div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Package For</label>

                                    <div class="col-sm-10"> 
 <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="package_for[]" 
                                <?php echo e(in_array($segment, explode(',',$result->segments))?"checked":null); ?>

                                value="<?php echo e($segment); ?>" id="inlineCheckbox<?php echo e($segment); ?>"> <?php echo e($segment); ?> &nbsp; &nbsp;
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                  <span class="" style="color:red"> <?php echo e($errors->first('package_for')); ?> <span>
                                  
                                    
                                </div>
                                </div>

                             
                                
<!--<div class="form-group  row"><label class="col-sm-2 col-form-label">Select Test</label>-->

<!--    <div class="col-sm-10">-->
<!--    <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--    <div class="i-checks"><label> <input type="checkbox"  name="tests[]" value="<?php echo e($val->id); ?>"> <i></i> <?php echo e($val->name); ?> </label></div>-->
<!--    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--    </div>-->
   
<!--</div> -->
<div class="form-group  row"><label class="col-sm-2 col-form-label">Included Test</label>

                                    <div class="col-sm-10">
                                    <textarea  name="test" class="form-control"><?php echo e($result->test ?? old('test')); ?></textarea>
                                    <span class="" style="color:red"> <?php echo e($errors->first('test')); ?> <span>

                                    </div>
                                </div> 
                                   <!-- <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>
    
                                        <div class="col-sm-10">
                                        <textarea  name="description" class="form-control"><?php echo e($result->description ?? old('description')); ?></textarea>
                                        <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>
    
                                        </div>
                                    </div> -->
                                  
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>

<div class="col-sm-10">
<?php echo e(Form::select('status', ['1'=>'Active','0'=>'De Active'],$result->status, ['class'=>'form-control'])); ?>


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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/admin/package/edit.blade.php ENDPATH**/ ?>