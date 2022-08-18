 

<?php $__env->startSection('body'); ?>  
         <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($pageName); ?> List </h5>
                            
                        </div>
                      
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                         <th width="15%">Company Name</th>
                                         <th width="15%">Product Name</th>
                                        <th width="10%">Cost </th>
                                        <th width="15%">Description </th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                       
                                        <td><?php echo e($val->companyName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        
                                         <td><?php echo e($val->cost); ?></td>
                                         <td><?php echo e($val->description); ?></td>
                                          
					
                                        <td>
                                              <?php echo Html::decode(link_to_route('hr.view.product','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'View'])); ?>   
                                    
                                       
                                    
                                    </td>
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
<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/hr/product/list.blade.php ENDPATH**/ ?>