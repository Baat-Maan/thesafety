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

                                    <div class="col-sm-10">
                                       <?php echo Form::text('company',$result->company,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('company')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Head of Company</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('name', $result->name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span></div>
                                    
                                    <label class="col-sm-2 col-form-label">Prefix your domain name</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('perifix', $result->perifix,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('perifix')); ?> <span></div>
                                </div>
                        
                         <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('email', $result->email,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                   
                                    <label class="col-sm-2 col-form-label">Password <span style="color:red">(if you want Change Password then fill password otherwise leave password)</span></label>

                                    <div class="col-sm-4">
                                       <?php echo Form::password('password',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>

                                    </div>
                                </div>
                                  <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">State</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::text('state',$result->state,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('state')); ?> <span>

                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">City</label>

                                    <div class="col-sm-4">
                                      <?php echo Form::text('city',$result->city,['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('city')); ?> <span>

                                    </div>
                                </div>
                                
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('address', $result->address, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('address')); ?> <span>

                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">Comoany Logo</label>

                                <div class="col-sm-4">
                                    <?php echo e(Form::file('image',['class'=>'form-control'])); ?>

                                    <br/>
                                     <img src="<?php echo e(env('APP_URL')); ?><?php echo e($result->image); ?>" height="50px;"/></div>
                                <span class="" style="color:red"> <?php echo e($errors->first('image')); ?> <span>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Employee Related Srvices</label>

                                    <div class="col-sm-4"> 
 <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="products[]" 
                                <?php echo e(in_array($segment, explode(',',$result->products))?"checked":null); ?>

                                value="<?php echo e($segment); ?>" id="inlineCheckbox<?php echo e($segment); ?>"> <?php echo e($segment); ?><br/>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                  <span class="" style="color:red"> <?php echo e($errors->first('company_products')); ?> <span>
                                  
                                    
                                </div>
                                
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Company Related Srvices</label>

                                    <div class="col-sm-4"> 
 <?php $__currentLoopData = $companyType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="company_products[]" 
                                <?php echo e(in_array($segment, explode(',',$result->company_products))?"checked":null); ?>

                                value="<?php echo e($segment); ?>" id="inlineCheckbox<?php echo e($segment); ?>"> <?php echo e($segment); ?><br/>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                  <span class="" style="color:red"> <?php echo e($errors->first('company_products')); ?> <span>
                                  
                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/admin/company/edit.blade.php ENDPATH**/ ?>