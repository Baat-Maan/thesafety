<?php $__env->startSection('body'); ?>

<style>

.icx0 .ibox-content {
    background: linear-gradient(45deg, #cc5266, #f49dac);
    color: white;
}
.icx01 .ibox-content {
    background: linear-gradient(45deg, #d478c8, #e7bee4);
    color: white;
}
.icx1 .ibox-content {
    background: linear-gradient(45deg, #3366ff, #abc2fe);
    color: white;
}
.icx2 .ibox-content {
    background: linear-gradient(45deg, #00ac69, #9adec5);
    color: white;
}.icx3 .ibox-content {
    background: linear-gradient(45deg, #dd2d26, #fbb4b2);
    color: white;
}.icx4 .ibox-content {
    background: linear-gradient(45deg, #c58313, #eeca88);
    color: white;
}
.ibs {
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    border-radius: 10px;
}.ibs:hover {
    transition: .5s;
    transform: scale(1.05);
}
.ibs .ibox-title {
    border-radius: 10px 10px 0px 0px;
}.ibs .ibox-content {
    border-radius: 0px 0px 10px 10px;
}.tablecs .ibox-content {
    padding: 0px;
}.tablecs th {
    background: #eaeaea;
    font-weight: 500;
}.tablecs .table-striped {
    margin-bottom: 0;
}
.tablecs {
    box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
    border-radius: 10px;
}
.tablecs .ibox-title {
    border-radius: 10px 10px 0px 0px;
}
.tablecs .ibox-content {
    border-radius: 0px 0px 10px 10px;
}
.tablecs h5 {font-size: 20px;
    color: #303030;
    text-transform: uppercase;
}.tablecs li {
    list-style: none;
}.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgb(248 253 253);
}

</style>
<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-3"></div>
     <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.employee')); ?>" style="color:inherit;">
            <div class="ibox icx0 ibs">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h5>Vendors</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['employees']); ?></h1>
                   
                    <small>Total Vendors</small>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-3">
        <a href="<?php echo e(route('admin.new.product')); ?>" style="color:inherit;">
            <div class="ibox icx01 ibs">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h5>Products</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e($data['products']); ?></h1>
                   
                    <small>Total Products</small>
                </div>
            </div>
        </a>
        </div>
        
        </div>
     <!--   <div class="row">-->
     <!--   <div class="col-lg-3">-->
     <!--   <a href="<?php echo e(route('admin.list.product','status=In Proces')); ?>" style="color:inherit;">-->
     <!--       <div class="ibox icx1 ibs">-->
     <!--           <div class="ibox-title ">-->
     <!--               <div class="ibox-tools">-->
     <!--                 <i class="fa-solid fa-file-import"></i>-->
     <!--               </div>-->
     <!--               <h5>Running Projects</h5>-->
     <!--           </div>-->
     <!--           <div class="ibox-content">-->
     <!--               <h1 class="no-margins"><?php echo e($data['running_projects']); ?></h1>-->
                   
     <!--               <small>Total Running Projects</small>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </a>-->
     <!--   </div>-->
     <!--   <div class="col-lg-3">-->
     <!--   <a href="<?php echo e(route('admin.list.product','status=Finished')); ?>" style="color:inherit;">-->
     <!--       <div class="ibox icx2 ibs">-->
     <!--           <div class="ibox-title">-->
     <!--               <div class="ibox-tools">-->
     <!--                   <i class="fa-solid fa-file-circle-check"></i>-->
     <!--               </div>-->
     <!--               <h5>Finished Projects</h5>-->
     <!--           </div>-->
     <!--           <div class="ibox-content">-->
     <!--               <h1 class="no-margins"><?php echo e($data['finished_projects']); ?></h1>-->
                   
     <!--               <small>Total Finished Projects</small>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </a>-->
     <!--   </div>-->
        
     <!--   <div class="col-lg-3">-->
     <!--   <a href="<?php echo e(route('admin.list.product','status=Cancelled')); ?>" style="color:inherit;">-->
     <!--       <div class="ibox icx3 ibs">-->
     <!--           <div class="ibox-title">-->
     <!--               <div class="ibox-tools">-->
     <!--                   <i class="fa-solid fa-file-circle-xmark"></i>-->
     <!--               </div>-->
     <!--               <h5>Cancelled Projects</h5>-->
     <!--           </div>-->
     <!--           <div class="ibox-content">-->
     <!--               <h1 class="no-margins"><?php echo e($data['cancelled_projects']); ?></h1>-->
                   
     <!--               <small>Total Cancelled Projects</small>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </a>-->
     <!--   </div>-->
     <!--   <div class="col-lg-3">-->
     <!--   <a href="<?php echo e(route('admin.list.product','status=On Hold')); ?>" style="color:inherit;">-->
     <!--       <div class="ibox icx4 ibs">-->
     <!--           <div class="ibox-title">-->
     <!--               <div class="ibox-tools">-->
     <!--                <i class="fa-solid fa-file-circle-question"></i>-->
     <!--               </div>-->
     <!--               <h5>Hold Projects</h5>-->
     <!--           </div>-->
     <!--           <div class="ibox-content">-->
     <!--               <h1 class="no-margins"><?php echo e($data['hold_projects']); ?></h1>-->
                   
     <!--               <small>Total Hold Projects</small>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </a>-->
     <!--   </div>-->
        
                    
     <!--</div>-->

<!--
 <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox tablecs">
                        <div class="ibox-title">
                            <h5> Projects List </h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped" >
                                    <thead>
                                    <tr>

                                        <th width="5%">Project No.</th>
                                         <th width="12%">Category Name</th>
                                         <th width="15%">Project Name</th>
                                          <th width="8%">Start Date</th>
                                          <th width="8%">End Date</th>
                                        
                                          <th width="10%">Employees </th>
                                          
                                          <th width="10%">Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php
                                            $todayDate = date("Y-m-d");
                                    ?>
                                    <?php if(!empty($val->end_date)): ?>
                                         <?php if($todayDate > $val->end_date && $val->status == "In Process"): ?>
                                            <tr class="chngeColor">
                                        <?php else: ?>
                                            <tr> 
                                        <?php endif; ?>  
                                    <?php else: ?>
                                        <tr> 
                                    <?php endif; ?>
                                        
                                        <?php
                                            $month = date('m');
                                            $projectNo = 'TOS/'.$month.'/'.$val->id;
                                        ?>
                                        <td>
                                          
                                             
                                           
                                            <?php echo e($projectNo); ?></td>
                                        <td><?php echo e($val->categoryName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->start_date); ?></td>
                                         <td><?php echo e($val->end_date); ?></td>
                                        
                                        
                                           <td>
                                               <?php if(!empty($val->employee_ids)): ?>
                                            <?php
                                                $employeeIds = explode(',', $val->employee_ids);
                                               foreach($employeeIds as $employeeId){
                                                   $name = DB::table('users')->where('id',$employeeId)->first();
                                             //  echo $employeeId;die;
                                            ?>
                                            <li><i class="fa-solid fa-user-check"></i> <?php echo e($name->name); ?></li>
                                            <?php } ?>
                                            <?php endif; ?>
                                        </td>
                                        
                                        
                                           <td>
                                               <?php if($val->status == 'Finished'): ?>
                                                <span class="label label-success" >Finished </span>
                                               <?php elseif($val->status == 'Cancelled'): ?>
                                               <span class="label label-danger" >Cancelled</span>
                                                <?php elseif($val->status == 'On Hold'): ?>
                                               <span class="label label-warning" >On Hold</span>
                                                <?php elseif($val->status == 'In Process' && (!empty($val->employee_ids))): ?>
                                                <span class="label label-info" >In Process</span>
                                              
                                               <?php else: ?>
                                                 <span class="label label-success" >Fresh Project</span>
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
-->


<div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Bookings</h5>
                                <div class="ibox-tools">
                                    <div class="btn-group">
                                       
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/home.blade.php ENDPATH**/ ?>