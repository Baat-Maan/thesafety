<?php $__env->startSection('body'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> <?php echo e($pageName); ?> <?php echo e($method); ?></h2>
                   
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5><?php echo e($pageName); ?> <?php echo e($method); ?> </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <!--<form method="get" action="<?php echo e(route('admin.list.company')); ?>" enctype="multipart/form-data">-->
                        <!--    <?php echo csrf_field(); ?>-->
                        <!--    <div class="row">-->
                            
                        <!--        <div class="col-sm-2 m-b-xs">-->
                        <!--        <label class="form-label">Select State</label>-->
                        <!--        <?php echo e(Form::select('state', $states,$selectState, ['class'=>'form-control-sm form-control input-s-sm inline','placeholder'=>'Select State'])); ?>-->
                               
                        <!--        </div>-->
                                
                        <!--        <div class="col-sm-3">-->
                        <!--        <label class="form-label">Company</label>-->
                        <!--            <div class="input-group">-->
                        <!--                <input placeholder="Search Company" type="text" value="<?php echo e($_GET['company'] ?? ''); ?>" name="company" class="form-control form-control-sm"></div>-->

                        <!--        </div>-->


                        <!--        <div class="col-sm-3">-->
                        <!--        <label class="form-label">Email</label>-->
                        <!--            <div class="input-group">-->
                        <!--                <input placeholder="Search Email" type="text" value="<?php echo e($_GET['email'] ?? ''); ?>" name="email" class="form-control form-control-sm"> <span class="input-group-append"> -->
                        <!--                    <button type="submit" class="btn btn-sm btn-primary">Search! <button type="reset" class="btn btn-sm btn-warning">Reset!-->
                        <!--            </button> </span></div>-->

                        <!--        </div>-->


                                
                        <!--    </div>-->
                        <!--    </form>-->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id">
                                    <thead>
                                    <tr>

                                        <th width="5%">#</th>
                                        <th>Image </th>
                                        <th>Company Name </th>
                                        <th width="8%">Name </th>
                                        <th width="8%">Email </th>
                                        <th width="7%">Prfix  Domain</th>
                                        <th width="10%">Address</th>
                                        <th width="5%">Rating</th>
                                        <th width="10%">Status</th>
                                        <th width="5%">
                                            DC List Uploaded
                                        </th>
                                        <!--<th width="5%">Company Feedback</th>-->
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                        <td><?php echo e($key+ 1); ?></td>
                                        <td><img src="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" height="50px" width="50px"/></td>
                                        <td><?php echo e($val->company); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                         <td><?php echo e($val->email); ?></td>
                                        <td><?php echo e($val->perifix); ?></td>
                                        <td><?php echo e($val->address); ?></td>
                                         
                                        <td class="ratting<?=$val->slug?>">
                                           </td>
                                        <script> var totalstart = '<?=$val->totalStars?>';
                                            var numberOfReviews = '<?=$val->numberOfReviews?>';
                                            if(numberOfReviews>0){
                                                var avg = totalstart/numberOfReviews;
                                                if(avg=="NaN"){
                                                     console.log(avgg);
                                                 var   avgg = 0;
                                                } else {
                                                     var   avgg = avg;
                                                }
                                            } else {
                                                var   avgg = 0;
                                            }
                                            
                                           
                                            $('.ratting<?=$val->slug?>').text(avgg);
                                            
                                            </script>
                                             <td>
							<?php if($val->status	== 1): ?>
								<span class="label label-success" >Activated </span>
							<?php else: ?>
								<span class="label label-warning" >Deactivated </span>
							<?php endif; ?>
						</td>
						<td>
						    <?php 
						    $resultDC = DB::table('dcs')->where('company_id', $val->id)->get();
						    ?>
						    <?php if(count($resultDC)> 0): ?>
						    <?php echo Html::decode(link_to_route('admin.view.company','<i class="fa fa-eye"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'View'])); ?>

						    <?php endif; ?>
						    
						</td>
					
                                        <td>
                                            <?php if($val->status == 1): ?>
							
								<?php echo Html::decode(link_to_route('admin.status.company','<i class="fa fa-ban"></i>',[$val->id, 0],['class'=>'btn btn-success','title'=>'Click To Deactivate'])); ?>

							<?php else: ?>
							
								
									<?php echo Html::decode(link_to_route('admin.status.company','<i class="fa fa-check"></i>',[$val->id, 1],['class'=>'btn btn-success','title'=>'Click To Activate'])); ?>

							<?php endif; ?> 
                                       

                                        <?php echo Html::decode(link_to_route('admin.edit.company','<i class="fa fa-pencil"></i>',[$val->slug],['class'=>'btn btn-primary','title'=>'Edit'])); ?>

                                        <?php echo Html::decode(link_to_route('admin.delete.company','<i class="fa fa-trash"></i>',[$val->slug],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])); ?>

                                    
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/admin/company/list.blade.php ENDPATH**/ ?>