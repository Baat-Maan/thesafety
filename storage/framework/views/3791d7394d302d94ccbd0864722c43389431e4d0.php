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
                        <form method="get" action="<?php echo e(route('hr.list.event')); ?>" enctype="multipart/form-data">
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
                                        <th>Created</th>
                                        <th>Event Name </th>
                                        <th>Address </th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th width="500">Description</th>
                                        <th>Status</th>
                                        <th>Participated</th>
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
                                        <td>
                                        <?php echo Html::decode(link_to_route('hr.edit.event','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('hr.list.view','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-warning','title'=>'View List'])); ?>

                                        <?php echo Html::decode(link_to_route('hr.delete.event','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/hr/event/list.blade.php ENDPATH**/ ?>