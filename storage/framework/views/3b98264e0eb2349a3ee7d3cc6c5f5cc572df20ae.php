	<tr class="panel panel-default delete_add_more_doc_section_<?php echo e($counterDoc); ?>" rel="<?php echo e($counterDoc); ?>">
								
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("doc[$counterDoc][title]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("doc[$counterDoc][file]", ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
									
									<td>
									    	 <a href="javascript:void(0);" onclick="del_doc_row('<?php echo e($counterDoc); ?>');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
			
									</td>
								
									
									
								</tr><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/addMoreDoc.blade.php ENDPATH**/ ?>