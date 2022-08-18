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
                           
  <?php echo Form::open(['role' => 'form','route' => "admin.save.project",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>


                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Company*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('company_id', $companyes,'', ['class'=>'form-control','placeholder'=>'Select Company'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
                                    <label class="col-sm-2 col-form-label">Project Category*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('category_id', $projectType,'', ['class'=>'form-control','placeholder'=>'Select Project Category'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('category_id')); ?> <span>
                                    </div>
                              
                              
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Project Name</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>

                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">Project Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                </div>
                                
                                  <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">Prject Start Date*</label>

                                    <div class="col-sm-4"><input type="date" value="<?php echo e(old('start_date')); ?>" name="start_date" class="form-control" onkeydown="return false">
                                    <span class="" style="color:red"> <?php echo e($errors->first('start_date')); ?> <span></div>


                                    <label class="col-sm-2 col-form-label">Project Tat End Date</label>

                                    <div class="col-sm-4"><input type="date" value="<?php echo e(old('end_date')); ?>" name="end_date" class="form-control"  onkeydown="return false">
                                    <span class="" style="color:red"> <?php echo e($errors->first('end_date')); ?> <span></div>
                                </div>
      <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Project Cost*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::number('cost', '',['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('cost')); ?> <span>
                                </div>
                                <label class="col-sm-2 col-form-label">Project Refered By</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::text('refered_by', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('refered_by')); ?> <span>

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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th width="10%">Project No.</th>
                                         <th width="15%">Category Name</th>
                                         <th width="15%">Project Name</th>
                                          <th width="10%">Project Start Date</th>
                                          <th width="10%">Project End Date</th>
                                        <th width="10%">Cost </th>
                                          <th width="10%">Status </th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <?php
                                            $month = date('m');
                                            $projectNo = 'TOS/'.$month.'/'.$val->id;
                                        ?>
                                        <td><?php echo e($projectNo); ?></td>
                                        <td><?php echo e($val->categoryName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->start_date); ?></td>
                                         <td><?php echo e($val->end_date); ?></td>
                                        
                                         <td><?php echo e($val->cost); ?></td>
                                            <td><?php echo e($val->status); ?></td>
                                          
					
                                        <td>
                                                  
                                        <?php if($val->status == 'In Process' ||  $val->status == 'On Hold'): ?>
							
							
							<button  onclick="status('<?php echo e($val->id); ?>')"; data-toggle="modal" data-target="#myModalStatus" class="btn btn-success" type="button">Status</button>
								
						
							<?php endif; ?> 
                                        <?php echo Html::decode(link_to_route('admin.edit.project','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                    
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


<div class="modal inmodal" id="myModalStatus" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Status</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['admin.status.project'],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>

                                        <?php echo csrf_field(); ?>
                                       
                                        <div class="modal-body ">
                                            <input type="hidden" value="" class="project_id" name="project_id"/>
                                       <div class="form-group  row">
                                            <label class="col-sm-2 col-form-label"> Status</label>

                                    <div class="col-sm-10">
                                         <?php echo e(Form::select('status', ['Finished'=>'Finished','On Hold'=>'On Hold','Cancelled'=>'Cancelled'],'', ['class'=>'form-control status','onchange'=>'changeProjectStatus()','placeholder'=>'Select Status'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                      
                                    </div>
                                    
                                     <div class="form-group  row reason_div" style="display:none;">
                                            <label class="col-sm-2 col-form-label"> Reason</label>

                                    <div class="col-sm-10">
                                        <?php echo Form::textarea('reason', null, ['class'=>'form-control','rows'=>'3']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('relation')); ?> <span>
                                </div>
                                      
                                    </div>
                                        
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <a href="javascript:void(0)" style="display:none;" class="btn btn-sm btn-primary float-right buy_now" >Save changes</a> 

                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>       
                                    </div>
                                </div>
                            </div>
                            <script>
                                function status(id){
                                    $('.project_id').val(id);
                                }
                                function changeProjectStatus(){
                                   var status =  $('.status').val();
                                    if(status == 'Finished'){
                                        $('.reason_div').hide();
                                    }else{
                                         $('.reason_div').show();
                                    }
                                    }
                                
                            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/resources/views/admin/project/add.blade.php ENDPATH**/ ?>