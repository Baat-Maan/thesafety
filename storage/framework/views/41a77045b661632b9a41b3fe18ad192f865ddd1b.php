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
                        <?php echo e(Form::open(['route'=>['admin.update.company',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>



                      
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="user_id">
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Company Name</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('company',$result->company,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('company')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('email', $result->email,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>
                        
                                  <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('address', $result->address, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('address')); ?> <span>

                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">City</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('city',$result->city,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('city')); ?> <span>

                                    </div>
                                </div>
                                
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Contact Person Name*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('contact_person_name', $result->contact_person_name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_person_name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Contact Person Mobile*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::number('contact_person_mobile', $result->contact_person_mobile,['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_person_mobile')); ?> <span>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Alternate Contact Person Name</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('alter_contact_person_name', $result->alter_contact_person_name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('alter_contact_person_name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Alternate Contact Person Mobile</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::number('alter_contact_person_mobile',$result->alter_contact_person_mobile,['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('alter_contact_person_mobile')); ?> <span>

                                    </div>
                                </div>
                                
                                                         
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Website Url</label>

                                    
                                  
                                    <div class="col-sm-4">
                                      <?php echo Form::text('website_url',$result->website_url,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('website_url')); ?> <span>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <h4>Company GST Details</h4>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">GST Number*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('gst_number',$result->gst_number,['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_number')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">GST Name*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('gst_name', $result->gst_name,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_name')); ?> <span>

                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">GST State</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('gst_state',$result->gst_state,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_state')); ?> <span>

                                    </div>
                                    
                                    
                                    <label class="col-sm-2 col-form-label">GST City</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('gst_city',$result->gst_city,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('gst_city')); ?> <span>

                                    </div>
                                </div>
                             

                                
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/resources/views/admin/company/edit.blade.php ENDPATH**/ ?>