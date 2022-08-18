<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> <?php echo e($pageName); ?> Daily Status</h2>
                  
                </div>
            </div>
               <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($pageName); ?> Daily Status</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th> Project Name </th>
                                        <th>Daily Status </th>
                                        <th>Admin Feedback</th>
                                        <th>Status</th>
                                        
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->date); ?></td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                         <td><?php echo e($val->feedback); ?></td>
                                        <td><?php echo e($val->status); ?></td>
                                       
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="6" style="color:red; text-align:center">Record Not Found.....</td>
                                       
                                    </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/admin/employee/view.blade.php ENDPATH**/ ?>