<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> <?php echo e($pageName); ?> <?php echo e($method); ?></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a><?php echo e($pageName); ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong><?php echo e($method); ?></strong>
                        </li>
                    </ol>
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
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->id); ?></td>
                                        <td><?php echo e(ucwords($val->type)); ?>

                                          
                                        </td>
                                        <td><?php echo e($val->booking_date); ?></td>



                                        <td ><?php echo e($val->packageName); ?>

                                        <td>INR <?php echo e($val->price); ?></td>
                                      
                                        <td style="color:red">
                                            <?php if($val->status=='Pending'): ?>
                                             <button class="btn btn-danger btn-rounded btn-outline" ><?php echo e($val->status); ?></button>
                                            <?php else: ?>
                                             <button class="btn btn-success btn-rounded btn-outline" ><?php echo e($val->status); ?></button>
                                            <?php endif; ?>
                                       
                                        
                                        <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                        <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                                    <tr>
                                                        <td colspan="8" style="color:red; text-align:center">Record Not Found.....</td>
                                                    
                                                    </tr>
                                                    <?php endif; ?>
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
<?php $__env->stopSection(); ?>



<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/seoagencyindia/public_html/healthcare/resources/views/employee/booking/list.blade.php ENDPATH**/ ?>