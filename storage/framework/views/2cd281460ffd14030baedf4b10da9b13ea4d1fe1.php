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
                           
  <?php echo Form::open(['role' => 'form','route' => "admin.save.product",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>


                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Company*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('company_id', $companyes,'', ['class'=>'form-control','placeholder'=>'Select Company'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Product Category*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('category_id', $projectType,'', ['class'=>'form-control','placeholder'=>'Select Product Category'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('category_id')); ?> <span>
                                    </div>
                              
                              
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>

                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">Product Code</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('code', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('code')); ?> <span>

                                    </div>
                                    
                                </div>
                                
                              
      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Product Cost*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::number('cost', '',['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('cost')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Opening Stock*</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('opening_stock', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('opening_stock')); ?> <span>

                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Product Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Product Image</label>

                                <div class="col-sm-4"><input type="file" name="image" class="form-control">
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
            
            
     
        
         <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($pageName); ?> List </h5>
                            
                        </div>
                         <div class="ibox-content">
                      <div class="input-group">
                                        
                                        <!--   <a href="<?php echo e(env('APP_URL')); ?>public/uploads/dcFormatDAta.csv" download  class="btn btn-sm btn-warning">Download Format
                                    </a>-->
                                    
                                       <a href="<?php echo e(route('admin.view.product')); ?>"  class="btn btn-sm btn-warning">Import Data
                                    </a></div>
                                    <br/>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th width="10%">Product Code</th>
                                        <th>Image</th>
                                         <th width="15%">Category Name</th>
                                         <th width="15%">Product Name</th>
                                        <th width="10%">Cost </th>
                                        <th>Opening Stock</th>
                                         <th>Closing Stock</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <?php
                                            $month = date('m');
                                            $projectNo = 'PRO'.$val->id;
                                        ?>
                                        <td><?php echo e($val->code); ?></td>
                                         <td><img src="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" height="50px" width="50px"/></td>
                                        <td><?php echo e($val->categoryName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        
                                         <td><?php echo e($val->cost); ?></td>
                                         <td><?php echo e($val->opening_stock); ?></td>
                                          <td><?php echo e($val->closeing_stock); ?></td>
                                          
					
                                        <td>
                                                  
                                    
                                        <?php echo Html::decode(link_to_route('admin.edit.product','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/product/add.blade.php ENDPATH**/ ?>