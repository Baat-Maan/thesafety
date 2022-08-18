<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo e($method); ?>  <?php echo e($pageName); ?></h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <?php if(Auth::user()->is_admin == 1): ?>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($method); ?>  <?php echo e($pageName); ?></h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('admin.save.package')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label">Name Of The Package</label>

                                    <div class="col-sm-4"><input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>


                                <label class="col-sm-2 col-form-label">Cost Of The Package</label>

                                    <div class="col-sm-4"><input type="number" value="<?php echo e(old('price')); ?>" name="price" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('price')); ?> <span>
                                </div>


                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Package For</label>

                                    <div class="col-sm-4"> 
 <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="package_for[]" 
                               
                                value="<?php echo e($segment); ?>" id="inlineCheckbox<?php echo e($segment); ?>"> <?php echo e($segment); ?> &nbsp; &nbsp;
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                  <span class="" style="color:red"> <?php echo e($errors->first('package_for')); ?> <span>
                                    
                                </div>
                                <label class="col-sm-2 col-form-label">Package Age Group</label>

                                    <div class="col-sm-4"><input type="text" value="<?php echo e(old('age_group')); ?>" name="age_group" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('age_group')); ?> <span>
                                </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Package Precations For Food</label>

                                    <div class="col-sm-4"><input type="text" value="<?php echo e(old('precations_for_food')); ?>" name="precations_for_food" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('precations_for_food')); ?> <span>
                                </div>
                                    <label class="col-sm-2 col-form-label">Package Included Test</label>

                                    <div class="col-sm-4">
                                    <textarea  name="test" class="form-control"><?php echo e(old('test')); ?></textarea>
                                    <span class="" style="color:red"> <?php echo e($errors->first('test')); ?> <span>

                                    </div>
                                    
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Package Start Date</label>

                                    <div class="col-sm-4"><input type="date" value="<?php echo e(old('from_date')); ?>" name="from_date" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('from_date')); ?> <span></div>


                                    <label class="col-sm-2 col-form-label">Package End Date</label>

                                    <div class="col-sm-4"><input type="date" value="<?php echo e(old('from_to')); ?>" name="from_to" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('from_to')); ?> <span></div>
                                </div>
                                
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Package Meant For</label>

                                    <div class="col-sm-4">
                                    <?php echo e(Form::select('package_meant_for',["Home Collection" => "Home Collection", "Dc Collection"=>"Dc Collection"],'', ['class'=>'form-control package_meant_for','placeholder'=>'Package Meant For'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('package_meant_for')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Package Other Details</label>

                                    <div class="col-sm-4">
                                    <textarea  name="description" class="form-control"><?php echo e(old('description')); ?></textarea>
                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

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
        <?php endif; ?>
        
     
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Package List </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="<?php echo e(route('admin.new.package')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-5">
                                <label class="form-label">Package</label>
                                    <div class="input-group">
                                        <input placeholder="Search Package Name" type="text" value="<?php echo e($_GET['name'] ?? ''); ?>" name="name" class="form-control form-control-sm"> <span class="input-group-append"> 
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button> <button type="reset" class="btn btn-sm btn-warning">Reset!
                                    </button> </span></div>

                                </div>


                                
                            </div>
                            </form>
                            <div class="table-responsive custompackage">
                                <table class="table table-striped">
                                   
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><span>Name Of The Package:</span> <?php echo e($val->name); ?></td>
                                        <td><span>Cost Of The Package:</span> <?php echo e($val->prie); ?></td>
                                        <td><span>Package For:</span> <?php echo e($val->segments); ?></td>
                                        <td><span>Package Precations For Food:</span> <?php echo e($val->precations_for_food); ?></td>
                                        <td><span>Package Age Group:</span> <?php echo e($val->age_group); ?></td>
                                        <td><span>Package Start Date:</span> <?php echo e($val->from_date); ?></td>
                                        <td><span>Package End Date:</span> <?php echo e($val->from_to); ?></td>
                                        <td class="disc"> <span>Package Included Test:</span> 
                                        <?php if(!empty($val->test)): ?>
                                        <?php $__currentLoopData = explode(',',$val->test); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($tests); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                        <?php endif; ?>
                                       </td>
                                        <td><span>Package Meant For:</span> <?php echo e($val->package_meant_for); ?></td>
                                        
                                        <td ><span>Package Other Details:</span> <?php echo e($val->description); ?></td>
                                        <td><span>Status:</span> <?php if($val->status==1): ?>
                                            Active
                                            <?php else: ?>
                                            De Active
                                            <?php endif; ?>
                                        </td>
                                        <?php if(Auth::user()->is_admin ==  1): ?>
                                        <td>
                                            
                                        <?php if($val->status == 1): ?>
							
								<?php echo Html::decode(link_to_route('admin.status.package','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('admin.status.package','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate'])); ?>

							<?php endif; ?> 
                                       
                                        <?php echo Html::decode(link_to_route('admin.edit.package','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.package','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
                                    </td>
                                    <?php endif; ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($result)==0): ?>
                                    <tr>
                                        <td colspan="7" style="color:red; text-align:center">Record Not Found.....</td>
                                       
                                    </tr>
                                    <?php endif; ?>
                                    
                                    </tbody>
                                </table>
                                <?php echo e($result->appends($_GET)->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('healthcare.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/healthcare/package/add.blade.php ENDPATH**/ ?>