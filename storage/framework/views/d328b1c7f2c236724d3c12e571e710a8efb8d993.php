<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">
    <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Products  </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                          
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th width="13%">Product Code</th>
                                        <th width="20%">Product Name </th>
                                        <th width="10%">Quantity </th>
                                          <th>Total Amount</th>
                                        <th>Advance Amount</th>
                                        <th>Remaining Amount</th>
                                        <th width="20%">Description </th>
                                    </tr>   
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td ><?php echo e($val->projectCode); ?></td>
                                        
                                        <td ><?php echo e($val->projectName); ?></td>
                                        <td>
                                            <?php echo e($val->quantity); ?>

                                       </td>
                                        <td><?php echo e($val->total_payment); ?></td>
                                        <td><?php echo e($val->advance_payment); ?></td>
                                        <td><?php echo e($val->remaining_payment); ?></td>
                                        <td > <?php echo e($val->description); ?></td>
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--tr>
                                        <td colspan="9"></td>
                                       
                                    </tr-->
                                    
                                    </tbody>
                                </table>
                                <?php echo e($result->appends($_GET)->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/employee/home.blade.php ENDPATH**/ ?>