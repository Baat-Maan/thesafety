<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Employee Daily Sheet</h2>
                  
                </div>
                <div class="col-lg-2">

                </div>
            </div>
      
        
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Employee Daily Sheet</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="">
                                    <thead>
                                    <tr>
                                       
                                        <th> Employee Name </th>
                                         <th>Date</th>
                                        <th> Project Name </th>
                                        <th>Description </th>
                                        <th>Status</th>
                                        <th>Due To</th>
                                         <th>Feedback</th>
                                        <th>Action</th>
                                        
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $employeess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        
                                        <td><a href="<?php echo e(route('admin.view.employee',$val->id)); ?>"><?php echo e($val->name); ?></a></td>
                                        <td>
                                            <?php echo e($val['dailyStatus'] ? $val['dailyStatus']->date : date('Y-m-d')); ?></td>
                                        <td>
                                            <?php if(!empty($val->dailyStatus)): ?>
                                                <?php echo e($val['dailyStatus']->projectName); ?>

                                            <?php else: ?>
                                                <?php if(!empty($val->projects)): ?>
                                                    <?php if(!empty($val['projects']->projectStatus != 'Finished')): ?>
                                                         <?php echo e($val['projects']->projectName); ?>

                                                    <?php else: ?>
                                                       No Project
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    No Project Assigned
                                                       
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                            
                                        </td>
                                        <td>
                                            <?php if(!empty($val->dailyStatus)): ?>
                                                <?php echo e($val['dailyStatus']->description); ?>

                                            <?php else: ?>
                                                <?php if(!empty($val->projects)): ?>
                                                    <?php if(!empty($val['projects']->projectStatus != 'Finished')): ?>
                                                         <?php echo e($val['projects']->projectDescription); ?>

                                                    <?php else: ?>
                                                      
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    
                                                       
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            
                                           </td>
                                        <td>
                                            <?php if(!empty($val->dailyStatus)): ?>
                                            <?php if($val['dailyStatus']->status == 'Completed'): ?>
                                                <span class="label label-success" >Completed </span>
                                                <?php elseif($val['dailyStatus']->status == 'On Hold'): ?>
                                               <span class="label label-warning" >On Hold</span>
                                              
                                               <?php else: ?>
                                                 <span class="label label-info" >Still Pending</span>
                                               <?php endif; ?>
                                             <?php endif; ?>
                                            
                                        </td>
                                        <td><?php echo e($val['dailyStatus'] ? $val['dailyStatus']->reason : ''); ?></td>
                                        <td><?php echo e($val['dailyStatus'] ? $val['dailyStatus']->feedback : ''); ?></td>
                                        <td>
                                            <?php if(!empty($val->dailyStatus)): ?>
                                            <?php if(empty($val['dailyStatus']->feedback)): ?>
                                            <button  onclick="feedback('<?php echo e($val['dailyStatus']->id); ?>')"; data-toggle="modal" data-target="#myModalFeedback" class="btn btn-info" type="button">Feedback</button>
                                            <?php endif; ?>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/resources/views/admin/daily_status/sheet.blade.php ENDPATH**/ ?>