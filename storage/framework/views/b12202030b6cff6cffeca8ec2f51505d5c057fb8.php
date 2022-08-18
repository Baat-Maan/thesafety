<!DOCTYPE html>
<?php /*
<title>{{ config('app.name', 'Laravel') }}</title>
    {{ Html::style('public/assest/css/bootstrap.min.css')}}
    {{ Html::style('public/assest/font-awesome/css/font-awesome.css')}}

    {{ Html::style('public/assest/css/animate.css')}}
    {{ Html::style('public/assest/css/style.css')}}
    */ ?>

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:58:20 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<link rel="icon" href="<?php echo e(env('APP_URL')); ?>public/fav-icon.png" sizes="32x32" />
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo e(Html::style('public/assest/css/bootstrap.min.css')); ?>

    <?php echo e(Html::style('public/assest/font-awesome/css/font-awesome.css')); ?>


    <?php echo e(Html::style('public/assest/css/animate.css')); ?>

    <?php echo e(Html::style('public/assest/css/style.css')); ?>

    <?php echo e(Html::script('public/assest/datapicker/jquery-3.5.0.min.js')); ?>

    <?php echo e(Html::style('public/assest/datapicker/zebra_datepicker.min.css')); ?>

    <?php echo e(Html::script('public/assest/datapicker/jquery-3.5.0.min.js')); ?>



<style>
    .Zebra_DatePicker{ z-index:99999 !important; }
    .Zebra_DatePicker_Icon{ top: 9px!important; }
    </style>
    <style>
     
        </style>

</head>
<?php
    $result  = DB::table('users')->where('id', '=', Auth::user()->id)->first();
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
      $url = trim($uri, '/');
    ?>
<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <?php echo e(Html::image($result->image,'', ['class'=>'','height'=>'100','width'=>'100'])); ?>

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="text-muted text-xs block"><?php echo e($result->name); ?> <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!--<li><a class="dropdown-item" href="<?php echo e(route('call_center.updateProfile')); ?>">Profile Update</a></li>-->
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('BACK TO CALL CENTER PANEL')); ?>

                                    </a>
</li>
                        </ul>
                    </div>
                    <div class="logo-element">
                    <?php echo e(Html::image($result->image,'', ['class'=>'','height'=>'20'])); ?>

                    </div>
                </li>
             
                <li <?php if($url=='call-center/dashboard') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('call_center.home')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
               
             
              
                
             
                

                <li <?php if($url=='call-center/mis' || $url=='call-center/package-bookings-mdra'|| $url=='call-center/package-bookings-mdra-done' || $url=='call-center/package-bookings-pending' || $url=='call-center/package-bookings' || $url=='call-center/package-bookings-schedule-a-call' || $url=='call-center/package-bookings-cancel') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('call_center.my.booking.schedule')); ?>"><i class="fa fa-dribbble"></i> <span class="nav-label">Booking List </span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(route('call_center.my.booking.schedule')); ?>">To be contacted</a></li>
                        <li><a href="<?php echo e(route('call_center.my.booking.pending')); ?>">Show/ No Show</a></li>
                        
                        <li><a href="<?php echo e(route('call_center.my.booking.mdra')); ?>">Medical Done Report Awaited </a></li>
                        
                        <li><a href="<?php echo e(route('call_center.my.booking')); ?>">Medical Partial Process Done </a></li>
                        
                        <li><a href="<?php echo e(route('call_center.my.booking.cancel')); ?>">Appointment Cancel </a></li>
                        <li><a href="<?php echo e(route('call_center.my.booking.mdradone')); ?>">Closed Cases </a></li>
                         <li><a href="<?php echo e(route('call_center.mis')); ?>">MIS Report </a></li>
                    </ul>
                </li>
          
                
  <li <?php if($url=='call-center/package-bookings') { ?> class="active" <?php } ?>>
                                            <a href="<?php echo e(route('call_center.list.feedback')); ?>"><i class="fa fa-book"></i> <span class="nav-label"> Feedback List</span></a>
                </li>
                
                <!--<li <?php if($url=='call-center/update-profile') { ?> class="active" <?php } ?>>-->
                <!--    <a href="<?php echo e(route('call_center.updateProfile')); ?>"><i class="fa fa-user-o"></i> <span class="nav-label">Profile Update</span></a>-->
                <!--</li>-->
               
                <li class="special_link">
                <a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <?php echo e(__('BACK TO CALL CENTER PANEL')); ?>

                                    </a>

                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
           
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"></span>
                </li>
                
               


                <li>
                <a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <?php echo e(__('BACK TO CALL CENTER PANEL')); ?>

                                    </a>
                   
                </li>
               
            </ul>

        </nav>
        </div>

        <form id="logout-form" action="<?php echo e(route('call.center.logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    
        <?php echo $__env->make('admin.layouts.adminError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('body'); ?>
      
        <!--    <div class="footer">-->
        <!--    <div class="float-right">-->
        <!--       <strong>Version</strong> 1.0-->
        <!--    </div>-->
        <!--    <div>-->
        <!--        <strong>Copyright</strong> TOS Company &copy; 2014-2022-->
        <!--    </div>-->
        <!--</div>-->
        </div>
        
    </div>
   
    <!-- Mainly scripts -->
    <?php echo e(Html::script('public/assest/js/jquery-3.1.1.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/popper.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/bootstrap.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/metisMenu/jquery.metisMenu.js')); ?>

    

    <!-- Flot <?php echo e(Html::script('public/assest/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>

-->
    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.tooltip.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.spline.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.resize.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.pie.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.symbol.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/flot/jquery.flot.time.js')); ?>


    <!-- Peity -->
    <?php echo e(Html::script('public/assest/js/plugins/peity/jquery.peity.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/demo/peity-demo.js')); ?>


    <!-- Custom and plugin javascript -->
    <?php echo e(Html::script('public/assest/js/inspinia.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/pace/pace.min.js')); ?>


    <!-- jQuery UI -->
    <?php echo e(Html::script('public/assest/js/plugins/jquery-ui/jquery-ui.min.js')); ?>


    <!-- Jvectormap -->
    <?php echo e(Html::script('public/assest/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>


    <!-- EayPIE -->
    <?php echo e(Html::script('public/assest/js/plugins/easypiechart/jquery.easypiechart.js')); ?>


    <!-- Sparkline -->
    <?php echo e(Html::script('public/assest/js/plugins/sparkline/jquery.sparkline.min.js')); ?>


    <!-- Sparkline demo data  -->
    <?php echo e(Html::script('public/assest/js/demo/sparkline-demo.js')); ?>


    <?php echo e(Html::script('public/assest/datapicker/zebra_datepicker.min.js')); ?>

    <?php echo e(Html::script('public/assest/datapicker/zebra_pin.min.js')); ?>


    <script>
 $('#datepickerr').Zebra_DatePicker({
						disabled_dates: [
							
								
							  ],
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
                     $('#from').Zebra_DatePicker({
					
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
                    
                     $('#to').Zebra_DatePicker({
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
                    
                     $('#efrom').Zebra_DatePicker({
					
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
                    
                     $('#eto').Zebra_DatePicker({
                             				  // all days, all months, all years as long
                                                        // as the weekday is 0 or 6 (Sunday or Saturday)
                    });
</script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
    <script>
      function deleteConfirm() {
        if (!confirm('Are you sure you want to delete?')) {
          return false
        }
      }
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:58:23 GMT -->
</html>

<div class="modal inmodal" id="myModalViewPackage" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">View Package</h4>
                                        </div>
                                        <div class="modal-body packageModelView">
                                          
                                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function view_package(id){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                
                                    $('.packageModelView').empty();
                                
                                      
                                
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.post')); ?>",
                                        data:{id:id},
                                        success:function(data){
                                            //alert(data);

                                            $('.packageModelView').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
                                </script>



<div class="modal inmodal" id="userModelDetails" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >View  Details</h4>
                                        </div>
                                       
                                        <div class="modal-body ">
                                            
                                        
                                             <div class="userModelDetails">

                                            </div>     
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <script>
                                function view_user(id){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.userModelDetails').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.details.user')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.userModelDetails').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
                                </script>





<div class="modal inmodal" id="uploadReportBookingPackage" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Upload Booking Report</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['call_center.report.upload'],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body ">
                                            
                                        
                                            <div class="form-group" style="color:red"><label>Choose Report</label>
                                             <input type="file" required name="report_file" placeholder="Upload Report" class="form-control"></div>
                                            <div class="uploadReportBookingPackage">

                                            </div>     
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>       
                                    </div>
                                </div>
                            </div>
                            <script>
                            
                            
                            
                                function uploadReportBookingPackage(id){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.uploadReportBookingPackage').empty().append('<input type="hidden" name="upload_booking_id" value="'+id+'" class="" />');
                                }

                                function getCities(){
                                    var id = $('.state_id').val();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.drop.cities')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.cityDropdown').empty().append(data);
                                        }
                                        });
                                }
                                function view_dependent(id,bid){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.userModelDetails').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.details.view_dependent')); ?>",
                                        data:{id:id,bid:bid},   
                                        success:function(data){
                                            //alert(data);

                                            $('.userModelDetails').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
                                
                                </script>




<div class="modal inmodal" id="myCancelModel" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Cancel Booking</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['call_center.booking.cancel'],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                          
                                        <div class="form-group" style="color:">
                                        <label>Enter Reason</label>
                                        <input type="hidden" name="b_id" class="idBookingC">
                                        <input type="hidden" name="step" class="idBookingCStep" >
                                        <?php echo e(Form::select('cancel_reason', ['Cancelled By Client'=>'Cancelled By Client','Doctor/Slot Not Available'=>'Doctor/Slot Not Available','Client Not Interested'=>'Client Not Interested'],'', ['class'=>'form-control','placeholder'=>'Select Reason'])); ?></div>
                                            
                                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit"  class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                            </div>

                            <script>
                                function myBookingCancelUpdate(id,step){
                                   $('.idBookingC').val(id);
                                   $('.idBookingCStep').val(step);
                                }
                                </script>



<script>
                                function myBookingReschedule(id,step){
                                   $('.idBookingC').val(id);
                                   $('.idBookingCStep').val(step);
                                }


                                function checkForm(){





var booking_date = $('.booking_date').val();
if(booking_date==''){
    alert('Please select booking date');
    return false;
}

var state_id = $('.state_id').val();
if(state_id==''){
    alert('Please select State');
    return false;
}
var city_id = $('.city_id').val();
if(city_id==''){
    alert('Please select City');
    return false;
}
var dc_id = $('.dc_id').val();
if(dc_id==''){
    alert('Please select DC');
    return false;
}
return true;

}
function booking(id){

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({
    type:'POST',
    url:"<?php echo e(route('ajaxRequest.booking.user')); ?>",
    data:{id:id},   
    success:function(data){
        //alert(data);

        $('.bookingFormPackage').empty().append(data);
    }
    });


}
function getCities(){
var id = $('.state_id').val();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
    type:'POST',
    url:"<?php echo e(route('ajaxRequest.drop.citiesc')); ?>",
    data:{id:id},   
    success:function(data){
        //alert(data);

        $('.cityDropdownc').empty().append(data);
    }
    });
}
function getDc(){
    
var id = $('.dc_city_id').val();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
    type:'POST',
    url:"<?php echo e(route('ajaxRequest.drop.dc')); ?>",
    data:{id:id},   
    success:function(data){
        //alert(data);

        $('.cityDropdownDc').empty().append(data);
    }
    });
}






                                </script>
<div class="modal inmodal" id="myRechedulelModel" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Reschedule Booking</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['ajaxRequest.center.booking.rechedule'],'class'=>'classname','id'=>'myForm','files'=>'true','onsubmit'=>'return checkForm()'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">

                                        <input type="hidden" name="b_id" class="idBookingC">
                                        <input type="hidden" name="step" class="idBookingCStep" >
     
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <div class="form-group " style="color:green"><label>Choose Booking Mode</label> <br>
                                            <!--<?php echo e(Form::select('booking_mode', ['DC-Visit'=>'DC-Visit','Home Collection'=>'Home Collection'],'', ['class'=>'form-control booking_mode'])); ?>-->
                                            
                                            
                                             <label class="radio-inline">
    <input type="radio" id="tres_important" name="booking_mode" value="Home Collection" class="booking_mode">Home Collection</label>

    <label class="radio-inline">
    <input type="radio" id="important" name="booking_mode" value="DC-Visit" class="booking_mode">Diagnostic Center Visit</label>
                                        </div></div>
                                        </div>
                                        <!-- <div class="form-group" style="color:green"><label>Choose State</label> -->
                                        <!--<?php echo e(Form::select('state_id', [],'', ['class'=>'form-control state_id','placeholder'=>'Select State','onchange'=>'getCities()'])); ?>-->
                                        <!--</div>-->

                                        <!--<div class="form-group" style="color:green"><label>Choose City</label> -->
                                        <!--<div class="cityDropdownc">-->
                                        <!--<?php echo e(Form::select('city_id', [],'', ['class'=>'form-control city_id','placeholder'=>'Select City','onchange'=>'getDc()'])); ?>-->
                                      
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="form-group" style="color:green"><label>Choose Dc</label> -->
                                        <!--<div class="cityDropdownDc">-->
                                        <!--<?php echo e(Form::select('dc_id', [],'', ['class'=>'form-control dc_id','placeholder'=>'Select Dc'])); ?>-->
                                      
                                        <!--    </div>-->
                                        <!--</div>-->


                                        <div class="home_visit" style="display:none;">
                                 <div class="form-group" style="color:green"><label> State</label> 
                                        <div class="">
                                      <input type="text" value="<?php echo e(old('state_id')); ?>" name="state_id" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('state_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>City</label> 
                                        <div class="cityDropdownc">
                                     <input type="text" value="<?php echo e(old('city_id')); ?>" name="city_id" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('city_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>Address</label> 
                                        <div class="">
                                    <input type="address" value="<?php echo e(old('address_home')); ?>" name="address_home" class="form-control">
                                    <span class="" style="color:red"> <?php echo e($errors->first('address_home')); ?> <span>
                                      
                                            </div>
                                        </div>
                               
                                </div>
                                
                                <div class="dc_visit" style="color:green; display:none;">
                                    
                                    <div class="form-group" style="color:green"><label>State</label> 
                                        <div class="cityState">
                                        <?php echo e(Form::select('dc_state_id', [],'', ['class'=>'form-control dc_state_id','placeholder'=>'Select State','onchange'=>'getDCCities()'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_state_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>City</label> 
                                        <div class="cityDropdowncdc">
                                   <?php echo e(Form::select('dc_city_id', [],'', ['class'=>'form-control','placeholder'=>'Select City','onchange'=>'getDc()'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_city_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                        
                                         <div class="form-group" style="color:green"><label>Choose Diagnostic Center</label> 
                                        <div class="cityDropdownDc">
                                   <?php echo e(Form::select('dc_id', [],'', ['class'=>'form-control','placeholder'=>'Select Diagnostic Center'])); ?>

                                    <span class="" style="color:red"> <?php echo e($errors->first('dc_id')); ?> <span>
                                      
                                            </div>
                                        </div>
                                
                                </div>

                                        <div class="form-group" style="color:">
                                        <label>ReSchedule Date</label>
                                        
                                         <input type="date" required 
                                         id="datepickerrr" data-zdp_readonly_element="true"
                                          class="form-control rechedule_date" name="rechedule_date"></div>
                                            
                                         
                                        <div class="form-group" style="color:">
                                        <label>Enter Reason</label>
                                       
                                         <textarea name="reschedule_reason" required placeholder="Enter Reason" class="form-control reschedule_reason"></textarea></div>
                                            
                                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit"  class="btn btn-primary">Save changes</button>
                                        </div>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                </div>
                            </div>

                            
                            <?php echo e(Html::script('public/assest/datapicker/zebra_datepicker.min.js')); ?>

    <?php echo e(Html::script('public/assest/datapicker/zebra_pin.min.js')); ?>

<?php
 
date_default_timezone_set('Asia/Kolkata');
$today =  date('d m Y');
$yes=Date('d m Y', strtotime('+1 days'));
$NewDateNextDay=Date('d m Y', strtotime('+2 days'));



 $dissableDate = "'$today','$yes','$NewDateNextDay',";

?>
    
    <script>
    $(document).ready( function () {
  $('.booking_mode').click(function(){
                                    
                                
                                   
                                    
                                    var type = $('.booking_mode:checked').val();
                                              if(type=='Home Collection'){
                                                  $('.home_visit').show();
                                                  $('.dc_visit').hide();
                                              } else if(type=='DC-Visit'){
                                                  $('.home_visit').hide();
                                                  $('.dc_visit').show();
                                                
                                                  getDcState();
                                              }
                                });
                                
                                
    
    });

function getDcState(){
    
var id = $('.idBookingC').val();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
    type:'POST',
    url:"<?php echo e(route('ajaxRequest.drop.dcstate')); ?>",
    data:{id:id},   
    success:function(data){
        //alert(data);

        $('.cityState').empty().append(data);
    }
    });
}
                                          
                                          
                                function getDCCities(){
                                    
                                    var id = $('.dc_state_id').val();
                                    console.log(23424,id)
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.drop.citiesc')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.cityDropdowncdc').empty().append(data);
                                        }
                                        });
                                }
 $('#datepickerrr').Zebra_DatePicker({
    direction: true,
						disabled_dates: [
								<?=$dissableDate?>
								'* * * 0,7'
								
							  ],
                    });
</script><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/call_center/layouts/app.blade.php ENDPATH**/ ?>