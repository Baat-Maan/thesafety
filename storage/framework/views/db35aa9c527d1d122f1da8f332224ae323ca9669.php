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
                            <?php echo Form::open(['role' => 'form','route' => "admin.save.dc",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>

                        <?php echo csrf_field(); ?>
                         <div class="hr-line-dashed"></div>

<div class="form-group  row"><label class="col-sm-2 col-form-label">Upload Diagnostic Center</label>

                                <div class="col-sm-6">
                                    <?php echo Form::file('uploaded_file',['class' => 'form-control', 'required']);; ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('uploaded_file')); ?> <span></div>
                                <div class="col-sm-4">
                                    <a href="<?php echo e(env('APP_URL')); ?>public/uploads/dcFormatDAta.csv" download >Download Format</a>
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
                            <h5>Diagnostic Centers List </h5>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                        
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Diagnostic Center Name</th>
                                        <th>Email</th>
                                        <th>
                                            Alternate Email
                                        </th>
                                        <th>Phone</th>
                                        <th>
                                            Alternate Phone
                                        </th>
                                        <th>Address</th>

                                        <th>City Name </th>
                                        <th>State Name </th>
                                        
                                        <th>Contact Person Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        <td><?php echo e($val->alternate_email); ?></td>
                                        <td><?php echo e($val->phone); ?></td>
                                        <td><?php echo e($val->alternate_phone); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                        <td><?php echo e($val->city); ?></td>
                                        <td><?php echo e($val->state); ?></td>
                                        <td>
                                        <!--<?php echo Html::decode(link_to_route('admin.edit.dc','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>-->
                                        <!--<?php echo Html::decode(link_to_route('admin.delete.dc','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>-->
                                    <?php echo e($val->contect_person); ?>

                                    </td>
                                     <td>
							<?php if($val->is_active	== 1): ?>
								<span class="label label-success" >Activated </span>
							<?php else: ?>
								<span class="label label-warning" >Deactivated </span>
							<?php endif; ?>
						</td>
						<td>
						    <?php if($val->is_active == 1): ?>
							
								<?php echo Html::decode(link_to_route('admin.status.dc','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('admin.status.dc','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate'])); ?>

							<?php endif; ?> 
						</td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--tr>
                                        <td colspan="9"></td>
                                       
                                    </tr-->
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
<?php $__env->stopSection(); ?>
<script>
     function getCitiesDc(){
       //  alert();
                                    var id = $('.state_id').val();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.drop.cities')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.cityDropdown').empty().append(data);
                                        }
                                        });
                                }
    </script>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/admin/dc/add.blade.php ENDPATH**/ ?>