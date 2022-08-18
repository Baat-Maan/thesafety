<?php $__env->startSection('body'); ?>
<div class="wrapper wrapper-content">

           <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1 blue-bg">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-address-card fa-5x"></i>
                                </div>
                                <div class="col-8 text-right">
                                    <span> Total Schedule Call </span>
                                    <h2 class="font-bold"><?php echo e($data['schedule']); ?></h2>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total Show/No Show </span>
                                <h2 class="font-bold"><?php echo e($data['show']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-bank  fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total PPD </span>
                                <h2 class="font-bold"><?php echo e($data['ppd']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-music fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Total MDRA </span>
                                <h2 class="font-bold"><?php echo e($data['mdra']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">

                

                </div>


            </div>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('call_center.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/t5scjne8ghxo/public_html/healthcare/resources/views/call_center/home.blade.php ENDPATH**/ ?>