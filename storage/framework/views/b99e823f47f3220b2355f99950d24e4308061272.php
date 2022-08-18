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
                                        <th>Created</th>
                                        <th>Event Name </th>
                                        <th>Address </th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th width="500">Description</th>
                                        <th>Status</th>
                                        <th>Participated</th>                                    </tr>
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
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                        <td><?php echo e($val->from_date); ?></td>
                                        <td><?php echo e($val->from_to); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                        <td class="text-center">
                                            <?php if($val->from_date > $date  &&  $val->from_to > $date): ?>
                                            <span class="label label-warning">Comming Soon</span>
                                            <?php elseif($val->from_to >= $date): ?>
                                            <span class="label label-primary">Active</span>
                                            <?php else: ?>
                                            <span class="label label-danger">Expire</span>
                                            <?php endif; ?>
                                            </td>
                                            <td class="">
                                            <span class="label label-info"><?php echo e($val->total); ?></span>
                                            </td>
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/admin/event/company_list.blade.php ENDPATH**/ ?>