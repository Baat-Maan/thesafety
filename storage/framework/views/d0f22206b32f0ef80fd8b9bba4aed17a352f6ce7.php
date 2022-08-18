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
                        <form method="get" action="<?php echo e(route('admin.my.booking.mdra')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-3">
                                <label class="form-label">Appoinment Date</label>
                                    <input  type="text" style="" value="<?php echo e($_GET['date'] ?? ''); ?>" class="form-control form-control-sm" name="date" id="datepickerr" data-zdp_readonly_element="true">
                             

                                </div>
                                <div class="col-sm-5">
                                <label class="form-label">Search </label>
                                    <div class="input-group">
                                    <input placeholder="Search " type="Text" value="<?php echo e($_GET['search'] ?? ''); ?>" name="search" class="form-control form-control-sm"> 
                          
                                            </div>

                                </div>
                              
                                <div class="col-sm-3">
                                <label class="form-label">Company</label>
                                    <div class="input-group">
                                    <?php echo e(Form::select('company_id', $comapnys,$selectcomapnys, ['class'=>'form-control','placeholder'=>'Select Comapny'])); ?>

                               
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="<?php echo e(route('admin.my.booking.mdra')); ?>">
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
                                        <th>Creation Date</th>
                                        <th>Appoinment Date</th>
                                        <th>Booking For</th>
                                        <th>User Name </th>
                                        <th>Company</th>
                                        <th>Package Name </th>
                                        <th>Reschedule Reason</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->created_at); ?></td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e($val->type); ?>

                                            <?php if($val->type!='self'): ?>
                                        <br><a style="color:blue" onclick="view_dependent('<?php echo e($val->employee_id); ?>','<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#userModelDetails">click here</a>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($val->username); ?>

                                        <br><a style="color:blue" onclick="view_user('<?php echo e($val->employee_id); ?>')"; data-toggle="modal" data-target="#userModelDetails">click here</a>
                                        </td>
                                        
                                        <td><?php echo e($val->cname); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        <br><a style="color:blue" onclick="view_package('<?php echo e($val->package_id); ?>')"; data-toggle="modal" data-target="#myModalViewPackage">click here</a>
                                        </td>
                                        <td><?php echo e($val->reschedule_reason); ?></td>
                                        <td >
                                       
                                        <button tabindex="-1" data-toggle="modal"  onclick="myBookingViewDetails('<?php echo e($val->id); ?>',4)" data-target="#myCancelModelView" class="btn btn-info  " type="button">View</button>

                                        <a onclick="uploadReportBookingPackage('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#uploadReportBookingPackage" class="btn btn-warning" href="#"><i class="fa fa-upload" aria-hidden="true"></i></a>
                                      
                                           
                                       
                                        <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                        <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                        <?php endif; ?>
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







<div class="modal inmodal" id="myCancelModelView" tabindex="-1" role="dialog" aria-hidden="true">
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
      function myBookingViewDetails(id){
          //alert();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.callViewModelData').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.details.view_call_booking_mdra')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\health-live\resources\views/admin/booking/mdra.blade.php ENDPATH**/ ?>