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
                        <form method="POST" action="<?php echo e(route('admin.save.call.centre')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                              
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Name</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control" style="text-transform:capitalize">
                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span></div>
                                </div>
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>

                                    <div class="col-sm-10"><input type="text" value="<?php echo e(old('email')); ?>" name="email" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('email')); ?> <span>

                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" value="" name="password" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('password')); ?> <span>

                                    </div>
                                </div>


                                

                         
                                <div style="display:none" class="form-group  row"><label class="col-sm-2 col-form-label">Image</label>

                                <div class="col-sm-10"><input type="file" name="image" class="form-control">
                                <br>
                                <img src="<?php echo e(env('APP_URL')); ?>public/assest/dummy.jpg" height="150px;"/></div>
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
                            <h5>List Call Center</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_id">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Name </th>
                                        <th>Email</th>
                                     
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        
                                        <td>
                                        <?php echo Html::decode(link_to_route('admin.edit.call.centre','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.call.centre','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Healthcare/resources/views/admin/cell_center/add.blade.php ENDPATH**/ ?>