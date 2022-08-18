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
                            <?php echo Form::open(['role' => 'form','route' => "employee.save.status",'class' => 'mws-form','method' => 'post', 'files' => true,]); ?>

                        
                        <?php echo csrf_field(); ?>
                        
                                 <div class="form-group  row">
                                    
                             
                                <label class="col-sm-2 col-form-label"> Date*</label>

                                    <div class="col-sm-4">
                                        <input type="text" value="<?php echo e(date('d/m/Y')); ?>" disabled  class="form-control" name="date"
                                          id="datepickerrr12" data-zdp_readonly_element="true">
                                    <span class="" style="color:red"> <?php echo e($errors->first('date')); ?> <span>
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
                                <div class="form-group  row">
                                    
                              
                                <label class="col-sm-2 col-form-label"> Description</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Status* </label>
    
                                        <div class="col-sm-10"> 
                                            <?php echo e(Form::select('status', ['Still Pending'=>'Still Pending','Completed'=>'Completed','On Hold'=>'On Hold'],'', ['class'=>'form-control','placeholder'=>'Select Status'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('status')); ?> <span>
                                    </div>
                                    </div>
                                    
                                <div class="hr-line-dashed"></div>


                               
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm"  type="submit">Save changes</button>
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
                            <h5><?php echo e($pageName); ?> List</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                      
                                        <th>Date</th>
                                        <th> Project Name </th>
                                        <th>Daily Status </th>
                                        <th>Admin Feedback</th>
                                        <th>Status</th>
                                        
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->date); ?></td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                         <td><?php echo e($val->feedback); ?></td>
                                        <td><?php echo e($val->status); ?></td>
                                       
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="6" style="color:red; text-align:center">Record Not Found.....</td>
                                       
                                    </tr>
                                    <?php endif; ?>
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

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/employee/daily_status/add.blade.php ENDPATH**/ ?>