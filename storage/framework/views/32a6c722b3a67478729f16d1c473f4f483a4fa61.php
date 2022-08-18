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
                           
  <?php echo Form::open(['role' => 'form','route' => "admin.save.company",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>


                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Company Name*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('company', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('company')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('email', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

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
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Alternate Contact Person Name</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('alter_contact_person_name', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('alter_contact_person_name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Alternate Contact Person Mobile</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::number('alter_contact_person_mobile', '',['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('alter_contact_person_mobile')); ?> <span>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Website Url</label>

                                    
                                  
                                    <div class="col-sm-4">
                                      <?php echo Form::text('website_url','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('website_url')); ?> <span>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <h4>Company GST Details</h4>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">GST Number*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('gst_number', '',['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_number')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">GST Name*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('gst_name', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_name')); ?> <span>

                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">GST State</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('gst_state','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_state')); ?> <span>

                                    </div>
                                    
                                    
                                    <label class="col-sm-2 col-form-label">GST City</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('gst_city','',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_city')); ?> <span>

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
                                        <th width="10%">Company Name </th>
                                         <th width="5%">City</th>
                                        <th width="10%">Address</th>
                                       
                                        <th width="8%">Contact Person Name</th>
                                        <th width="5%">Contact Person Mobile</th>
                                         <th width="5%">GST Number</th>
                                          <th width="5%">GST Name</th>
                                           <th width="5%">GST State</th>
                                            <th width="5%">GST City</th>
                                        <th width="10%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <td><?php echo e($key+ 1); ?></td>
                                        <td><?php echo e($val->company); ?></td>
                                        <td><?php echo e($val->city); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                        
                                         <td><?php echo e($val->contact_person_name); ?></td>
                                         
                                        <td ><?php echo e($val->contact_person_mobile); ?>

                                           </td>
                                            <td ><?php echo e($val->gst_number); ?>

                                           </td>
                                           <td ><?php echo e($val->gst_name); ?>

                                           </td>
                                           <td ><?php echo e($val->gst_state); ?>

                                           </td>
                                           <td ><?php echo e($val->gst_city); ?>

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
							
								<?php echo Html::decode(link_to_route('admin.status.company','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate' ,'onclick'=>'return changeStatus();'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('admin.status.company','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate','onclick'=>'return changeStatus();'])); ?>

							<?php endif; ?> 
                                       

                                        <?php echo Html::decode(link_to_route('admin.edit.company','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.company','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-warning','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/company/add.blade.php ENDPATH**/ ?>