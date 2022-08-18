<?php $__env->startSection('body'); ?>

<div class="wrapper wrapper-content">
    
  <div class="row">
    
        <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.project')); ?>" style="color:inherit;">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-info float-right">Total</span>
                    </div>
                    <h5>Projects</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['projects']); ?></h1>
                   
                    <small>Total Projects</small>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.project')); ?>" style="color:inherit;">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-info float-right">Total</span>
                    </div>
                    <h5>Running Projects</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['running_projects']); ?></h1>
                   
                    <small>Total Running Projects</small>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.project')); ?>" style="color:inherit;">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-info float-right">Total </span>
                    </div>
                    <h5>Finished Projects</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['finished_projects']); ?></h1>
                   
                    <small>Total Finished Projects</small>
                </div>
            </div>
        </a>
        </div>
        
        <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.project')); ?>" style="color:inherit;">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-info float-right">Total </span>
                    </div>
                    <h5>Cancelled Projects</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['cancelled_projects']); ?></h1>
                   
                    <small>Total Cancelled Projects</small>
                </div>
            </div>
        </a>
        </div>
         <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.employee')); ?>" style="color:inherit;">
            <div class="ibox ">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <span class="label label-info float-right">Total</span>
                    </div>
                    <h5>Employees</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['employees']); ?></h1>
                   
                    <small>Total Employees</small>
                </div>
            </div>
        </a>
        </div>
                    
     </div>


 <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5> Projects List </h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <thead>
                                    <tr>

                                        <th width="5%">Project No.</th>
                                        <th width="10%">Company Name </th>
                                         <th width="8%">Category Name</th>
                                         <th width="8%">Project Name</th>
                                          <th width="8%">Project Start Date</th>
                                          <th width="8%">Project End Date</th>
                                        <th width="10%">Cost </th>
                                          <th width="10%">Refered By </th>
                                          <th width="10%">Employees </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <?php
                                            $month = date('m');
                                            $projectNo = 'TOS/'.$month.'/'.$val->id;
                                        ?>
                                        <td><?php echo e($projectNo); ?></td>
                                        <td><?php echo e($val->companyName); ?></td>
                                        <td><?php echo e($val->categoryName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->start_date); ?></td>
                                         <td><?php echo e($val->end_date); ?></td>
                                        
                                         <td><?php echo e($val->cost); ?></td>
                                        
                                           <td><?php echo e($val->refered_by); ?></td>
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


    <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e(date("d/m/Y", strtotime($yesterdayDate) )); ?> Working Status</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th> Employee Name </th>
                                        <th> Project Name </th>
                                        <th>Description </th>
                                        <th>Status</th>
                                         <th>Feedback</th>
                                        <th>Action</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $dailyStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      
                                        <td><?php echo e($val->date); ?></td>
                                        <td><?php echo e($val->employeeName); ?></td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                        <td><?php echo e($val->status); ?></td>
                                        <td><?php echo e($val->feedback); ?></td>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/admin/home.blade.php ENDPATH**/ ?>