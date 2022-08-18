
									
								
									
									
								</tr>
								<tr class="panel panel-default delete_add_more_question_section_<?php echo e($counterQueAns); ?>" rel="<?php echo e($counterQueAns); ?>">
								
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("queans[$counterQueAns][question]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("queans[$counterQueAns][answer]",'', ['class'=>'form-control']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
									
									<td>
									    	 <a href="javascript:void(0);" onclick="del_question_answer_row('<?php echo e($counterQueAns); ?>');" class="btn btn-danger btn-small" >
			<i class="fa fa-trash-o"></i>
		</a>
			
									</td>
								
									
									
								</tr><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/addMoreQuestion.blade.php ENDPATH**/ ?>