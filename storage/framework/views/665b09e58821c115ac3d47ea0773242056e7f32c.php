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
                        <form method="POST" action="<?php echo e(route('admin.save.assign')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Company</label>
    
                                        <div class="col-sm-10"> 
                                            <?php echo e(Form::select('company_id', $companyes,'', ['class'=>'form-control','placeholder'=>'Select Company','onchange'=>'getCities()'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
    
    
                                   
    
    
                                    </div>
                                   
                                   
                                    <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Package</label>
    
                                        <div class="col-sm-10"> 
                                        <?php $__currentLoopData = $packageall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="package_id[]" 
                                
                                value="<?php echo e($package->id); ?>" id="inlineCheckbox<?php echo e($package->id); ?>"> <?php echo e($package->name); ?> &nbsp;
                                &nbsp;
                                &nbsp;
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <br/>
                                        
                                            <!--<?php echo e(Form::select('package_id', $packageall,'', ['class'=>'form-control','placeholder'=>'Select Package','onchange'=>'getCities()'])); ?>-->
                                <span class="" style="color:red"> <?php echo e($errors->first('package_id')); ?> <span>
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
                            <h5>List Assign Package </h5>
                           
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Company  Name</th>

                                        <th>Assign Package Name </th>

                                        <th>Action</th>
                                    </tr>   
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->companyName); ?></td>
                                        <td>
                                            <?php if(!empty($val->package_id)): ?>
                                                <?php $__currentLoopData = explode(',',$val->package_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $packageName = DB::table('packages')->where('id',$id)->first(); ?>
                                                    <li><?php echo e($packageName->name); ?>    &nbsp;&nbsp; &nbsp; &nbsp;(<?php echo e($packageName->segments); ?>)</li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            </td>
                                        <td>
                                        <?php echo Html::decode(link_to_route('admin.edit.assign','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.assign','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
                                    </td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('healthcare.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/healthcare/assign/add.blade.php ENDPATH**/ ?>