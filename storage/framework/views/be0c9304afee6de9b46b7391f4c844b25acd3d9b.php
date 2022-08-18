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
                        <form method="POST" action="<?php echo e(route('admin.save.coupon')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                             <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Type*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('coupon_type', ['percent'=>'Percent','date'=>'Date Wise'],'', ['class'=>'form-control coupon_type','onchange'=>'changeCouponType()'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('coupon_type')); ?> <span>
                                    </div>
                                   
                              
                              
                                </div>
                             
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label">Coupon Name*</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                
                                <label class="col-sm-2 col-form-label"> Coupon Code*</label>

                                    <div class="col-sm-4"> <?php echo Form::text('code', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('code')); ?> <span>
                                </div>

                                </div>
                                
                                 <div class="form-group  row percent_div">
                                    
                                <label class="col-sm-2 col-form-label">Percent(%)</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::number('percent', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('percent')); ?> <span>
                                </div>
                                
                               

                                </div>
                                
                                 <div class="form-group  row date_div" style="display:none;">
                                       
                                <label class="col-sm-2 col-form-label">Amount</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::number('amount', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('amount')); ?> <span>
                                </div> 
                                <label class="col-sm-2 col-form-label">Date</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::date('date', '',['class' => 'form-control']); ?>

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
                            <h5><?php echo e($pageName); ?> List </h5>
                            
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th width="5%">#</th>
                                        <th width="10%">Coupon Name </th>
                                          <th width="10%">Coupon Code </th>
                                            <th width="10%">Coupon Type </th>
                                             <th width="10%">Percent(%) </th>
                                              <th width="10%">Amount </th>
                                               <th width="10%">Expiry Date </th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <td><?php echo e($key+ 1); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->code); ?></td>
                                        <td>
                                            <?php if($val->coupon_type == 'percent'): ?>
                                             Percent
                                            <?php else: ?>
                                            Date Wise
                                            <?php endif; ?>
                                            </td>
                                            <td><?php echo e($val->percent); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                            <td><?php echo e($val->date); ?></td>
                                        
					
                                        <td>
                                         
                                        <?php echo Html::decode(link_to_route('admin.edit.coupon','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                         <?php echo Html::decode(link_to_route('admin.delete.coupon','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-warning','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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
<script>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/coupon/add.blade.php ENDPATH**/ ?>