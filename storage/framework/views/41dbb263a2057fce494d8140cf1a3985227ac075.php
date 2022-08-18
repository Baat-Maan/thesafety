<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">
<div class="row">
               
<div class="col-lg-12">
<div class="ibox ">
                        <div class="ibox-content">
<?php if(count($result) > 0): ?>
<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="search-result">
                                <h3><a href="javascript:void(0)"><?php echo e($val->question); ?></a></h3>
                                <!--<a href="#" class="search-link">www.inspinia.com/inspinia</a>-->
                                <p>
                                    <?php echo e($val->ans); ?>

                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            
<!--<div class="faq-item">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12">-->
<!--            <a data-toggle="collapse" href="#faq<?php echo e($key); ?>" class="faq-question"><?php echo e($val->question); ?></a>-->
          
<!--        </div>-->
       
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <div id="faq<?php echo e($key); ?>" class="panel-collapse collapse ">-->
<!--                <div class="faq-answer">-->
<!--                    <p>-->
<!--                       <?php echo e($val->ans); ?>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?> 
</div>
                            </div>
<div class="faq-item">
    <div class="row">
        <div class="col-md-12">
           Record Not Found.....
          
        </div>
       
    </div>
   
<?php endif; ?>





</div>
</div>


            </div>
               
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/employee/faq.blade.php ENDPATH**/ ?>