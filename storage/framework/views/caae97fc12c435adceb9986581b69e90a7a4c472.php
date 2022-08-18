<?php $__env->startSection('body'); ?>
<style>
    select.form-control:not([size]):not([multiple]) {
    height: 2.0rem;
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
                        <form method="get" action="<?php echo e(route('call_center.my.booking.cancel')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-3">
                                <label class="form-label">Appoinment Date</label>
                                    <input  type="text" style="" value="<?php echo e($_GET['date'] ?? ''); ?>" class="form-control form-control-sm" name="date" id="datepickerr" data-zdp_readonly_element="true">
                             

                                </div>
                                 <div class="col-sm-3">
                                <label class="form-label">Search(By User Name) </label>
                                    <div class="input-group">
                                    <input placeholder="Search " type="Text" value="<?php echo e($_GET['search'] ?? ''); ?>" name="search" class="form-control form-control-sm"> 
                          
                                            </div>

                                </div>
                              
                                <div class="col-sm-3">
                                <label class="form-label">Company</label>
                                    <div class="input-group">
                                    <?php echo e(Form::select('company_id', $comapnys,$selectcomapnys, ['class'=>'form-control','placeholder'=>'Select Company'])); ?>

                               </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label"></label>
                                    <div class="input-group">
                                    <span style="margin-top: 10px;">
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="<?php echo e(route('call_center.my.booking.cancel')); ?>">
                                                <button type="button" class="btn btn-sm btn-warning">Reset!
                                    </button></a> </span></div>

                                </div>
                                


                                
                            </div>
                            </form>
                            <br/>
                            
                            <div class="table-responsive">
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
                                      
                                        <th style="text-align:left">Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
                                      
                                        <td >
                                        <td style="text-align:left"><?php echo e($val->cancel_reason); ?></td>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="8" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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



<?php echo $__env->make('call_center.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/call_center/booking/cancel.blade.php ENDPATH**/ ?>