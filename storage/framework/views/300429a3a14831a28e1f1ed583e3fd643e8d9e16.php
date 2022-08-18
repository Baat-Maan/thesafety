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
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="<?php echo e(route('admin.my.booking.cancel')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-3">
                                <label class="form-label">Booking Date</label>
                                    <div class="input-group">
                                        <input placeholder="Search Date" type="date" value="<?php echo e($_GET['date'] ?? ''); ?>" name="date" class="form-control form-control-sm"> <span class="input-group-append"> 
                                </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label">Package</label>
                                    <div class="input-group">
                                    <?php echo e(Form::select('package_id', $Packages,$selectPackages, ['class'=>'form-control','placeholder'=>'Select Package'])); ?>

                               
                                            </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label">State</label>
                                    <div class="input-group">
                                    <?php echo e(Form::select('state_id', $states,$selectState, ['class'=>'form-control','placeholder'=>'Select State'])); ?>

                               
                                            </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label">Company</label>
                                    <div class="input-group">
                                    <?php echo e(Form::select('company_id', $comapnys,$selectcomapnys, ['class'=>'form-control','placeholder'=>'Select Comapny'])); ?>

                                    <span>
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="<?php echo e(route('admin.my.booking.cancel')); ?>">
                                                <button type="button" class="btn btn-sm btn-warning">Reset!
                                    </button></a> </span></div>

                                </div>
                                


                                
                            </div>
                            </form>
                            <div class="table-responsive">
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
                                      
                                        <th style="text-align:left">Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->created_at); ?></td>
                                        <td><?php echo e($val->type); ?>

                                            <?php if($val->type!='self'): ?>
                                        <br><a style="color:blue" onclick="view_dependent('<?php echo e($val->employee_id); ?>','<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#userModelDetails">click here</a>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($val->username); ?>

                                        <br><a style="color:blue" onclick="view_user('<?php echo e($val->employee_id); ?>')"; data-toggle="modal" data-target="#userModelDetails">click here</a>
                                        </td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e($val->cname); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        <br><a style="color:blue" onclick="view_package('<?php echo e($val->package_id); ?>')"; data-toggle="modal" data-target="#myModalViewPackage">click here</a>
                                        </td>
                                      
                                        <td >
                                        <td style="text-align:left"><?php echo e($val->cancel_reason); ?></td>
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



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/t5scjne8ghxo/public_html/healthcare/resources/views/admin/booking/cancel.blade.php ENDPATH**/ ?>