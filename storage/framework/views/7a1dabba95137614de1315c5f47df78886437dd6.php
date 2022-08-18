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
                      
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Unique Id</th>
                                        <th>Date</th>
                                        <th>Booking For</th>
                                        <th>Schedule Date</th>
                                        <th>Package Name </th>
                                         <th>Booking Mode</th>
                                        <th>Price </th>
                                       
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($uniqueCode); ?></td>
                                        <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e(ucwords($val->type)); ?> / <?php echo e($val->booking_for_name); ?>

                                          
                                        </td>
                                        <td><?php echo e($val->booking_date); ?></td>



                                        <td ><?php echo e($val->packageName); ?></td>
                                        <td ><?php if($val->booking_mode=='DC-Visit'): ?>
                                            <?php echo e($val->booking_mode); ?>

                                            <?php else: ?>
                                            <?php echo e($val->booking_mode); ?> <br>
                                            Address : <?php echo e($val->address_home); ?>

                                            <?php endif; ?></td>
                                        <td>INR <?php echo e($val->price); ?></td>
                                      
                                        <td style="color:red">
                                           <?php if($val->status=='Pending'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">To Be Contacted</button>
                                        <?php elseif($val->status=='Show'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Confirmed</button>
                                        <?php elseif($val->status=='MDRA'): ?>
                                        <button  class="btn btn-info" type="button" style="cursor: default;">Medical Done Report Awaited</button>
                                        <?php elseif($val->status=='Approve'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        <?php elseif($val->status=='Cancel'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Cancel</button>
                                        <?php elseif($val->status=='Partial Process Done'): ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        <?php else: ?>
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Closed</button>
                                        
                                        <?php endif; ?>
                                       
                                       <?php if(!empty($val->reschedule_reason)): ?>
                                       <button tabindex="-1" data-toggle="modal"  onclick="myBookingViewDetails('<?php echo e($val->id); ?>',4)" data-target="#myCancelModelView" class="btn btn-info" type="button">Rescheduled</button>
                                       <?php endif; ?>
                                       <?php if(Auth::user()->is_admin == 2): ?> 
                                            <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                            <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        <?php endif; ?>  
                                            
                                            
                                              <?php if(!empty($val->report) && !empty($val->report_updated)  && $val->is_ratting==0): ?>
                                            <button  onclick="feedback('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalFeedback" class="btn btn-info" type="button">Feedback</button>
    
    
                                            <?php endif; ?>
                                        

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





<div class="modal inmodal" id="myModalFeedback" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Feedback</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['employee.booking.feedback'],'class'=>'classname','id'=>'myForm','files'=>'true','onsubmit'=>'return checkFormFeedback()'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <?php 
                                        $feedbacks = ['Excellent','Very Good','Good','Fair','Poor']?>
                                        <div class="modal-body ">
                                            <input type="hidden" value="" class="booking_id" name="booking_id"/>
                                      

                                        <div class="row">
                                            <table width="100%" class="table table-striped">
                                                <tr>
                                                    <th>
                                                        Feedback Form Please share your experience during the medical examination process as below
                                                    </th>
                                                    <th>
                                                        Excellent
                                                    </th>
                                                    <th>
                                                       Very Good
                                                    </th>
                                                    <th>
                                                        Good
                                                    </th>
                                                    <th>
                                                        Fair
                                                    </th><th>
                                                       Poor
                                                    </th>
                                                    
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        Overall Experience With the medical examination process
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="overall_expeirence[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                       Medical Facility :(Ease of Locating, Set up, instruments, cleanliness, process

followed)
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="medical_facility[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                      Reception at Clinic / Hospital
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="reception[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Behavior and cooperation of staff at reception
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="behavior_of_staff[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Courtesy and politeness of the doctor/medical staff for Technical Know

how, Behavior, Appearance etc

                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="courtesy_and_politeness[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Experience with the waiting time before the test began

                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="radio" name="waiting_time[]" 
                                
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                            </table>
                                            
                                    </div>
                                    
                                    <div class="row">
                                            <table width="100%">
                                               
                                            </table>
                                            
                                    </div>
                                        
                                      
                                        
                                    <!--    <div class="row">-->
                                            
                                    <!--        <div class="col-sm-12">-->
                                    <!--        <div class="form-group date" style="color:green"><label>Ratting</label> <br>-->
                                    <!--        <?php echo e(Form::select('ratting', ['5'=>'5 * ','4'=>'4 * ','3'=>'3 * ','2'=>'2 * ','1'=>'1 * '],'', ['class'=>'form-control ratting'])); ?>-->
                                    <!--    </div>-->
                                    <!--        <div class="col-sm-12">-->
                                    <!--        <div class="form-group date" style="color:green"><label>Feedback</label> <br>-->
                                    <!--        <textarea class="form-control feedback" name="feedback"></textarea>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                        
                                    <!--    </div>  </div>-->
                                        
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <a href="javascript:void(0)" style="display:none;" class="btn btn-sm btn-primary float-right buy_now" >Save changes</a> 

                                            <button type="submit" class="btn btn-primary button_submit">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>       
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
                                        url:"<?php echo e(route('ajaxRequest.details.view_call_booking_reschedule')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/employee/booking/list.blade.php ENDPATH**/ ?>