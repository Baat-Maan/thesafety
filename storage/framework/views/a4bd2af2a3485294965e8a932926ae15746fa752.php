<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> Diagnostic Centers List</h2>
                   
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Diagnostic Centers List </h5>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                        
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Diagnostic Center Name</th>
                                        <th>Email</th>
                                        <th>
                                            Alternate Email
                                        </th>
                                        <th>Phone</th>
                                        <th>
                                            Alternate Phone
                                        </th>
                                        <th>Address</th>

                                        <th>City Name </th>
                                        <th>State Name </th>
                                        
                                        <th>Contact Person Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        <td><?php echo e($val->alternate_email); ?></td>
                                        <td><?php echo e($val->phone); ?></td>
                                        <td><?php echo e($val->alternate_phone); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                        <td><?php echo e($val->city); ?></td>
                                        <td><?php echo e($val->state); ?></td>
                                        <td>
                                        <!--<?php echo Html::decode(link_to_route('admin.edit.dc','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>-->
                                        <!--<?php echo Html::decode(link_to_route('admin.delete.dc','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>-->
                                    <?php echo e($val->contect_person); ?>

                                    </td>
                                     <td>
							<?php if($val->is_active	== 1): ?>
								<span class="label label-success" >Activated </span>
							<?php else: ?>
								<span class="label label-warning" >Deactivated </span>
							<?php endif; ?>
						</td>
						<td>
						    <?php if($val->is_active == 1): ?>
							
								<?php echo Html::decode(link_to_route('admin.status.dc','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('admin.status.dc','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate'])); ?>

							<?php endif; ?> 
						</td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--tr>
                                        <td colspan="9"></td>
                                       
                                    </tr-->
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/admin/company/view.blade.php ENDPATH**/ ?>