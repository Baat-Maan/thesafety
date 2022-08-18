<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> Upload Product</h2>
                   
                </div>
            </div>
         <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($method); ?>  Product</h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="<?php echo e(route('admin.save.blukproduct')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Upload Product</label>

                                <div class="col-sm-6">
                                <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file" accept=".csv">
                                <span class="" style="color:red"> <?php echo e($errors->first('uploaded_file')); ?> <span></div>
                                <div class="col-sm-4">
                                    <a href="<?php echo e(env('APP_URL')); ?>public/uploads/productFormatDAta.csv" download >Download Format</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/productManagement/software/resources/views/admin/product/view.blade.php ENDPATH**/ ?>