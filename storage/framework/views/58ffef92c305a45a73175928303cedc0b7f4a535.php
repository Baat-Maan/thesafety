<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">
    <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Alloted Projects  </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="<?php echo e(route('admin.new.assignproject')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                          
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th width="10%">#</th>
                                        <th width="20%">Project Name </th>
                                        <th width="40%">Description </th>
                                        <th width="10%">Document</th>
                                        <th width="10%">Action</th>
                                    </tr>   
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td ><?php echo e(++$page); ?></td>
                                        
                                        <td ><?php echo e($val->projectName); ?></td>
                                        <td > <?php echo e(substr($val->description,0,100)); ?></td>
                                        <td>
                                            <?php if(!empty($val->image)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                     
                                            <button tabindex="-1" data-toggle="modal"  onclick="myProjectViewDetails('<?php echo e($val->id); ?>','1')" data-target="#myProjectModelView" class="btn btn-info  " type="button">View</button>

                                        </td>
                                       
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Project Status List</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Date</th>
                                        <th> Project Name </th>
                                        <th>Daily Status </th>
                                        <th>Admin Feedback</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $resultStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      
                                        <td><?php echo e($val->date); ?></td>
                                        <td><?php echo e($val->projectName); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                         <td><?php echo e($val->feedback); ?></td>
                                        <td><?php echo e($val->status); ?></td>
                                       
                                        <td>
                                      
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($resultStatus)==0): ?>
                                    <tr>
                                        <td colspan="6" style="color:red; text-align:center">Record Not Found.....</td>
                                       
                                    </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
</div>
<div class="modal inmodal" id="myProjectModelView" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">View Details</h4>
                                        </div>
                                        
                                        <div class="modal-body callViewModelData">
                                          
                                     
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit"  class="btn btn-primary">Save changes</button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            </div>

                            <script>
      function myProjectViewDetails(id){
          //alert();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.callViewModelData').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.details.project')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/employee/home.blade.php ENDPATH**/ ?>