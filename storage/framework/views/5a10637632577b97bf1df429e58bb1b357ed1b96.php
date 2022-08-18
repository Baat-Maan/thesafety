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
                        <?php echo e(Form::open(['route'=>['admin.update.assignproject',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                          <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Employee*</label>

                                    <div class="col-sm-10"> 
                                     <?php $__currentLoopData = $employeess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="employee_ids[]" 
                               <?php echo e(in_array($segment['id'], explode(',',$result->employee_ids))?"checked":null); ?>

                                value="<?php echo e($segment['id']); ?>" id="inlineCheckbox<?php echo e($segment['id']); ?>"> <?php echo e($segment['name']); ?> <br/>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                  <span class="" style="color:red"> <?php echo e($errors->first('employee_ids')); ?> <span>
                                    
                                </div>
                                </div>
                                   
                                    <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Project* </label>
    
                                        <div class="col-sm-10"> 
                                            <?php echo e(Form::select('project_id', $projectAll,$result->project_id, ['class'=>'form-control','placeholder'=>'Select Project'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('project_id')); ?> <span>
                                    </div>
    
    
                                   
    
    
                                    </div>
                                    
                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Project Description</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('description', $result->description, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    
                                  
                                </div> 
                                   
                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10">
                                    <?php echo e(Form::file('image',['class'=>'form-control'])); ?>

                                   <?php if(!empty($result->image)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($result->image); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
                                <span class="" style="color:red"> <?php echo e($errors->first('image')); ?> <span>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/admin/projectAssign/edit.blade.php ENDPATH**/ ?>