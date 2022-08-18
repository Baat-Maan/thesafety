
								
								
								<tr class="panel panel-default delete_add_more_video_section_<?php echo e($counterVideo); ?>" rel="<?php echo e($counterVideo); ?>">
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("video[$counterVideo][title]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('title'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("video[$counterVideo][url]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('file'); ?>
											</div>
										</div>  
									</td>
									<td>		
											 <a href="javascript:void(0);" onclick="del_video_row('<?php echo e($counterVideo); ?>');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
			
									</td>
									
								
									
									
								</tr><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/addMoreVideo.blade.php ENDPATH**/ ?>