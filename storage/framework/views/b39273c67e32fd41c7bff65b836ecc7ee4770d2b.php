<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo e($method); ?>  <?php echo e($pageName); ?></h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($method); ?>  <?php echo e($pageName); ?></h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('admin.save.assignproduct')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    
                                   
                                   
                                    <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Vendor*</label>

                                    <div class="col-sm-4"> 
                                    <?php echo e(Form::select('employee_id', $employeess,'', ['class'=>'form-control','placeholder'=>'Select Vendor'])); ?>

                                  <span class="" style="color:red"> <?php echo e($errors->first('employee_id')); ?> <span>
                                    
                                </div>
                                <label class="col-sm-2 col-form-label">Select Product* </label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('product_id', $projectAll,'', ['class'=>'form-control product_id','placeholder'=>'Select Product','onchange'=>'getPrice();'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('product_id')); ?> <span>
                                    </div>
                                </div>
                                   
                               
                                    <?php echo Form::hidden('price', '', ['class'=>'form-control price']); ?>

                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Quantity*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('quantity', '', ['class'=>'form-control quantity','onKeyUp'=>"totalAmountKeyPress()"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('quantity')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Total Amount</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('total_payment', '', ['class'=>'form-control total_payment','disabled']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('total_payment')); ?> <span>

                                    </div>
                                    
                                  
                                </div> 
                                    
                                        <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Advance Amount</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('advance_payment', '', ['class'=>'form-control advance_payment','onKeyUp'=>"advancePaymentKeyPress()"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('quanadvance_paymenttity')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Remaining Amount</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('remaining_payment', '', ['class'=>'form-control remaining_payment','disabled']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('remaining_payment')); ?> <span>

                                    </div>
                                    
                                  
                                </div> 
                                    
                                      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    
                                  
                                </div> 
                                   
                                      <!--<div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10">
                                    <?php echo e(Form::file('image',['class'=>'form-control'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('image')); ?> <span>
                                </div>
                                  
                                </div>--> 
                                    <div class="hr-line-dashed"></div>

                                
                              
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
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
                            <h5>List <?php echo e($pageName); ?>  </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="<?php echo e(route('admin.new.assignproduct')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                          
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Employee  Name</th>

                                        <th>Project Name </th>
                                        <th>Quantity</th>
                                        <th>Total Amount</th>
                                        <th>Advance Amount</th>
                                        <th>Remaining Amount</th>
                                        <th>Description </th>
                                       
                                    </tr>   
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td>
                                            
                                            <?php echo e($val->vendorName); ?>

                                            
                                        </td>
                                        <td><?php echo e($val->productName); ?></td>
                                        <td><?php echo e($val->quantity); ?></td>
                                        <td><?php echo e($val->total_payment); ?></td>
                                        <td><?php echo e($val->advance_payment); ?></td>
                                        <td><?php echo e($val->remaining_payment); ?></td>
                                        <td><?php echo e($val->description); ?></td>
                                       
                                        
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
<script>
    function getPrice(){
        var product_id = $('.product_id').val();
         $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	 $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.getProductPrice")); ?>',
			type		:	'post',
			data		:	{'product_id':product_id},
			success		:	function(response){ 
				$('.price' ).val(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
    }
    
    function totalAmountKeyPress() {
        var price = $(".price").val();
        var quantity = $('.quantity').val();
        if(price=='NaN' || price==''){
         price = 0;
     }
     if(quantity=='NaN' || quantity==''){
         quantity = 0;
     }
     
     var totalPayment = parseFloat(price) * parseFloat(quantity);
     $('.total_payment').val(totalPayment);
    }
    
    function advancePaymentKeyPress(){
        var total_payment = $(".total_payment").val();
        var advance_payment = $('.advance_payment').val();
        if(total_payment=='NaN' || total_payment==''){
         total_payment = 0;
     }
     if(advance_payment=='NaN' || advance_payment==''){
         advance_payment = 0;
     }
     
     var remainingPayment = parseFloat(total_payment) - parseFloat(advance_payment);
     $('.remaining_payment').val(remainingPayment);
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/productAssign/add.blade.php ENDPATH**/ ?>