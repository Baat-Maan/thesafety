<?php $__env->startSection('body'); ?>
<style>
    div#table_id_wrapper a.btn.btn-warning {
    padding: 0px 5px;
}
</style>
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
                           
  <?php echo Form::open(['role' => 'form','route' => "hr.save.vendor",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>


                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Vendor Name*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('name', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Email*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('email', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Password*</label>

                                    <div class="col-sm-4"><input type="password" value="" name="password" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Logo</label>

                                <div class="col-sm-4"><input type="file" name="image" class="form-control">
                              </div>
                                </div>
                             
     
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('address', null, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('address')); ?> <span>

                                    </div>
                                    
                                    
                                    <label class="col-sm-2 col-form-label">City</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('city','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('city')); ?> <span>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">State</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('state','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('state')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Pin Code</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('pincode','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('pincode')); ?> <span>

                                    </div>
                                </div>
      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Contact Person Name*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('contact_person_name', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_person_name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Contact Person Mobile*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::number('contact_person_mobile', '',['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_person_mobile')); ?> <span>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label"> Contact Person Email</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('contact_person_email', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_person_email')); ?> <span>
                                </div>
                                
                                </div>
                                
                             
                                

                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

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
                                        <th>Logo </th>
                                        <th width="10%">Vendor Name </th>
                                        <th width="10%">Email </th>
                                         
                                        <th width="10%">Address</th>
                                        <th width="5%">City</th>
                                        <th width="5%">State</th>
                                        <th width="5%">Pincode</th>
                                       
                                        <th width="8%">Contact Person Name</th>
                                        <th width="5%">Contact Person Mobile</th>
                                        
                                        <th width="10%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <td><?php echo e($key+ 1); ?></td>
                                        <td><img src="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" height="50px" width="50px"/></td>
                                        <td><?php echo e($val->company); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        
                                        <td><?php echo e($val->address); ?></td>
                                        <td><?php echo e($val->city); ?></td>
                                        <td><?php echo e($val->state); ?></td>
                                        <td><?php echo e($val->pincode); ?></td>
                                        
                                         <td><?php echo e($val->contact_person_name); ?></td>
                                         
                                        <td ><?php echo e($val->contact_person_mobile); ?>

                                           </td>
                                           
                                        
                                             <td>
							<?php if($val->status	== 1): ?>
								<span class="label label-success" >Activated </span>
							<?php else: ?>
								<span class="label label-warning" >Deactivated </span>
							<?php endif; ?>
						</td>
					
					
                                        <td>
                                            <?php if($val->status == 1): ?>
							
								<?php echo Html::decode(link_to_route('hr.status.vendor','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate' ,'onclick'=>'return changeStatus();'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('hr.status.vendor','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate','onclick'=>'return changeStatus();'])); ?>

							<?php endif; ?> 
                                       
 <?php echo Html::decode(link_to_route('hr.edit.vendor','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                       
                                        <?php echo Html::decode(link_to_route('hr.delete.vendor','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-warning','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/hr/vendor/add.blade.php ENDPATH**/ ?>