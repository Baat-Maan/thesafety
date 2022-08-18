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
                        <form method="get" action="<?php echo e(route('employee.list.event')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-5">
                                <label class="form-label">Event</label>
                                    <div class="input-group">
                                        <input placeholder="Search Event Name" type="text" value="<?php echo e($_GET['name'] ?? ''); ?>" name="name" class="form-control form-control-sm"> <span class="input-group-append"> 
                                            <button type="submit" class="btn btn-sm btn-primary">Search! <button type="reset" class="btn btn-sm btn-warning">Reset!
                                    </button> </span></div>

                                </div>


                                
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Event Name </th>
                                        <th>Address </th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
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

                                            <td>
                                               
                                              <?php if($val->status == 0): ?>

                                              <span onClick="eventPartispate('<?php echo e($val->id); ?>')" class="label label-primary">Want to participate ?</span>
                                            <?php else: ?>
                                            <span class="label label-success">Partispated</span>
                                            <?php endif; ?>
                                        </td>

                                            
                                        
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                                    <tr>
                                                        <td colspan="7" style="color:red; text-align:center">Record Not Found.....</td>
                                                    
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

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/employee/event/list.blade.php ENDPATH**/ ?>