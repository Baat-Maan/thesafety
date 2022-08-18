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
                        <form method="get" action="<?php echo e(route('employee.list.package')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-5">
                                <label class="form-label">Package</label>
                                    <div class="input-group">
                                        <input placeholder="Search Package Name" type="text" value="<?php echo e($_GET['name'] ?? ''); ?>" name="name" class="form-control form-control-sm"> <span class="input-group-append"> 
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
                                        
                                        
                                        <th>Package Name </th>
                                        <th>Price </th>
                                      
                                        <th width="500px">Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        
                                        <td><?php echo e($val->name); ?></td>
                                        <td>INR <?php echo e($val->prie); ?></td>
                                       
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
                                          
                                        <button class="btn btn-sm btn-info" onclick="view_package('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalViewPackage">View</button>                             
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="8" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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



<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\health-live\resources\views/hr/package/list.blade.php ENDPATH**/ ?>