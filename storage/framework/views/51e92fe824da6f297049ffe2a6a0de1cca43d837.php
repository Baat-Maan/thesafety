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
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo e(Html::style('public/assest/css/bootstrap.min.css')); ?>

    <?php echo e(Html::style('public/assest/font-awesome/css/font-awesome.css')); ?>


    <?php echo e(Html::style('public/assest/css/animate.css')); ?>

    <?php echo e(Html::style('public/assest/css/style.css')); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

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
                            <span class="block m-t-xs font-bold"><?php echo e($result->company ?? 'Company Name'); ?></span>
                            <span class="text-muted text-xs block"><?php echo e($result->name ?? 'User Name'); ?> <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="<?php echo e(route('hr.updateProfile')); ?>">Profile Update</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
</li>
                        </ul>
                    </div>
                    <div class="logo-element">
                    <?php echo e(Html::image($result->image,'', ['class'=>'','height'=>'20'])); ?>

                    </div>
                </li>
                
                <li <?php if($url=='company/home') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.home')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li <?php if($url=='company/employee-list') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.list.employee')); ?>"><i class="fa fa-users"></i> <span class="nav-label">Employee Management</span></a>
                </li>
                <li <?php if($url=='company/package-bookings') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.my.booking')); ?>"><i class="fa fa-book"></i> <span class="nav-label"> Package Bookings List</span></a>
                </li>
                <li <?php if($url=='company/mis') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.mis')); ?>"><i class="fa fa-book"></i> <span class="nav-label"> MIS Report</span></a>
                </li>
                <li <?php if($url=='company/package-list') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.list.package')); ?>"><i class="fa fa-list-ol"></i> <span class="nav-label">Package List</span></a>
                </li>
                <li <?php if($url=='company/new-event' || $url=='company/event-list' || $url=='company/edit-event') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.list.event')); ?>"><i class="fa fa-eraser"></i> <span class="nav-label">Event Management</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(route('hr.new.event')); ?>">Add New</a></li>
                        <li><a href="<?php echo e(route('hr.list.event')); ?>">View List</a></li>
                       
                    </ul>
                </li>

                

                <li <?php if($url=='company/update-profile') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('hr.updateProfile')); ?>"><i class="fa fa-user-o"></i> <span class="nav-label">Profile Update</span></a>
                </li>
               
               
                <li class="special_link">
                <a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

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
                    <span class="m-r-sm text-muted welcome-message">Welcome to <?php echo e($result->company); ?></span>
                </li>
                
               


                <li>
                <a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                                    </a>
                   
                </li>
               
            </ul>

        </nav>
        </div>

        <form id="logout-form" action="<?php echo e(route('company.logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    
        <?php echo $__env->make('hr.layouts.adminError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('body'); ?>
      
            <div class="footer">
            <div class="float-right">
               <strong>Version</strong> 1.0
            </div>
            <div>
                <strong>Copyright</strong> AHC Company
            </div>
        </div>
        </div>
        
    </div>

    <!-- Mainly scripts -->
    <?php echo e(Html::script('public/assest/js/jquery-3.1.1.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/popper.min.js')); ?>

    <?php echo e(Html::script('public/assest/js/bootstrap.js')); ?>

    <?php echo e(Html::script('public/assest/js/plugins/metisMenu/jquery.metisMenu.js')); ?>


    <!-- Flot -->
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

    
  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
            </script>
    <?php if($url=='company/home') {
 ?> 
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
            var month = '<?=$month?>';
            var year = '<?=$year?>';
         
                var data2 = [
                [gd(year, month, 1), '<?=$completed["1"]?>'], [gd(year, month, 2), '<?=$completed["2"]?>'], [gd(year, month, 3), '<?=$completed["3"]?>'], [gd(year, month, 4), '<?=$completed["4"]?>'],
                [gd(year, month, 5), '<?=$completed["5"]?>'], [gd(year, month, 6), '<?=$completed["6"]?>'], [gd(year, month, 7), '<?=$completed["7"]?>'], [gd(year, month, 8), '<?=$completed["8"]?>'],
                [gd(year, month, 9), '<?=$completed["9"]?>'], [gd(year, month, 10), '<?=$completed["10"]?>'], [gd(year, month, 11), '<?=$completed["11"]?>'], [gd(year, month, 12), '<?=$completed["12"]?>'],
                [gd(year, month, 13), '<?=$completed["13"]?>'], [gd(year, month, 14), '<?=$completed["14"]?>'], [gd(year, month, 15), '<?=$completed["15"]?>'], [gd(year, month, 16), '<?=$completed["16"]?>'],
                [gd(year, month, 17), '<?=$completed["17"]?>'], [gd(year, month, 18), '<?=$completed["18"]?>'], [gd(year, month, 19), '<?=$completed["19"]?>'], [gd(year, month, 20), '<?=$completed["20"]?>'],
                [gd(year, month, 21), '<?=$completed["21"]?>'], [gd(year, month, 22), '<?=$completed["22"]?>'], [gd(year, month, 23), '<?=$completed["23"]?>'], [gd(year, month, 24), '<?=$completed["24"]?>'],
                [gd(year, month, 25), '<?=$completed["25"]?>'], [gd(year, month, 26), '<?=$completed["26"]?>'], [gd(year, month, 27), '<?=$completed["27"]?>'], [gd(year, month, 28), '<?=$completed["28"]?>']
                
            ];

            var data3 = [
                [gd(year, month, 1), '<?=$bookingTotal["1"]?>'], [gd(year, month, 2), '<?=$bookingTotal["2"]?>'], [gd(year, month, 3), '<?=$bookingTotal["3"]?>'], [gd(year, month, 4), '<?=$bookingTotal["4"]?>'],
                [gd(year, month, 5), '<?=$bookingTotal["5"]?>'], [gd(year, month, 6), '<?=$bookingTotal["6"]?>'], [gd(year, month, 7), '<?=$bookingTotal["7"]?>'], [gd(year, month, 8), '<?=$bookingTotal["8"]?>'],
                [gd(year, month, 9), '<?=$bookingTotal["9"]?>'], [gd(year, month, 10), '<?=$bookingTotal["10"]?>'], [gd(year, month, 11), '<?=$bookingTotal["11"]?>'], [gd(year, month, 12), '<?=$bookingTotal["12"]?>'],
                [gd(year, month, 13), '<?=$bookingTotal["13"]?>'], [gd(year, month, 14), '<?=$bookingTotal["14"]?>'], [gd(year, month, 15), '<?=$bookingTotal["15"]?>'], [gd(year, month, 16), '<?=$bookingTotal["16"]?>'],
                [gd(year, month, 17), '<?=$bookingTotal["17"]?>'], [gd(year, month, 18), '<?=$bookingTotal["18"]?>'], [gd(year, month, 19), '<?=$bookingTotal["19"]?>'], [gd(year, month, 20), '<?=$bookingTotal["20"]?>'],
                [gd(year, month, 21), '<?=$bookingTotal["21"]?>'], [gd(year, month, 22), '<?=$bookingTotal["22"]?>'], [gd(year, month, 23), '<?=$bookingTotal["23"]?>'], [gd(year, month, 24), '<?=$bookingTotal["24"]?>'],
                [gd(year, month, 25), '<?=$bookingTotal["25"]?>'], [gd(year, month, 26), '<?=$bookingTotal["26"]?>'], [gd(year, month, 27), '<?=$bookingTotal["27"]?>'], [gd(year, month, 28), '<?=$bookingTotal["28"]?>']
                
              
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
                    max: 50,
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
            })
        });
    </script>

   
     <?php } ?>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:58:23 GMT -->
</html>

<div class="modal inmodal" id="myModalViewPackage" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            
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
                                function view_package(id,bid){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                
                                    
                                
                                      
                                
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.post')); ?>",
                                        data:{id:id,bid:bid},
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
                                            <h4 class="modal-title"  >View User Details</h4>
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
                                            <h4 class="modal-title"  >Booking Package</h4>
                                        </div>
                                        <?php echo e(Form::open(['route'=>['employee.booking.package'],'class'=>'classname','id'=>'myForm','files'=>'true'])); ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body ">
                                            
                                        
                                            <div class="form-group" style="color:red"><label>Choose Booking Date</label> <input type="date" name="booking_date" placeholder="Enter Booking" class="form-control"></div>
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
                            </div><?php /**PATH C:\xampp\htdocs\health\resources\views/hr/layouts/app.blade.php ENDPATH**/ ?>