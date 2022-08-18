<?php $__env->startSection('body'); ?>
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
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <!--<th>Created</th>-->
                                        <th>Company Name</th>
                                        <th>Employee Name </th>
                                        <th>Employee Code </th>
                                        <th>Package Taken</th>
                                        <th>Overall Experience With the medical examination process</th>
                                        <th>Medical Facility :(Ease of Locating, Set up, instruments, cleanliness, process followed)</th>
                                    
                                    <th>Reception at Clinic / Hospital</th>
                                        <th>Behavior and cooperation of staff at reception</th>
                                        <th> Courtesy and politeness of the doctor/medical staff for Technical Know

how, Behavior, Appearance etc</th>
                                        <th> Experience with the waiting time before the test began</th>
            
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->cname); ?></td>
                                        <td><?php echo e($val->username); ?></td>
                                        <td><?php echo e($val->employee_code); ?></td>
                                        <td><?php echo e($val->packageName); ?></td>
                                        
                                        <td><?php echo e($val->overall_expeirence); ?></td>
                                        <td><?php echo e($val->medical_facility); ?></td>
                                        <td><?php echo e($val->reception); ?></td>
                                        <td><?php echo e($val->behavior_of_staff); ?></td>
                                        <td><?php echo e($val->courtesy_and_politeness); ?></td>
                                        <td><?php echo e($val->waiting_time); ?></td>
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="7" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/admin/feedback/list.blade.php ENDPATH**/ ?>