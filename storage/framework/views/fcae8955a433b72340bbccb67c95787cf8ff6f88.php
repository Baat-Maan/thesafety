<?php $__env->startSection('body'); ?>
<?php echo e(Html::script('public/assest/datapicker/jquery-3.5.0.min.js')); ?>



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
                           
                            <div class="table-responsive custompackage"> 
                                <table class="table table-striped" style="
    font-size: 12px;
">
                                  <!---Thead  <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Package Name </th>
                                        <th>Price </th>
                                        
                                        <th width="350px">Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead> ----->
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><span>Package Name:</span> <?php echo e($val->name); ?></td>
                                        <td><span>Price:</span>: INR <?php echo e($val->prie); ?></td>
                                       
                                        <td class="disc"><span>Description:</span> <?php echo e($val->description); ?></td>
                                       
                                        <td><span>Action:</span> 
                                           
                                            
                                        <button class="btn-primary" onclick="booking('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalBooking">Book Now</button>
                                       
                                        <button class="btn-info" onclick="view_package('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalViewPackage">View</button>                             
                                    </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                                    <tr>
                                                        <td colspan="8" style="color:red; text-align:center">Record Not Found.....</td>
                                                    
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







<div class="modal inmodal" id="myModalBooking" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Booking Package</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['employee.booking.package'],'class'=>'classname','id'=>'myForm','files'=>'true','onsubmit'=>'return checkForm()'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body ">
                                            
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="form-group date" style="color:green"><label>Choose Booking Date</label> <br>
                                            <input  type="text" style="height: 37px;    width: 100%;" class="" name="booking_date" id="datepickerr" data-zdp_readonly_element="true">
</div></div>
<div class="col-sm-6">
                                            <div class="form-group" style="color:green"><label>Choose Type</label> 
                                            <?php echo e(Form::select('type', ['self'=>'Self','Dependent'=>'Dependent'],'', ['class'=>'form-control mydepended_self'])); ?>

                                        </div>
                                        </div>
                                        </div>
                                     
                                        
                                         <div class="form-group dependend_div" style="color:green; display:none;"><label>Dependents</label> 
                                         
                                         
                                         <?php if(count($dependentsMy) > 0): ?>
                                            <?php $__currentLoopData = $dependentsMy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="i-checks"><label> <input checked type="checkbox" value="<?php echo e($key); ?>" name="selectDependent[]"> <i></i> <?php echo e($val); ?> </label></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php endif; ?>
                                         
                                         
                                        
                                        
                                        </div>
                                        

                                        <div class="form-group" style="color:green"><label>Choose State</label> 
                                        <?php echo e(Form::select('state_id', $states,'', ['class'=>'form-control state_id','placeholder'=>'Select State','onchange'=>'getCities()'])); ?>

                                        </div>

                                        <div class="form-group" style="color:green"><label>Choose City</label> 
                                        <div class="cityDropdownc">
                                        <?php echo e(Form::select('city_id', [],'', ['class'=>'form-control city_id','placeholder'=>'Select City','onchange'=>'getDc()'])); ?>

                                      
                                            </div>
                                        </div>
                                        <div class="form-group" style="color:green"><label>Choose Dc</label> 
                                        <div class="cityDropdownDc">
                                        <?php echo e(Form::select('dc_id', [],'', ['class'=>'form-control dc_id','placeholder'=>'Select Dc'])); ?>

                                      
                                            </div>
                                        </div>




                                            <div class="bookingFormPackage filesc">

                                            </div>     
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>       
                                    </div>
                                </div>
                            </div>



                            <?php echo e(Html::script('public/assest/datapicker/zebra_datepicker.min.js')); ?>

    <?php echo e(Html::script('public/assest/datapicker/zebra_pin.min.js')); ?>


    
    <script>
 $('#datepickerr').Zebra_DatePicker({
    direction: true,
						disabled_dates: [
								<?=$dissableDate?>
								'* * * 0,7'
								
							  ],
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\health\resources\views/employee/package/list.blade.php ENDPATH**/ ?>