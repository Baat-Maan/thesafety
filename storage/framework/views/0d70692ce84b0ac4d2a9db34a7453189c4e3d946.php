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
                    
                        <input type="hidden" value="<?php echo e($result->id); ?>" name="user_id">
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Company*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('company_id', $companyes,$result->company_id, ['class'=>'form-control','placeholder'=>'Select Company','disabled'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
                                   
                              
                              
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name*</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', $result->name,['class' => 'form-control' ,'disabled']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>

                                    </div>
                                   <label class="col-sm-2 col-form-label">Product Cost*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::number('cost', $result->cost,['class' => 'form-control' ,'disabled']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('cost')); ?> <span>
                                </div>
                                    
                                </div>
                                
                          
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Product Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', $result->description, ['class'=>'form-control','rows'=>'2','disabled']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Product Image</label>

                                <div class="col-sm-4"><input type="file" name="image" class="form-control">
                                <br>
                                <img src="<?php echo e($result->image); ?>" height="50px;"/>
                                </div>
                                </div> 
                               
                             
                             
                             
                                <div class="form-group  row">
                               
                                    
                                             
                              <div class="col-md-6">
						   Pdf
						<?php $counterPdf = 0; ?>
						
							<table class="table table-bordered pdfSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
								   
								</thead>
							  
								
								
								<?php if(!$pdfData->isEmpty()): ?>
							    <?php $__currentLoopData = $pdfData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								
									<tr class="panel panel-default delete_add_more_pdf_section_<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>">
								    
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("pdf[$value->id][title]",isset($value->title) ? $value->title : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("pdf[$value->id][file]", ['class'=>'form-control']); ?>

										 <?php if(!empty($value->document)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($value->document); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
								    
									
									
								</tr>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								
								<tr class="panel panel-default delete_add_more_pdf_section_<?php echo e($counterPdf); ?>" rel="<?php echo e($counterPdf); ?>">
								
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("pdf[$counterPdf][title]",'', ['class'=>'form-control','disabled']); ?>

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
								
									
									
								</tr>
								
								<?php endif; ?>
								
								
								
								
							</table>
							</div>
							
							<div class="col-md-6">
						   PPT
						<?php $counterPpt = 0; ?>
					
							<table class="table table-bordered pptSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
								   
								</thead>
							  
									<?php if(!$pptData->isEmpty()): ?>
							    <?php $__currentLoopData = $pptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								
									<tr class="panel panel-default delete_add_more_ppt_section_<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>">
								    
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("ppt[$value->id][title]",isset($value->title) ? $value->title : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("ppt[$value->id][file]", ['class'=>'form-control']); ?>

										 <?php if(!empty($value->document)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($value->document); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
								    
									
									
								</tr>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								
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
								
								
									
									
								</tr>
								
								<?php endif; ?>
								
							
								
							</table>
							</div>
							  
                                    </div>
                                    
                                    
                                     <div class="form-group  row">
                               
                                    
                                             
                              <div class="col-md-6">
						   Word Document
						<?php $counterDoc = 0; ?>
						
							<table class="table table-bordered docSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
								   
								</thead>
							  
									<?php if(!$docData->isEmpty()): ?>
							    <?php $__currentLoopData = $docData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								
									<tr class="panel panel-default delete_add_more_doc_section_<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>">
								    
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("doc[$value->id][title]",isset($value->title) ? $value->title : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::file("doc[$value->id][file]", ['class'=>'form-control']); ?>

										 <?php if(!empty($value->document)): ?>
                                                <a href="<?php echo e(env('APP_URL')); ?><?php echo e($value->document); ?>" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
                                            <?php endif; ?>
											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
								    
									
									
								</tr>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
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
									    
									</td>
								
									
									
								</tr>
								
								<?php endif; ?>
								
								
							
								
							</table>
							</div>
							
							<div class="col-md-6">
						   Videos
						    
						<?php $counterVideo = 0; ?>
					
							<table class="table table-bordered videoSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Url")); ?></center></th> 
								   
								</thead>
							  	<?php if(!$videoData->isEmpty()): ?>
							    <?php $__currentLoopData = $videoData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								
								
								<tr class="panel panel-default delete_add_more_video_section_<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>">
								    <td>		
										<div class="mws-form-item">
										 <?php echo Form::text("video[$value->id][title]",isset($value->title) ? $value->title : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('title'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("video[$value->id][url]",isset($value->url) ? $value->url : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('file'); ?>
											</div>
										</div>  
									</td>
								
									
								
									
									
								</tr>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
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
									
									
								
									
									
								</tr>
								<?php endif; ?>
								
								
							</table>
							</div>
							  
                                    </div>

                                    
                                    
                                    <div class="form-group  row">
                               
                                    
                                             
                              <div class="col-md-12">
						  Question Answer
						  
						    
						<?php $counterQueAns = 0; ?>
						
							<table class="table table-bordered questionSectionRow">
								
							
								<thead>
									<th width="45%"><center><?php echo e(trans("Question")); ?></center></th> 
									<th width="45%"><center><?php echo e(trans("Answer")); ?></center></th> 
								   
								</thead>
							  
									<?php if(!$questionData->isEmpty()): ?>
							    <?php $__currentLoopData = $questionData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								<tr class="panel panel-default delete_add_more_question_section_<?php echo e($value->id); ?>" rel="<?php echo e($value->id); ?>">
								
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("queans[$value->id][question]",isset($value->question) ? $value->question : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('charge'); ?>
											</div>
										</div>  
									</td>
									<td>		
										<div class="mws-form-item">
										 <?php echo Form::text("queans[$value->id][answer]",isset($value->answer) ? $value->answer : '', ['class'=>'form-control','disabled']); ?>

											<div class="error-message help-inline">
												<?php echo $errors->first('remark'); ?>
											</div>
										</div>  
									</td>
									
								
									
									
								</tr>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
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
									
								
									
									
								</tr>
								<?php endif; ?>
								
								
							</table>
							</div>
							
							  
                                    </div>  
                                    
                               
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
        
<?php $__env->stopSection(); ?>



<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/hr/product/view.blade.php ENDPATH**/ ?>