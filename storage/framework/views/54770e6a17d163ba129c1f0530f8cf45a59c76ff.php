<?php $__env->startSection('body'); ?>

<div class="wrapper wrapper-content">
<div class="row">
               
               <div class="col-lg-12">

                  <div class="row">
                       <div class="col-lg-12">
                           <div class="ibox ">
                               <div class="ibox-title">
                                   <h5><span style="color:red">Employee Registration URL  </span>: <a target="_blank" href="<?php echo e(env('APP_URL')); ?>registration/<?php echo e(Auth::user()->id); ?>/<?php echo e(Auth::user()->slug); ?>" ><?php echo e(env('APP_URL')); ?>registration/<?php echo e(Auth::user()->id); ?>/<?php echo e(Auth::user()->slug); ?></a> </h5>
                                    <div class="ibox-tools">
                                      
                                   </div>
                               </div>
                              
                           </div>
                       </div>
                   </div>

               </div>


           </div>
        <div class="row">
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.my.booking')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Total</span>
                                </div>
                                <h5>Booking</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['bookings']); ?></h1>
                                <a href="export/all">
                                    <div class="stat-percent font-bold text-success"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total Booking</small>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.list.employee')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>MDRA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['mdra']); ?></h1>
                                <a href="export/MDRA">
                                    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total MDRA</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.list.employee')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-primary float-right">Total</span>
                                </div>
                                <h5>Partial Process Done</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['ppd']); ?></h1>
                                <a href="export/Approve">
                                <div class="stat-percent font-bold text-navy"><i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total PPD</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.list.employee')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-danger float-right">Total</span>
                                </div>
                                <h5>Cancelled </h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['cancel']); ?></h1>
                                <a href="export/cancel">
                                <div class="stat-percent font-bold text-danger"><i class="fa fa-download"></i> Download Excel</div>
                                </a>
                                <small>Total Cancelled </small>
                            </div>
                        </div>
                        </a>
            </div>
        </div>
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


                <div class="row">
                    

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-6">
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
                                    <th>User Name </th>
                                    <th>Schedule Date</th>
                                    <th>Package Name </th>
                                  
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
                                    <td><?php echo e($val->username); ?>

                                    </td>
                                    <td><?php echo e($val->booking_date); ?></td>
                                    <td><?php echo e($val->packageName); ?>

                                    </td>
                                   
                                    <td style="">
                                    <!-- <div class="input-group-prepend">
                                        <?php if($val->status=='Pending'): ?>
                                        <button  class="btn btn-info  " type="button"><?php echo e($val->status); ?></button>
                                        <?php elseif($val->status=='Processing'): ?>
                                        <button tabindex="-1" class="btn btn-info  " type="button"><?php echo e($val->status); ?></button>
                                        <?php else: ?>
                                        <button tabindex="-1" class="btn btn-success  " type="button"><?php echo e($val->status); ?></button>
                                        <?php endif; ?>
                                        
                                        
                                        </div> -->
                                        <?php if($val->status=='Partial Process Done'): ?>
                                        <div class="stat-percent font-bold text-navy">PPD</div>
                                        <?php else: ?>
                                        <div class="stat-percent font-bold text-navy"><?php echo e($val->status); ?></div>
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
                            <div class="col-lg-6">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Employee List (Last <?php echo e(count($emp)); ?> ) of <?php echo e($totalemp); ?></h5>
                                   
                                </div>
                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-lg-12">
                                        <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Employee Code</th>
                                    <th>Name</th>
                                    <th>Mobile Number </th>
                                    <th>Email</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$pageemp); ?></td>
                                    <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->employee_code); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->mobile); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                   
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/seoagencyindia/public_html/healthcare/resources/views/hr/home.blade.php ENDPATH**/ ?>