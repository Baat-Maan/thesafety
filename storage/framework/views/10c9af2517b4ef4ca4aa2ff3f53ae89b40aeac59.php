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
                           
  <?php echo Form::open(['role' => 'form','route' => "admin.save.learning",'class' => 'mws-form','method' => 'post', 'files' => true]); ?>


                      
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Company*</label>
    
                                        <div class="col-sm-4"> 
                                            <?php echo e(Form::select('company_id', $companyes,'', ['class'=>'form-control','placeholder'=>'Select Company'])); ?>

                                <span class="" style="color:red"> <?php echo e($errors->first('company_id')); ?> <span>
                                    </div>
                                   
                              
                              
                                </div>
                             
    
     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                <label class="col-sm-2 col-form-label">Product Name*</label>

                                    <div class="col-sm-4">
                                         <?php echo Form::text('name', '',['class' => 'form-control']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('name')); ?> <span>

                                    </div>
                                   <label class="col-sm-2 col-form-label">Examination Cost*</label>

                                    <div class="col-sm-4">
                                       <?php echo Form::number('cost', '',['class' => 'form-control']); ?>

                                        
                                    <span class="" style="color:red"> <?php echo e($errors->first('cost')); ?> <span>
                                </div>
                                    
                                </div>
                                
                          
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Product Description</label>

                                    <div class="col-sm-4">
                                        <?php echo Form::textarea('description', null, ['class'=>'form-control','rows'=>'2']); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('description')); ?> <span>

                                    </div>
                                    <label class="col-sm-2 col-form-label">Product Image</label>

                                <div class="col-sm-4"><input type="file" name="image" class="form-control">
                                </div>
                                </div> 
                                
                                <div class="form-group  row">
                               
                                    
                                             
                              <div class="col-md-12">
						  Upload Pdf
						    
						<?php $counterPdf = 0; ?>
						
							<table class="table table-bordered pdfSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
									<th width="20%"><center></center></th> 
								   
								</thead>
							  
								
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
									    <input style="float:right;" type="button" value="Add More" class="btn btn-primary btn-sm add_more_btn" onclick="add_more_pdf_section();"/>
									</td>
								
									
									
								</tr>
								
							</table>
							</div>
								</div>
							<div class="form-group  row">
							<div class="col-md-12">
						  Upload PPT
						    
						<?php $counterPpt = 0; ?>
					
							<table class="table table-bordered pptSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
									<th width="20%"><center></center></th> 
								   
								</thead>
							  
								
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
										<input style="float:right;" type="button" value="Add More" class="btn btn-primary btn-sm add_more_btn" onclick="add_more_ppt_section();"/>
									</td>
									
								
									
									
								</tr>
								
							</table>
							</div>
							  
                                    </div>
                                    
                                    
                                     <div class="form-group  row">
                               
                                    
                                             
                              <div class="col-md-12">
						  Upload Word Document
						    
						<?php $counterDoc = 0; ?>
						
							<table class="table table-bordered docSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Document")); ?></center></th> 
									<th width="20%"><center></center></th> 
								   
								</thead>
							  
								
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
									    <input style="float:right;" type="button" value="Add More" class="btn btn-primary btn-sm add_more_btn" onclick="add_more_doc_section();"/>
									</td>
								
									
									
								</tr>
								
							</table>
							</div>
							</div>
							<div class="form-group  row">
							<div class="col-md-12">
						  Upload Videos
						    
						<?php $counterVideo = 0; ?>
					
							<table class="table table-bordered videoSectionRow">
								
							
								<thead>
									<th width="40%"><center><?php echo e(trans("Title")); ?></center></th> 
									<th width="40%"><center><?php echo e(trans("Url")); ?></center></th> 
									<th width="20%"><center></center></th> 
								   
								</thead>
							  
								
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
										<input style="float:right;" type="button" value="Add More" class="btn btn-primary btn-sm add_more_btn" onclick="add_more_video_section();"/>
									</td>
									
								
									
									
								</tr>
								
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
									<th width="10%"><center></center></th> 
								   
								</thead>
							  
								
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
									    <input style="float:right;" type="button" value="Add More" class="btn btn-primary btn-sm add_more_btn" onclick="add_more_question_section();"/>
									</td>
								
									
									
								</tr>
								
							</table>
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

                                         <th width="15%">Company Name</th>
                                         <th width="15%">Product Name</th>
                                        <th width="10%">Examination Cost </th>
                                        <th width="15%">Description </th>
                                        <th width="15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                    <tr>
                                       
                                        
                                        <td><?php echo e($val->companyName); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        
                                         <td><?php echo e($val->cost); ?></td>
                                         <td><?php echo e($val->description); ?></td>
                                          
					
                                        <td>
                                              <?php echo Html::decode(link_to_route('admin.edit.learning','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])); ?>  
                                              <?php echo Html::decode(link_to_route('admin.view.learning','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-success','title'=>'View'])); ?>  
                                    
                                       
                                    
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>
    function add_more_pdf_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".pdfSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMorePdfSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.pdfSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	
		
	
	
	function del_pdf_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_pdf_section_'+row_id).remove(); 
                
            });
        }
	
	function add_more_ppt_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".pptSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMorePptSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.pptSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_ppt_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_ppt_section_'+row_id).remove(); 
                
            });
        }
        
        
        
        	function add_more_doc_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".docSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMoreDocSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.docSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_doc_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_doc_section_'+row_id).remove(); 
                
            });
        }
        
        
        	function add_more_video_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".videoSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMoreVideoSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.videoSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_video_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_video_section_'+row_id).remove(); 
                
            });
        }
        
        
        	function add_more_question_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".questionSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>
    function add_more_pdf_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".pdfSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMorePdfSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.pdfSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	
		
	
	
	function del_pdf_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_pdf_section_'+row_id).remove(); 
                
            });
        }
	
	function add_more_ppt_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".pptSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMorePptSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.pptSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_ppt_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_ppt_section_'+row_id).remove(); 
                
            });
        }
        
        
        
        	function add_more_doc_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".docSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMoreDocSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.docSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_doc_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_doc_section_'+row_id).remove(); 
                
            });
        }
        
        
        	function add_more_video_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".videoSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMoreVideoSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.videoSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_video_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_video_section_'+row_id).remove(); 
                
            });
        }
        
        
        	function add_more_question_section(){  
		$('#loader_img').show();
		var get_last_id	=	$(".questionSectionRow").find('tr').last().attr('rel');
		var counter  	= 	parseInt(get_last_id) + 1; 
		 $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
	    $.ajax({
			url			:	'<?php echo e(route("ajaxRequest.addMoreQuestionSection")); ?>',
			type		:	'post',
			data		:	{'counter':counter},
			success		:	function(response){ 
				$('.questionSectionRow' ).find('tr').last().after(response); 
				$('#loader_img').hide();
			},
			error:function(response){ 
				$('#loader_img').hide();
			}
		});
	}
	
	function del_question_answer_row(row_id) {
	    url = $(this).attr('href');
          
                    
                     swal({
                title: "Are you sure?",
                text: "Want to remove this?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            }, function () {
                $('.delete_add_more_question_section_'+row_id).remove(); 
                
            });
        }
        
</script>
                                  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/product/add.blade.php ENDPATH**/ ?>