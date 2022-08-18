	<tr class="panel panel-default delete_add_more_ppt_section_<?php echo e($counterPpt); ?>" rel="<?php echo e($counterPpt); ?>">
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("ppt[$counterPpt][title]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('title'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("ppt[$counterPpt][file]", ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('file'); ?>
											</div>
										</div>  
									</td>
									<td>	
									 <a href="javascript:void(0);" onclick="del_ppt_row('<?php echo e($counterPpt); ?>');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
			
										
									</td>
									
								
									
									
								</tr><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/addMorePpt.blade.php ENDPATH**/ ?>