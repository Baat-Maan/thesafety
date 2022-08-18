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
                        <?php echo e(Form::open(['route'=>['admin.update.product',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="user_id">
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Company*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('company_id', $companyes,$result->company_id, ['class'=>'form-control','placeholder'=>'Select Company'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Product Category*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('category_id', $projectType,$result->category_id, ['class'=>'form-control','placeholder'=>'Select Project Category'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('category_id')); ?> <span>
                                    </div>
                              
                              
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', $result->name,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>

                                    </div>
                                      <label class="col-sm-2 col-form-label">Product Code</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('code',$result->code,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('code')); ?> <span>

                                    </div>
                                    
                                </div>
                                
                                 
      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Product Cost*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::number('cost', $result->cost,['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('cost')); ?> <span>
                                </div>
                                  <label class="col-sm-2 col-form-label">Opening Stock*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('opening_stock', $result->opening_stock,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('opening_stock')); ?> <span>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Product Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', $result->description, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-4"><input type="file" name="image" class="form-control">
                                <br>
                                <img src="<?php echo e(env('APP_URL')); ?><?php echo e($result->image); ?>" height="50px;"/></div>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>