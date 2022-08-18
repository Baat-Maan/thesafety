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
                        <!--<form method="get" action="<?php echo e(route('hr.list.employee')); ?>" enctype="multipart/form-data">-->
                        <!--    <?php echo csrf_field(); ?>-->
                        <!--    <div class="row">-->
                            
                               
                          

                        <!--        <div class="col-sm-4">-->
                        <!--        <label class="form-label">Name</label>-->
                        <!--            <div class="input-group">-->
                        <!--                <input placeholder="Search Name" type="text" value="<?php echo e($_GET['name'] ?? ''); ?>" name="name" class="form-control form-control-sm"> <span class="input-group-append"> -->
                        <!--        </div>-->

                        <!--        </div>-->
                        <!--        <div class="col-sm-4">-->
                        <!--        <label class="form-label">Email</label>-->
                        <!--            <div class="input-group">-->
                        <!--                <input placeholder="Search Email" type="text" value="<?php echo e($_GET['email'] ?? ''); ?>" name="email" class="form-control form-control-sm"> <span class="input-group-append"> -->
                        <!--        </div>-->

                        <!--        </div>-->
                        <!--        <div class="col-sm-4">-->
                        <!--        <label class="form-label">State</label>-->
                        <!--            <div class="input-group">-->
                        <!--            <?php echo e(Form::select('state_id', $states,$selectState, ['class'=>'form-control','placeholder'=>'Select State'])); ?>-->
                        <!--            <button type="submit" class="btn btn-sm btn-primary">Search! <button type="reset" class="btn btn-sm btn-warning">Reset!-->
                        <!--            </button> </span>-->
                        <!--                    </div>-->

                        <!--        </div>-->
                                


                                
                        <!--    </div>-->
                        <!--    </form>-->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                      
                                        <th> Name </th>
                                        <th>Employee Code</th>
                                        <th> Mobile No. </th>
                                        <th> Email </th>
                                       
                                        <th>Gender</th>
                                        <th>Designation</th>
                                        
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                         <td><?php echo e($key + 1); ?></td>
                                       
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->employee_code); ?></td>
                                        <td><?php echo e($val->mobile); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        
                                        <td><?php echo e($val->gender); ?></td>
                                        <td><?php echo e($val->designation); ?></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/hr/employee/list.blade.php ENDPATH**/ ?>