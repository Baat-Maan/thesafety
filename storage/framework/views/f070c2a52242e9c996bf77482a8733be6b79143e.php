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
                        <form method="POST" action="<?php echo e(route('admin.save.assignproject')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    
                                   
                                   
                                    <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Employee*</label>

                                    <div class="col-sm-10"> 
                                     <?php $__currentLoopData = $employeess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="employee_ids[]" 
                               
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
                                            <?php echo e(Form::select('project_id', $projectAll,'', ['class'=>'form-control','placeholder'=>'Select Project'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('project_id')); ?> <span>
                                    </div>
    
    
                                   
    
    
                                    </div>
                                    
                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Project Description</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    
                                  
                                </div> 
                                   
                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10">
                                    <?php echo e(Form::file('image',['class'=>'form-control'])); ?>

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
                            </form>
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
        
        
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>List <?php echo e($pageName); ?>  </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="<?php echo e(route('admin.new.assignproject')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                          
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Employee  Name</th>

                                        <th>Project Name </th>
                                        <th>Description </th>
                                        <th>Document</th>
                                        <th>Action</th>
                                    </tr>   
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td>
                                            <?php
                                                $employeeIds = explode(',', $val->employee_ids);
                                               foreach($employeeIds as $employeeId){
                                                   $name = DB::table('users')->where('id',$employeeId)->first();
                                             //  echo $employeeId;die;
                                            ?>
                                            <li><?php echo e($name->name); ?></li>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                        <td>
                                            <?php if(!empty($val->image)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                        <?php echo Html::decode(link_to_route('admin.edit.assignproject','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.assignproject','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--tr>
                                        <td colspan="9"></td>
                                       
                                    </tr-->
                                    
                                    </tbody>
                                </table>
                                <?php echo e($result->appends($_GET)->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/admin/projectAssign/add.blade.php ENDPATH**/ ?>