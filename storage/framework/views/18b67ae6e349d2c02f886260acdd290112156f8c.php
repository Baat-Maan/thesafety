<?php $__env->startSection('body'); ?>
<style>
.btn.btn-danger {
    background-color: #53a5d5 !important;
    border-color: #53a5d5 !important;
}
.label-danger{
    background-color: #53a5d5 !important;
    border-color: #53a5d5 !important;
}
.text-danger {
    color: #3761d8 !important;
}
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
    background-color: #53a5d5 !important;
    border-color: #53a5d5 !important;
}
.label-info{
    background-color: #ffff !important;
    border-color: #ffff !important;
    color: #53a5d5 !important;
}
.text-info {
    color: #53a5d5 !important;
}
.ibox-title{
    color: #ffff;
    background-color: #53a5d5 !important;
        padding: 7px 90px 6px 15px !important;
    min-height: 35px !important;
}
.ibox-tools {
    display: block;
    float: none;
    margin-top: 0;
    position: absolute;
    top: 10px;
    
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
.btnblod {
    padding: 13px;
    font-size: 14px;
}
.btn-warning {
    color: #ffffff;
    background-color: #53a5d5;
    border-color: #53a5d5;
}

.ibox-title.bcwhite {
    background: #ffff !important;
}
    @media (min-width: 992px)
.col-lg-3 {
   
    max-width: 20% !important;
}
</style>
<div class="wrapper wrapper-content">
    <center><div class="logo" style="text-align:center;"><?php echo e(Html::image(Auth::user()->image,'', ['class'=>'','height'=>'100','width'=>'100'])); ?></img></div></center>
<div class="row">
               
               <div class="col-lg-12">

                  <div class="row">
                       <div class="col-lg-12">
                           <div class="ibox ">
                               <div class="ibox-title bcwhite">
                                  <center> <button tabindex="-1" data-toggle="modal" data-target="#myAhcUrllModel" class="btn btn-warning  " type="button">Employee Registration URL</button>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button tabindex="-1" data-toggle="modal" data-target="#myPreUrllModel" class="btn btn-danger  " type="button">Pre Employee Registration URL </button></center>
                                  
                                   
                                    
                                    <div class="ibox-tools">
                                      
                                   </div>
                               </div>
                              
                           </div>
                       </div>
                   </div>

               </div>


           </div>
        <div class="row">
                    <!--<div class="col-lg-3">-->
                    <!--<a href="<?php echo e(route('hr.my.booking')); ?>" style="color:inherit;">-->
                    <!--    <div class="ibox ">-->
                    <!--        <div class="ibox-title">-->
                    <!--            <div class="ibox-tools">-->
                    <!--                <span class="label label-success float-right">Total</span>-->
                    <!--            </div>-->
                    <!--            <h5>AHC Booking</h5>-->
                    <!--        </div>-->
                    <!--        <div class="ibox-content">-->
                    <!--            <h1 class="no-margins"><?php echo e($data['bookings']); ?></h1>-->
                    <!--            <a href="<?php echo e(route('exporttype','AHC')); ?>">-->
                    <!--                <div class="stat-percent font-bold text-success"> <i class="fa fa-download"></i> Download Excel </div>-->
                    <!--            </a>-->
                    <!--            <small>Total Booking</small>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</a>-->
                    <!--</div>-->
                    <!--<div class="col-lg-3">-->
                    <!--<a href="<?php echo e(route('hr.preemp.booking')); ?>" style="color:inherit;">-->
                    <!--    <div class="ibox ">-->
                    <!--        <div class="ibox-title">-->
                    <!--            <div class="ibox-tools">-->
                    <!--                <span class="label label-success float-right">Total</span>-->
                    <!--            </div>-->
                    <!--            <h5>Pre Employee Booking</h5>-->
                    <!--        </div>-->
                    <!--        <div class="ibox-content">-->
                    <!--            <h1 class="no-margins"><?php echo e($data['prebookings']); ?></h1>-->
                    <!--            <a href="<?php echo e(route('exporttype','Pre')); ?>">-->
                    <!--                <div class="stat-percent font-bold text-success"> <i class="fa fa-download"></i> Download Excel </div>-->
                    <!--            </a>-->
                    <!--            <small>Total Booking</small>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</a>-->
                    <!--</div>-->
                     <div class="col-lg-3">
                   
                    </div>
                      <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
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
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
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
                    </div>
                    <div class="row">
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>MDRA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['mdra']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','MDRA')); ?>">
                                    <div class="stat-percent font-bold text-info"> <i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total MDRA</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Partial Process Done</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['ppd']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','Approve')); ?>">
                                <div class="stat-percent font-bold text-info"><i class="fa fa-download"></i> Download Excel </div>
                                </a>
                                <small>Total PPD</small>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Total</span>
                                </div>
                                <h5>Cancelled </h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo e($data['cancel']); ?></h1>
                                <a href="<?php echo e(route('exportstatus','cancel')); ?>">
                                <div class="stat-percent font-bold text-info"><i class="fa fa-download"></i> Download Excel</div>
                                </a>
                                <small>Total Cancelled </small>
                            </div>
                        </div>
                        </a>
            </div>
            
            <div class="col-lg-3">
                    <a href="<?php echo e(route('hr.mis')); ?>" style="color:inherit;">
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
        
        <div class="row">
               
               <div class="col-lg-12">

                  <div class="row">
                       <div class="col-lg-12">
                           <div class="ibox ">
                               <div class="ibox-title bcwhite">
                                  <center> <a href="<?php echo e(route('hr.list.feedback')); ?>" class="btn btn-warning btnblod" type="button">Feedback List</a>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a  href="<?php echo e(route('hr.list.event')); ?>" class="btn btn-danger btnblod" type="button"> Event Management</a></center>
                                  
                                   
                                    
                                    <div class="ibox-tools">
                                      
                                   </div>
                               </div>
                              
                           </div>
                       </div>
                   </div>

               </div>


           </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Bookings</h5>
                                <div class="ibox-tools">
                                    <div class="btn-group">
                                       
                                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                                
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>


                
                </div>
                
                
                <div class="modal inmodal" id="myAhcUrllModel" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Employee Registration URL</h4>
                                        </div>
                                        
                                        <div class="modal-body">
                                          
                                        <div class="form-group" style="color:">
                                         <h5><span style="color:red">Employee Registration URL  </span>: <a target="_blank" href="<?php echo e(env('APP_URL')); ?>registration/<?php echo e(Auth::user()->id); ?>/<?php echo e(Auth::user()->slug); ?>" ><?php echo e(env('APP_URL')); ?>registration/<?php echo e(Auth::user()->id); ?>/<?php echo e(Auth::user()->slug); ?></a> </h5>
                                        </div>
                                        <div class="modal-footer">
                                          
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            
                            
                            

<?php $__env->stopSection(); ?>


<?php echo $__env->make('hr.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/hr/home.blade.php ENDPATH**/ ?>