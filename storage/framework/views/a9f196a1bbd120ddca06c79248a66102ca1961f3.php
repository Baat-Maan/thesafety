<?php $__env->startSection('body'); ?>
<style>
    select.form-control:not([size]):not([multiple]) {
    height: 2.3rem !important;
}
.newrow {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    margin-bottom: 10px;
    padding: 5px;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> <?php echo e($pageName); ?> <?php echo e($method); ?></h2>
                  
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($pageName); ?> <?php echo e($method); ?> </h5>
                            
                        </div>
                        <div class="ibox-content">
                            
                          
        
        
                        <form method="get" action="<?php echo e(route('call_center.mis')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                           <div class="row">
                                    <label>Search Here</label>
                                </div>
                            <div class="row newrow">
                            
                               
                          <?php ?>

                            
                                <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="from"
                                         placeholder="From Date" id="from" value="<?php echo e($_GET['from'] ?? ''); ?>">
                               </div>
                          
 <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="to" placeholder="To Date"
                                          id="to" value="<?php echo e($_GET['to'] ?? ''); ?>">
                               </div>
                          
                                <div class="col-sm-3">
                                     <?php echo e(Form::select('type',['AHC' => 'AHC Employee','Pre' => 'Pre Employee','Both' => 'Both'],$_GET['type']?? '', ['class'=>'form-control','placeholder'=>'Select Type'])); ?>

                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value=""> Select Status</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Pending' ) { echo "selected"; } ?> value="Pending">To be contacted</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Show' ) { echo "selected"; } ?> value="Show"> Show / No Show</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA' ) { echo "selected"; } ?> value="MDRA"> MDRA</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Approve' ) { echo "selected"; } ?> value="Approve"> Partial Process Done  </option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA Done' ) { echo "selected"; } ?> value="MDRA Done"> Closed Cases</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Cancel' ) { echo "selected"; } ?> value="Cancel"> Cancel </option>

                                    </select>
                                    </div>


                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="<?php echo e(route('call_center.mis')); ?>">
                                                <button type="button" class="btn btn-sm btn-warning">Reset!
                                    </button></a> </span></div>


                                </div>
                                 <?php
                           
                            if(isset($selectStatus) && $selectStatus!='all' &&   $selectStatus!='Status' && $selectStatus!=''  ) {  $status=$selectStatus; 
                            }else {  $status="all";
                            }
                             //echo $status="all";
                             
                             ?>
                                
                            </div>
                            </form>
                            
                             <form method="get" action="<?php echo e(route('mis.export')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                             <div class="row">
                                    <label>Export Here</label>
                                </div>
                            <div class="row newrow">
                               
                            
                               
                          <?php ?>

                            
                                <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="from"
                                         placeholder="From Date" id="efrom" value="<?php echo e($_GET['from'] ?? ''); ?>">
                               </div>
                          
 <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="to" placeholder="To Date"
                                          id="eto" value="<?php echo e($_GET['to'] ?? ''); ?>">
                               </div>
                          
                                <div class="col-sm-3">
                                     <?php echo e(Form::select('type',['AHC' => 'AHC Employee','Pre' => 'Pre Employee','Both' => 'Both'],$_GET['type']?? '', ['class'=>'form-control','placeholder'=>'Select Type'])); ?>

                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value=""> Select Status</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Pending' ) { echo "selected"; } ?> value="Pending"> To be contacted</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Show' ) { echo "selected"; } ?> value="Show"> Show / No Show</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA' ) { echo "selected"; } ?> value="MDRA"> MDRA</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Approve' ) { echo "selected"; } ?> value="Approve"> Partial Process Done  </option>
                                        <option <?php if(isset($selectStatus) && $selectStatus=='MDRA Done' ) { echo "selected"; } ?> value="MDRA Done"> Closed Cases</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Cancel' ) { echo "selected"; } ?> value="Cancel"> Cancel </option>

                                    </select>
                                    </div>


                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-info">Export To Excel!</button>
                                           </span></div>


                                </div>
                                 <?php
                           
                            if(isset($selectStatus) && $selectStatus!='all' &&   $selectStatus!='Status' && $selectStatus!=''  ) {  $status=$selectStatus; 
                            }else {  $status="all";
                            }
                             //echo $status="all";
                             
                             ?>
                             
                              </div>
                            </form>
       
                           
                            <div class="table-responsive">
                                <h1>Total Record : <?php echo e($total); ?></h1>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
<th>Unique Id</th>
                                        <th>Booking Id</th>
                                        <th>Creation Date</th>
                                        <th>Appoinment Date</th>
                                        <th>Booking For</th>
                                        <th>User Name </th>
                                        <th>Company</th>
                                        <th>Package Name </th>
                                      <th>Booking Mode</th>
                                      <th>Employee Type</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <?php if(count($result) > 0): ?>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                         <td><?php echo e($val->unique_code); ?></td>
                                        <td><?php echo e($val->id); ?></td>
                                         <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e(ucwords($val->type)); ?> / <?php echo e($val->booking_for_name); ?>

                                           
                                        </td>
                                        <td><?php echo e($val->username); ?>

                                        </td>
                                        
                                        <td><?php echo e($val->cname); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        </td>
                                       <td > <?php echo e($val->booking_mode); ?></td>
                                      <td > <?php if($val->is_admin==2): ?>
                                      AHC Employee
                                      <?php else: ?>
                                      Pre Employee
                                      <?php endif; ?>
                                      </td>
                                        <td >
                                            <?php if($val->status=='Pending'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">To Be Contacted</button>
                                        <?php elseif($val->status=='Show'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Confirmed</button>
                                        <?php elseif($val->status=='MDRA'): ?>
                                        <button  class="btn btn-info" type="button" style="cursor: default;">Medical Done Report Awaited</button>
                                        <?php elseif($val->status=='Approve'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        <?php elseif($val->status=='Cancel'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Cancel</button>
                                        <?php elseif($val->status=='Partial Process Done'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        <?php else: ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Closed</button>
                                        
                                        <?php endif; ?>
                                            
                                            
                                            
                                    

                                         
                                   
                                        <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                        <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="9" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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



<?php echo $__env->make('call_center.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/call_center/booking/mis.blade.php ENDPATH**/ ?>