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
    <center><div class="logo" style="text-align:center;"><img src="https://ssashealthcare.com/wp-content/uploads/2022/01/SSAS-Logo1.png" height="150px" width="120px"></img></div></center>
    
    <h1><center><b>Total Booking Leads Status</b></center></h1>


 <div class="row">
     <div class="col-lg-3">
                   
                    </div>
                    <div class="col-lg-3">
                    <a href="<?php echo e(route('admin.my.booking.schedule')); ?>" style="color:inherit;">
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
                    <a href="<?php echo e(route('admin.mis')); ?>" style="color:inherit;">
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
                    <a href="<?php echo e(route('admin.my.booking.mdra')); ?>" style="color:inherit;">
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
                    <a href="<?php echo e(route('admin.my.booking')); ?>" style="color:inherit;">
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
                    <a href="<?php echo e(route('admin.my.booking.cancel')); ?>" style="color:inherit;">
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
                    <a href="<?php echo e(route('admin.my.booking.mdradone')); ?>" style="color:inherit;">
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


<!--<div class="row">-->
<!--                    <div class="col-lg-12">-->
<!--                        <div class="ibox ">-->
<!--                            <div class="ibox-title">-->
<!--                                <h5>Trending Packages</h5>-->
<!--                                <div class="ibox-tools">-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="ibox-content">-->
<!--                                <div class="row">-->
<!--                                <div class="col-lg-8">-->
<!--                                    <div class="flot-chart">-->
<!--                                        <div class="flot-chart-content" id="flot-dashboard-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="756" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 756.75px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 72px; text-align: center;">Jan 03</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 141px; text-align: center;">Jan 06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 210px; text-align: center;">Jan 09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 279px; text-align: center;">Jan 12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 348px; text-align: center;">Jan 15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 417px; text-align: center;">Jan 18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 486px; text-align: center;">Jan 21</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 555px; text-align: center;">Jan 24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 624px; text-align: center;">Jan 27</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 184px; left: 693px; text-align: center;">Jan 30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 170px; left: 18px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 6px; text-align: right;">250</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 91px; left: 6px; text-align: right;">500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 51px; left: 6px; text-align: right;">750</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 12px; left: 0px; text-align: right;">1000</div></div><div class="flot-y-axis flot-y2-axis yAxis y2Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 170px; left: 745px;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 142px; left: 745px;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 114px; left: 745px;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 85px; left: 745px;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 57px; left: 745px;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 29px; left: 745px;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 745px;">30</div></div></div><canvas class="flot-overlay" width="756" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 756.75px; height: 200px;"></canvas><div class="legend"><div style="position: absolute; width: 106.797px; height: 36.4688px; top: 14px; left: 35px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:14px;left:35px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #000000;padding:1px"><div style="width:4px;height:0;border:5px solid #1ab394;overflow:hidden"></div></div></td><td class="legendLabel">Number of Packages</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #000000;padding:1px"><div style="width:4px;height:0;border:5px solid #1C84C6;overflow:hidden"></div></div></td><td class="legendLabel">.</td></tr></tbody></table></div></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-lg-4">-->
                                    
<!--                                    <ul class="stat-list">-->
<!--                                        <li class="lazur-bg">-->
<!--                                           <a href="<?php echo e(route('admin.my.booking.schedule')); ?>">-->
<!--                                            <small> <span> Appointment To Be Contacted </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['process']); ?></div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                           <a href="<?php echo e(route('admin.my.booking.pending')); ?>">-->
<!--                                            <small> <span> Appointment Show/ No Show </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['shownoshow']); ?></div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li class="lazur-bg">-->
<!--                                           <a href="<?php echo e(route('admin.my.booking.mdra')); ?>">-->
<!--                                            <small> <span> Appointment MDRA </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['notdone']); ?></div>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="<?php echo e(route('admin.my.booking')); ?>">-->
<!--                                            <small> <span>  Appointment Partial Process Done</span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['done']); ?></div>-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        
<!--                                        <li class="lazur-bg">-->
<!--                                           <a href="<?php echo e(route('admin.my.booking.cancel')); ?>">-->
<!--                                            <small> <span>Appointment Cancelled  </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['cancelled']); ?></div>-->
<!--                                        </a>-->
<!--                                        </li>-->
                                        
<!--                                         <li>-->
<!--                                           <a href="<?php echo e(route('admin.my.booking.mdradone')); ?>">-->
<!--                                            <small> <span>Appointment Closed Booking </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['closed']); ?></div>-->
<!--                                        </a>-->
<!--                                        </li>-->
<!--                                        <li class="lazur-bg">-->
<!--                                           <a href="<?php echo e(route('admin.mis')); ?>">-->
<!--                                            <small> <span> Appointment Total Booking </span></small>-->
<!--                                            <div class="stat-percent"><?php echo e($data['total']); ?></div>-->
<!--                                            </a>-->
                                        
<!--                                        </li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!---Disable-row->
<div class="row">
     <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking.schedule')); ?>">
                <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-address-card fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Appointment <br/>To Be Contacted </span>
                                <h2 class="font-bold"><?php echo e($data['process']); ?></h2>
                            </div>
                        </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking.pending')); ?>">
                <div class="widget style1 blue-bg">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-address-card fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span> Appointment  <br/>Show/ No Show</span>
                                <h2 class="font-bold"><?php echo e($data['shownoshow']); ?></h2>
                            </div>
                        </div>
                </div>
            </a>
            </div>
            <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking')); ?>">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-address-card fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span>  Appointment  <br/>Partial Process Done </span>
                            <h2 class="font-bold"><?php echo e($data['done']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking.mdra')); ?>">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-address-card fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Appointment  <br/> MDRA </span>
                            <h2 class="font-bold"><?php echo e($data['notdone']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking.cancel')); ?>">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-address-card fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Appointment <br/>Cancelled </span>
                            <h2 class="font-bold"><?php echo e($data['cancelled']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
             <div class="col-lg-3">
            <a href="<?php echo e(route('admin.mis')); ?>">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-address-card fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span>  Appointment <br/>Total Booking </span>
                            <h2 class="font-bold"><?php echo e($data['total']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            
             <div class="col-lg-3">
            <a href="<?php echo e(route('admin.my.booking.mdradone')); ?>">
                <div class="widget style1 blue-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-address-card fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span>  Appointment <br/>Closed Booking </span>
                            <h2 class="font-bold"><?php echo e($data['closed']); ?></h2>
                        </div>
                    </div>
                </div>
                </a>
            </div>
    
            <!--<div class="col-lg-6">-->
            <!--<a href="<?php echo e(route('admin.list.company')); ?>">-->
            <!--    <div class="widget style1 blue-bg">-->
            <!--            <div class="row">-->
            <!--                <div class="col-4 text-center">-->
            <!--                    <i class="fa fa-address-card fa-5x"></i>-->
            <!--                </div>-->
            <!--                <div class="col-8 text-right">-->
            <!--                    <span> Total Company </span>-->
            <!--                    <h2 class="font-bold"><?php echo e($data['company']); ?></h2>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--    </div>-->
            <!--</a>-->
            <!--</div>-->
            <!--<div class="col-lg-6">-->
            <!--<a href="<?php echo e(route('admin.list.package')); ?>">-->
            <!--    <div class="widget style1 lazur-bg">-->
            <!--        <div class="row">-->
            <!--            <div class="col-4">-->
            <!--                <i class="fa fa-bank  fa-5x"></i>-->
            <!--            </div>-->
            <!--            <div class="col-8 text-right">-->
            <!--                <span> Total Package </span>-->
            <!--                <h2 class="font-bold"><?php echo e($data['packages']); ?></h2>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    </a>-->
            <!--</div>-->
           <!----end-disable---code-->
        </div>
    <h1><center><b>Company Status Dashboard</b></center></h1>
    <h4><b><a href="<?php echo e(route('admin.list.company')); ?>">Total Company Registered: <?php echo e($totalCompany); ?></a></b></h4>
    
    <div class="row">
               
                    <div class="col-lg-12">

                       <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Companies </h5>
                                        <div class="ibox-tools">
                                            
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="row">
                                            <div class="col-lg-12">
                                            <table class="table table-striped no-margins">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Company logo</th>
                                        <th>Company Name</th>
                                        <th>HR Email Id</th>
                                        <th>Total Employee Registered</th>
                                         <th>Appointment TBC </th>
                                          <th>Partial Process Done</th>
                                        <th>MDRA</th>
                                       
                                        <th>Appointment Cancel</th>
                                         <th>Feedback</th>
                                          <th>Event</th>
                                        
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $companaies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                       <td><?php echo e($key+1); ?></td>
                                        <td><img src="<?php echo e(env('APP_URL')); ?><?php echo e($val->image); ?>" height="35px" width="35px"/></td>
                                        <td><?php echo e($val->company); ?></td>
                                         <td><?php echo e($val->email); ?></td>
                                        <td style="text-align:center;"><?php echo e($val->total_employee); ?></td>
                                        <td style="text-align:center;"><?php echo e($val->vaccination_pending); ?></td>
                                        <td style="text-align:center;"><?php echo e($val->vaccination_done); ?></td>
                                        <td style="text-align:center;"><?php echo e($val->vaccination_not_done); ?></td>
                                        <td style="text-align:center;"><?php echo e($val->vaccination_cancel); ?></td>
                                        <td>
                                            <?php echo Html::decode(link_to_route('admin.list.companyfeedback','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'View'])); ?>

                                        </td>
<td>
                                            <?php echo Html::decode(link_to_route('admin.list.companyevent','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'View'])); ?>

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

                    </div>


                </div>
                
               <!--<div class="row text-center">-->
               <!--                 <div class="col-lg-6">-->
               <!--                     <canvas id="doughnutChart2" width="80" height="80" style="margin: 18px auto 0"></canvas>-->
               <!--                     <h5 >Kolter</h5>-->
               <!--                 </div>-->
               <!--                 <div class="col-lg-6">-->
               <!--                     <canvas id="doughnutChart" width="80" height="80" style="margin: 18px auto 0"></canvas>-->
               <!--                     <h5 >Maxtor</h5>-->
               <!--                 </div>-->
               <!--             </div>-->
    
                </div>
                
                
                <script>
        $(document).ready(function() {

            let toast = $('.toast');

            setTimeout(function() {
                toast.toast({
                    delay: 5000,
                    animation: true
                });
                toast.toast('show');

            }, 2200);

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["AHC","Pre" ],
                datasets: [{
                    data: ['<?=$data["bookings"]?>','<?=$data["prebookings"]?>'],
                    backgroundColor: ["#a3e1d4","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });

        $(window).bind("scroll", function () {
            let toast = $('.toast');
            toast.css("top", window.pageYOffset + 20);

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/AHC/resources/views/admin/home.blade.php ENDPATH**/ ?>