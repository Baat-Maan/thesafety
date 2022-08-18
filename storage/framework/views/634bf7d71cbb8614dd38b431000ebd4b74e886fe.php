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
                        <form method="get" action="<?php echo e(route('admin.list.company')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                                <div class="col-sm-2 m-b-xs">
                                <label class="form-label">Select State</label>
                                <?php echo e(Form::select('state', $states,$selectState, ['class'=>'form-control-sm form-control input-s-sm inline','placeholder'=>'Select State'])); ?>

                               
                                </div>
                                
                                <div class="col-sm-3">
                                <label class="form-label">Company</label>
                                    <div class="input-group">
                                        <input placeholder="Search Company" type="text" value="<?php echo e($_GET['company'] ?? ''); ?>" name="company" class="form-control form-control-sm"></div>

                                </div>


                                <div class="col-sm-3">
                                <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <input placeholder="Search Email" type="text" value="<?php echo e($_GET['email'] ?? ''); ?>" name="email" class="form-control form-control-sm"> <span class="input-group-append"> 
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
                                        <th>Image </th>
                                        <th>Company Name </th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><img src="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" height="50px" width="50px"/></td>
                                        <td><?php echo e($val->company); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        <td><?php echo e($val->country); ?></td>
                                        <td><?php echo e($val->stateName); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                        <td>
                                        <?php echo Html::decode(link_to_route('admin.edit.company','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.company','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\healthcare\resources\views/admin/company/list.blade.php ENDPATH**/ ?>