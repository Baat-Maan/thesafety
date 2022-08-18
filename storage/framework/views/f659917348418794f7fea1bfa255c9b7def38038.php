<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">
<div class="row">
            <div class="col-lg-6">
            <a href="<?php echo e(route('admin.list.company')); ?>">
                <div class="widget style1 blue-bg">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-address-card fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Company </span>
                                <h2 class="font-bold"><?php echo e($data['company']); ?></h2>
                            </div>
                        </div>
                </div>
            </a>
            </div>
            <!--<div class="col-lg-4">-->
            <!--<a href="<?php echo e(route('admin.list.employee')); ?>">-->
            <!--    <div class="widget style1 navy-bg">-->
            <!--        <div class="row">-->
            <!--            <div class="col-4">-->
            <!--                <i class="fa fa-users fa-5x"></i>-->
            <!--            </div>-->
            <!--            <div class="col-8 text-right">-->
            <!--                <span> Today Employee </span>-->
            <!--                <h2 class="font-bold"><?php echo e($data['employee']); ?></h2>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="col-lg-6">
            <a href="<?php echo e(route('admin.list.package')); ?>">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-bank  fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Total Package </span>
                            <h2 class="font-bold"><?php echo e($data['packages']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!--<div class="col-lg-3">-->
            <!--<a href="<?php echo e(route('admin.list.event')); ?>">-->
            <!--    <div class="widget style1 yellow-bg">-->
            <!--        <div class="row">-->
            <!--            <div class="col-4">-->
            <!--                <i class="fa fa-calendar fa-5x"></i>-->
            <!--            </div>-->
            <!--            <div class="col-8 text-right">-->
            <!--                <span> Total Events </span>-->
            <!--                <h2 class="font-bold"><?php echo e($data['event']); ?></h2>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    </a>-->
            <!--</div>-->
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
                                        <th>Booking For</th>
                                        <th>User Name </th>
                                        <th>Schedule Date</th>
                                        <th>Company</th>
                                        <th>Package Name </th>
                                       <th>Booking Mode</th>
                                      
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
                                        <td><?php echo e($val->type); ?>  /<?php echo e($val->booking_for_name); ?>

                                            
                                        </td>
                                        <td><?php echo e($val->username); ?>

                                        </td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e($val->cname); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        </td>
                                         <td > <?php echo e($val->booking_mode); ?></td>
                                      
                                       
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\final-health\resources\views/admin/home.blade.php ENDPATH**/ ?>