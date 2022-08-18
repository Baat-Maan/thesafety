<?php $__env->startSection('body'); ?>
<style>
      div#page-wrapper {
        background-color: #fff;
}.stat-list li {
    font-size: 16px;
}.stat-list li {
    font-size: 16px;
    padding: 3px 10px;
}.stat-list li {
    margin-top: 0;
}.stat-list li:nth-of-type(even) {
    background: #f9f9f9;
}li.lazur-bg a {
    color: white !important;
}.stat-list li a {
    color: #6c6c6c;
}
.stat-list li:nth-of-type(odd) {
    background: #1c84c6;
}
.btn.btn-danger {
    background-color: #3761d8 !important;
    border-color: #3761d8 !important;
}
.label-info{
    background-color: #ffff !important;
    border-color: #ffff !important;
    color: #0a76b5 !important;
}
.text-info {
    color: #0a76b5 !important;
}
.ibox-title{
    color: #ffff;
    background-color: #0a76b5 !important;
}
.ibox-content{
    background-color: #f4f5f7 !important;
    
}
button.btn.btn-xs.btn-white {
    color: #0a76b5;
}
.ibox{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px !important;
}
</style>
<div class="wrapper wrapper-content">
    <center><div class="logo" style="text-align:center;"><img src="https://www.avyukthealthcare.com/wp-content/uploads/2020/09/avyukt-healthcare-logo11.png" width="200px"></img></div></center>
    
    <h1><center><b>Total Booking Leads Status</b></center></h1>


 <div class="row">
     <div class="col-lg-3">
                   
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.my.booking.schedule')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>To Be Contacted</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['process']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','Pending')); ?>">
                                    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total TBC</small>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.mis')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>MIS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['total']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','all')); ?>">
                                    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total MIS</small>
                            </div>
                        </div>
                    </a>
                    </div>
                    </div>
                    
                     <div class="row">
                    
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.my.booking.mdra')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>MDRA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['notdone']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','MDRA')); ?>">
                                    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total MDRA</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.my.booking')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Partial Process Done</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['done']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','Approve')); ?>">
                                <div class="stat-percent font-bold text-info"><i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total PPD</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.my.booking.cancel')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Cancelled </h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['cancelled']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','cancel')); ?>">
                                <div class="stat-percent font-bold text-info"><i class="fa fa-download"></i> Download Excel</div>
                                </a>
                                <small>Total Cancelled </small>
                            </div>
                        </div>
                        </a>
            </div>
            
            <div class="col-lg-3">
                    <a href="<?php echo e(route('call_center.my.booking.mdradone')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Closed Cases </h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['closed']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','MDRA Done')); ?>">
                                <div class="stat-percent font-bold text-info"><i class="fa fa-download"></i> Download Excel</div>
                                </a>
                                <small>Total Closed Cases </small>
                            </div>
                        </div>
                        </a>
            </div>
        </div>


        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('call_center.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Healthcare/resources/views/call_center/home.blade.php ENDPATH**/ ?>