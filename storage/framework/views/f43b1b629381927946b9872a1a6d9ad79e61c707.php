<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">
<div class="row">
               
               <div class="col-lg-12">

               </div>


           </div>
           <div class="row">
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.my.booking')); ?>">
                    <div class="widget style1 blue-bg">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-address-card fa-5x"></i>
                                </div>
                                <div class="col-8 text-right">
                                    <span> Total Bookings </span>
                                    <h2 class="font-bold"><?php echo e($data['bookings']); ?></h2>
                                </div>
                            </div>
                    </div>
                </a>
                </div>
                
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.list.package')); ?>">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-book  fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Package </span>
                                <h2 class="font-bold"><?php echo e($data['packages']); ?></h2>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.list.event')); ?>">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-calendar fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Events </span>
                                <h2 class="font-bold"><?php echo e($data['event']); ?></h2>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">

                <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Transactions (Last <?php echo e(count($bookings)); ?> ) of <?php echo e($total); ?></h5>
                                    
                                </div>
                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-lg-12">
                                        <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Booking Id</th>
                                    <th>Booking For</th>
                                    <th>Schedule Date</th>
                                    <th>Package Name </th>
                                    <th>Price </th>
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$page); ?></td>
                                    <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->id); ?></td>
                                        <td><?php echo e($val->type); ?>

                                               
                                            </td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        </td>
                                        <td>INR <?php echo e($val->price); ?></td>
                                  
                                    <td >
                                    <div class="input-group-prepend">
                                        <?php if($val->status=='Pending'): ?>
                                        <button  class="btn btn-info  " type="button"><?php echo e($val->status); ?></button>
                                        <?php elseif($val->status=='Processing'): ?>
                                        <button tabindex="-1" class="btn btn-info  " type="button"><?php echo e($val->status); ?></button>
                                        <?php else: ?>
                                        <button tabindex="-1" class="btn btn-success  " type="button"><?php echo e($val->status); ?></button>
                                        <?php endif; ?>
                                        
                                           
                                        </div>
                                    
                                      <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                    <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"> Download Report</i></a>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                
                                </tbody>
                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="world-map" style="height: 300px;"></div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\health\resources\views/employee/home.blade.php ENDPATH**/ ?>