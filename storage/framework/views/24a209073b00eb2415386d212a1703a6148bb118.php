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
   <div class="row">
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('admin.my.booking.schedule')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Packages</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($totalPackages); ?></h1>
                                <!--<a href="<?php echo e(route('exportstatus','Pending')); ?>">-->
                                <!--    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>-->
                                <!--</a>-->
                                <small>Total Packges</small>
                            </div>
                        </div>
                    </a>
                    </div>
                    </div>


        </div>
    
                </div>
                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('healthcare.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/healthcare/home.blade.php ENDPATH**/ ?>