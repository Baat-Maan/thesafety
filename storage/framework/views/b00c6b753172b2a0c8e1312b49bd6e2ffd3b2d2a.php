<tr class="panel panel-default delete_add_more_pdf_section_<?php echo e($counterPdf); ?>" rel="<?php echo e($counterPdf); ?>">
								
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("pdf[$counterPdf][title]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("pdf[$counterPdf][file]", ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
									
									<td>
									   <a href="javascript:void(0);" onclick="del_pdf_row('<?php echo e($counterPdf); ?>');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
									</td>
								
									
									
								</tr><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/addMorePdf.blade.php ENDPATH**/ ?>