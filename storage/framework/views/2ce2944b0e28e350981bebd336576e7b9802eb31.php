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
                            <?php echo Form::open(['role' => 'form','route' => "employee.save.dependent",'class' => 'mws-form','method' => 'post', 'files' => true,'onSubmit'=>'return submitButtion()']); ?>

                        
                        <?php echo csrf_field(); ?>
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> Name</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('name', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label"> Relation</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('relation', '',['class' => 'form-control', 'style'=>"text-transform:capitalize"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label"> Contact No</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::number('contact_no', '',['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('contact_no')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label"> DOB</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::date('dob', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dob')); ?> <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>


                               
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm button_submit"  type="submit">Save changes</button>
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
                            <h5><?php echo e($pageName); ?> List</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Created</th>
                                        <th> Name </th>
                                        <th>Relation </th>
                                        <th>Contact No</th>
                                        <th>DOB</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$page); ?></td>
                                        <?php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        ?>
                                        <td><?php echo e($newDate); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->relation); ?></td>
                                        <td><?php echo e($val->contact_no); ?></td>
                                        <td><?php echo e($val->dob); ?></td>
                                        <td>
                                        <?php echo Html::decode(link_to_route('employee.edit.dependent','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('employee.delete.dependent','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
                                    </td>
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

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/employee/dependent/add.blade.php ENDPATH**/ ?>