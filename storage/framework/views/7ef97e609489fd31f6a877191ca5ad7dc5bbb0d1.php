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
                            
                        </div>
                        <div class="ibox-content">
                            
                          
        
        
                        <form method="get" action="<?php echo e(route('hr.mis')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                            
                                
                                
                                <div class="col-sm-3">
                                <label class="form-label">Status</label>
                                    <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value=""> Select Status</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Pending' ) { echo "selected"; } ?> value="Pending"> Schedule Call</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Show' ) { echo "selected"; } ?> value="Show"> Show / No Show</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA' ) { echo "selected"; } ?> value="MDRA"> MDRA</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Approve' ) { echo "selected"; } ?> value="Approve"> Partial Process Done  </option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Cancel' ) { echo "selected"; } ?> value="Cancel"> Cancel </option>

                                    </select>
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="<?php echo e(route('admin.mis')); ?>">
                                                <button type="button" class="btn btn-sm btn-warning">Reset!
                                    </button></a> </span></div>


                                </div>
                                 <?php
                           
                            if(isset($selectStatus) && $selectStatus!='all' &&   $selectStatus!='Status' && $selectStatus!=''  ) {  $status=$selectStatus; 
                            }else {  $status="all";
                            }
                             //echo $status="all";
                             
                             ?>
       <div class="col-sm-3">          
        <label class="form-label">Export Excel</label>
                                    <div class="input-group">
<a href="export/<?php echo $status; ?>" ><button type="button" class="btn btn-sm btn-info">Export To Excel
                                    </button></a>
 </div>
                                 </div>
                            </div>
                            </form>
                           
                            
                            <div class="table-responsive">
                                <h1>Total Record : <?php echo e($total); ?></h1>
                                <table class="table table-striped" id="table_id">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Booking Id</th>
                                        <th>Creation Date</th>
                                        <th>Appoinment Date</th>
                                        <th>Booking For</th>
                                        <th>User Name </th>
                                        <th>Package Name </th>
                                      
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <?php if(count($result) > 0): ?>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->id); ?>

                                        </td>
                                        <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e(ucwords($val->type)); ?>

                                           
                                        </td>
                                        <td><?php echo e($val->username); ?>

                                        </td>
                                        
                                        <td><?php echo e($val->packageName); ?>

                                        </td>
                                     
                                        <td >
                                            <?php if($val->status=='Approve'): ?>
                                            <button  class="btn btn-white" type="button" aria-expanded="false">Partial Process Done</button>
                                            <?php elseif($val->status=='Pending'): ?>
                                            <button  class="btn btn-white" type="button" aria-expanded="false">Schedule Call</button>
                                            <?php elseif($val->status=='Show'): ?>
                                            <button  class="btn btn-white" type="button" aria-expanded="false">Show / No Show</button>
                                            
                                            <?php else: ?> 
                                            <button  class="btn btn-white" type="button" aria-expanded="false"><?php echo e($val->status); ?></button>
                                            <?php endif; ?>
                                     

                                         
                                   
                                    
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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



<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/seoagencyindia/public_html/healthcare/resources/views/hr/booking/mis.blade.php ENDPATH**/ ?>