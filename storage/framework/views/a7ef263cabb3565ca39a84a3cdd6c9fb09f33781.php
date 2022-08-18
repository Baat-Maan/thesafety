<?php $__env->startSection('body'); ?>
<?php echo e(Html::script('public/assest/datapicker/jquery-3.5.0.min.js')); ?>

<?php if(Auth::user()->is_admin == 2): ?>
<div class="wrapper wrapper-content">
<div class="row">
               
               <div class="col-lg-12">

               </div>


           </div>
           <div class="row">
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.my.booking')); ?>">
                    <div class="widget style1 blue-bg">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-address-card fa-5x"></i>
                                </div>
                                <div class="col-8 text-right">
                                    <span> Total Bookings </span>
                                    <h2 class="font-bold"><?php echo e($data['bookings']); ?></h2>
                                </div>
                            </div>
                    </div>
                </a>
                </div>
                
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.list.package')); ?>">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-book  fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Package </span>
                                <h2 class="font-bold"><?php echo e($data['packages']); ?></h2>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                <a href="<?php echo e(route('employee.list.event')); ?>">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-calendar fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Events </span>
                                <h2 class="font-bold"><?php echo e($data['event']); ?></h2>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">

                <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Transactions (Last <?php echo e(count($bookings)); ?> ) of <?php echo e($total); ?></h5>
                                    
                                </div>
                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-lg-12">
                                        <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Booking Id</th>
                                    <th>Booking For</th>
                                    <th>Schedule Date</th>
                                    <th>Package Name </th>
                                    <th>Booking Mode</th>
                                    <th>Price </th>
                                   
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$page); ?></td>
                                    <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->id); ?></td>
                                        <td><?php echo e($val->type); ?> /<?php echo e($val->booking_for_name); ?>

                                               
                                            </td>
                                        <td><?php echo e($val->booking_date); ?></td>
                                        <td><?php echo e($val->packageName); ?>

                                        </td>
                                        
                                        <td ><?php if($val->booking_mode=='DC-Visit'): ?>
                                            <?php echo e($val->booking_mode); ?>

                                            <?php else: ?>
                                            <?php echo e($val->booking_mode); ?> <br>
                                            Address : <?php echo e($val->address_home); ?>

                                            <?php endif; ?></td>
                                            
                                        <td>INR <?php echo e($val->price); ?></td>
                                  
                                    <td >
                                    <div class="input-group-prepend">
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
                                           
                                        </div>
                                     <?php if(Auth::user()->is_admin == 2): ?> 
                                      <?php if(!empty($val->report) && !empty($val->report_updated)): ?>
                                    <a class="btn btn-success" href="<?php echo e(env('APP_URL').$val->report); ?>" download><i class="fa fa-download" aria-hidden="true"> Download Report</i></a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                
                                </tbody>
                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="world-map" style="height: 300px;"></div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
                </div>
                <?php endif; ?>
                <?php if(Auth::user()->is_admin == 4): ?>
                <div class="wrapper wrapper-content">
<div class="row">
    <h1>
       <center> Welcome To <?php echo e($companyDetails->name); ?></center>
    </h1>
    </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Packages for you </h5>
                           
                        </div>
                        <div class="ibox-content">
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
                                       
                                         <td class="disc"> <span>Include Test:</span> 
                                        <?php if(!empty($val->test)): ?>
                                        <?php $__currentLoopData = explode(',',$val->test); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($tests); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                        <?php endif; ?>
                                       </td>
                                       
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
                                            <input type="hidden" value="" class="package_id_select" />
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="form-group date" style="color:green"><label>Choose Booking Date</label> <br>
                                            <input  type="text" style="height: 37px;    width: 100%;" class="booking_date" name="booking_date" id="datepickerr" data-zdp_readonly_element="true">
                                        </div></div>
                                        <?php if(Auth::user()->is_admin == 2): ?>
                                        <div class="col-sm-6">
                                            <div class="form-group" style="color:green"><label>Choose Type</label> 
                                            <?php echo e(Form::select('type', ['self'=>'Self','Dependent'=>'Dependent'],'', ['class'=>'form-control mydepended_self'])); ?>

                                        </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(Auth::user()->is_admin == 4): ?>
                                        <input type="hidden" value="self" class="mydepended_self" name="type"/>
                                         <div class="col-sm-6">
                                            <div class="form-group date" style="color:green"><label>Name</label> <br>
                                            <input  type="text" style="height: 37px;    width: 100%;" value="<?php echo e(Auth::user()->name); ?>" class="" name="booking For" disabled>
                                        </div>
                                        </div>
                                        <?php endif; ?>
                                        </div>
                                     
                                        
                                         
                                        
                                        

                                        <div class="row">
                                            <div class="col-sm-12">
                                            <div class="form-group date" style="color:green"><label>Choose Booking Mode</label> <br>
                                            <!--<?php echo e(Form::select('booking_mode', ['DC-Visit'=>'DC-Visit','Home Collection'=>'Home Collection'],'', ['class'=>'form-control booking_mode'])); ?>-->
                                            
                                            
                                             <label class="radio-inline">
    <input type="radio" id="tres_important" name="booking_mode" value="Home Collection" class="booking_mode">Home Collection</label>

    <label class="radio-inline">
    <input type="radio" id="important" name="booking_mode" value="DC-Visit" class="booking_mode">Diagnostic Center Visit</label>
                                        </div></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="home_visit" style="display:none;">
                                 <div class="form-group" style="color:green"><label> State</label> 
                                        <div class="">
                                      <input type="text" value="<?php echo e(old('state_id')); ?>" name="state_id" class="form-control state_id">
                                    <span class="" style="color:red"> <?php echo e($errors->first('state_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>City</label> 
                                        <div class="cityDropdownc">
                                     <input type="text" value="<?php echo e(old('city_id')); ?>" name="city_id" class="form-control city_id">
                                    <span class="" style="color:red"> <?php echo e($errors->first('city_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>Address</label> 
                                        <div class="">
                                    <input type="address" value="<?php echo e(old('address_home')); ?>" name="address_home" class="form-control address_home">
                                    <span class="" style="color:red"> <?php echo e($errors->first('address_home')); ?> <span>
                                      
                                            </div>
                                        </div>
                               
                                </div>
                                
                                
                                 <div class="dc_visit" style="color:green; display:none;">
                                    
                                    <div class="form-group" style="color:green"><label>State</label> 
                                        <div class="cityState">
                                        <?php echo e(Form::select('dc_state_id', $states,'', ['class'=>'form-control dc_state_id','placeholder'=>'Select State','onchange'=>'getDCCities()'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_state_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>City</label> 
                                        <div class="cityDropdowncdc">
                                   <?php echo e(Form::select('dc_city_id', [],'', ['class'=>'form-control','placeholder'=>'Select City','onchange'=>'getDc()'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_city_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>Choose Diagnostic Center</label> 
                                        <div class="cityDropdownDc">
                                   <?php echo e(Form::select('dc_id', [],'', ['class'=>'form-control dc_id','placeholder'=>'Select Diagnostic Center'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                
                                </div>
                                        

                                       <!-- <div class="form-group" style="color:green"><label>Choose State</label> -->
                                       <!-- <?php echo e(Form::select('state_id', $states,'', ['class'=>'form-control state_id','placeholder'=>'Select State','onchange'=>'getCities()'])); ?>-->
                                       <!-- </div>-->

                                       <!-- <div class="form-group" style="color:green"><label>Choose City</label> -->
                                       <!-- <div class="cityDropdownc">-->
                                       <!-- <?php echo e(Form::select('city_id', [],'', ['class'=>'form-control city_id','placeholder'=>'Select City','onchange'=>'getDc()'])); ?>-->
                                      
                                       <!--     </div>-->
                                       <!-- </div>-->
                                       <!--   <div class="form-group address_home_collection" style="color:green; display:none"><label>Address</label> -->
                                       <!-- <div class="">-->
                                       <!--<input  type="text" class="form-control address_home" name="address_home" >-->
                                      
                                       <!--     </div>-->
                                       <!-- </div>-->
                                        
                                       
                                            
                                        
                                        
                                        
                                       <!-- <div class="form-group dc_select" style="color:green"><label>Choose Dc</label> -->
                                       <!-- <div class="cityDropdownDc">-->
                                       <!-- <?php echo e(Form::select('dc_id', [],'', ['class'=>'form-control dc_id','placeholder'=>'Select Dc'])); ?>-->
                                      
                                       <!--     </div>-->
                                       <!-- </div>-->


 <div class="bookingFormPackage filesc">

                                            </div>   

                                           
                                        </div>
                                        
                                             
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <a href="javascript:void(0)" style="display:none;" class="btn btn-sm btn-primary float-right buy_now" >Save changes</a> 

                                            <button type="submit" class="btn btn-primary button_submit">Save changes</button>
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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function booking(id){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                

                                    
                                    $('.package_id_select').val(id);
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.booking.user')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);
                                        $('.button_submit').removeAttr('disabled');
                                            $('.bookingFormPackage').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
var SITEURL = '<?php echo e(URL::to('')); ?>';
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
}); 
$('body').on('click', '.buy_now', function(e){
    if(checkForm()==false){
        return false;
    }

        var form=$("#myForm");
        var product_id =  $('.package_id_select').val();
        if(product_id > 0){


            $.ajax({
                url: SITEURL + '/getPrice',
                type: 'post',
                dataType: 'json',
                data: {
                    package_id : product_id,
                    form : form.serialize(),
                }, 
                success: function (msg) {
                // alert(msg);


                                        
                            var totalAmount = msg;
                            var options = {
                            "key": "rzp_test_sRAP7AxiQDdksy",
                            "amount": (totalAmount*100), // 2000 paise = INR 20
                            "name": "Healthcare",
                            "description": "Package id : "+product_id,
                            "image": "https://www.avyukthealthcare.com/wp-content/uploads/2020/09/avyukt-healthcare-logo11.png",
                            "handler": function (response){
                            $.ajax({
                            url: SITEURL + '/paysuccess',
                            type: 'post',
                            dataType: 'json',
                            data: {
                            razorpay_payment_id: response.razorpay_payment_id , 
                            totalAmount : totalAmount ,product_id : product_id,
                            form : form.serialize(),
                            }, 
                            success: function (msg) {
                                alert('Booking Successfully...');
                            window.location.href = SITEURL + '/user/package-list';
                            }
                            });
                            },
                            "prefill": {
                            "contact": '<?=Auth::user()->mobile?>',
                            "email":   '<?=Auth::user()->email?>',
                            },
                            "theme": {
                            "color": "#528FF0"
                            }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                            e.preventDefault();
                            
                }
            });
        }

});



/*document.getElementsClass('buy_plan1').onclick = function(e){
rzp1.open();
e.preventDefault();
}*/
</script>

    </div>
                <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/employee/home.blade.php ENDPATH**/ ?>