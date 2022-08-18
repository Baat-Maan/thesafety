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
                        <?php echo e(Form::open(['route'=>['admin.update.coupon',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="id">
                         <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Type*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('coupon_type', ['percent'=>'Percent','date'=>'Date Wise'],$result->coupon_type, ['class'=>'form-control coupon_type','onchange'=>'changeCouponType()'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('coupon_type')); ?> <span>
                                    </div>
                                   
                              
                              
                                </div>
                             
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label">Coupon Name*</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', $result->name,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                
                                <label class="col-sm-2 col-form-label"> Coupon Code*</label>

                                    <div class="col-sm-4"> <?php echo Form::text('code', $result->code,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('code')); ?> <span>
                                </div>

                                </div>
                                
                                 <div class="form-group  row percent_div">
                                    
                                <label class="col-sm-2 col-form-label">Percent(%)</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::number('percent', $result->percent,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('percent')); ?> <span>
                                </div>
                                
                               

                                </div>
                                
                                 <div class="form-group  row date_div" style="display:none;">
                                       
                                <label class="col-sm-2 col-form-label">Amount</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::number('amount', $result->amount,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('amount')); ?> <span>
                                </div> 
                                <label class="col-sm-2 col-form-label">Date</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::date('date',$result->date,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('date')); ?> <span>
                                </div>
                                
                               

                                </div>

                      
                                  
                                    <div class="hr-line-dashed"></div>





                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
        
        <script>
        $( document ).ready(function() {
    changeCouponType();
});
   function changeCouponType(){
      
       var coupon_type = $('.coupon_type').val();
       if(coupon_type == 'percent'){
           $('.percent_div').show();
            $('.date_div').hide();
       }else if(coupon_type == 'date'){
            $('.percent_div').hide();
            $('.date_div').show();
       }
       
   }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/coupon/edit.blade.php ENDPATH**/ ?>