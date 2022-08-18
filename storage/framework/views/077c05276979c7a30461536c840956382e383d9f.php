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
                            <?php echo Form::open(['role' => 'form','route' => "admin.save.status",'class' => 'mws-form','method' => 'post', 'files' => true,]); ?>

                        
                        <?php echo csrf_field(); ?>
                        
                                 <div class="form-group  row">
                                    
                             
                                <label class="col-sm-2 col-form-label"> Date*</label>

                                    <div class="col-sm-4">
                                        <input type="date" value=""  class="form-control" name="date" required
                                          >
                                    <span class="" style="color:red"> <?php echo e($errors->first('date')); ?> <span>
                                </div>
                                 <label class="col-sm-2 col-form-label">Select Project* </label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('project_id', $projectAll,'', ['class'=>'form-control','placeholder'=>'Select Project','required'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('project_id')); ?> <span>
                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                   
                                      <label class="col-sm-2 col-form-label">Select Employee* </label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('employee_id', $employeess,'', ['class'=>'form-control','placeholder'=>'Select Employee','required'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('employee_id')); ?> <span>
                                    </div>
    
                                        <label class="col-sm-2 col-form-label"> Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                   
    
    
                                    </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Status* </label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('status', ['Still Pending'=>'Still Pending','Completed'=>'Completed','On Hold'=>'On Hold'],'', ['class'=>'form-control','placeholder'=>'Select Status','required'])); ?>

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
                                 <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th> Employee Name </th>
                                        <th> Project Name </th>
                                        <th>Description </th>
                                        <th>Status</th>
                                        <th>Due To</th>
                                         <th>Feedback</th>
                                        <th>Action</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->date); ?></td>
                                        <td><?php echo e($val->employeeName); ?></td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                        <td><?php echo e($val->status); ?></td>
                                        <td><?php echo e($val->reason); ?></td>
                                        <td class='feedcolr'><?php echo e($val->feedback); ?></td>
                                        <td>
                                            <?php if(empty($val->feedback)): ?>
                                            <button  onclick="feedback('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalFeedback" class="btn btn-info" type="button">Feedback</button>
                                            <?php endif; ?>
                                        </td>
                                      
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>


<div class="modal inmodal" id="myModalFeedback" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Feedback</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['admin.save.feedback'],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>

                                        <?php echo csrf_field(); ?>
                                       
                                        <div class="modal-body ">
                                            <input type="hidden" value="" class="daily_id" name="daily_id"/>
                                       <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label"> Description</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('feedback', null, ['class'=>'form-control','rows'=>'3','required']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                      
                                    </div>
                                        
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <a href="javascript:void(0)" style="display:none;" class="btn btn-sm btn-primary float-right buy_now" >Save changes</a> 

                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>       
                                    </div>
                                </div>
                            </div>
                            <script>
                                function feedback(id){
                                    $('.daily_id').val(id);
                                }
                            </script>
                            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/resources/views/admin/daily_status/add.blade.php ENDPATH**/ ?>