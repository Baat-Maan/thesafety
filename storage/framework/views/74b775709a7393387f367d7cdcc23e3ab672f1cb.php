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

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo e(Html::style('public/assest/css/bootstrap.min.css')); ?>

    <?php echo e(Html::style('public/assest/font-awesome/css/font-awesome.css')); ?>

    <?php echo e(Html::style('public/assest/css/plugins/sweetalert/sweetalert.css')); ?>

    <?php echo e(Html::style('public/assest/css/animate.css')); ?>

    <?php echo e(Html::style('public/assest/css/style.css')); ?>

    <?php echo e(Html::style('public/assest/datapicker/zebra_datepicker.min.css')); ?>

    <style>
        .Zebra_DatePicker{ z-index:99999 !important; }
        .Zebra_DatePicker_Icon{ top: 9px!important; }
        </style>


</head>
<?php
    $result  = DB::table('users')->where('id', '=', Auth::user()->id)->first();
    $companyDetails  = DB::table('users')->where('id', '=', Auth::user()->company_id)->first();
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
                            <li><a class="dropdown-item" href="<?php echo e(route('employee.updateProfile')); ?>">Profile Update</a></li>
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
                <?php


                ?>
                <li <?php if($url=='user/dashboard') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.home')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li <?php if($url=='user/my-bookings') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.my.booking')); ?>"><i class="fa fa-book"></i> <span class="nav-label">My Booking</span></a>
                </li>
                <li <?php if($url=='user/package-list') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.list.package')); ?>"><i class="fa fa-list-ol"></i> <span class="nav-label">All Package</span></a>
                </li>
                <li <?php if($url=='user/event-list') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.list.event')); ?>"><i class="fa fa-users"></i> <span class="nav-label">Event Management</span></a>
                </li>
                <li <?php if($url=='user/new-dependent' || $url=='user/dependent-list' || $url=='user/edit-dependent') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.list.dependent')); ?>"><i class="fa fa-dribbble"></i> <span class="nav-label">Dependents</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(route('employee.new.dependent')); ?>">Add New</a></li>
                        <li><a href="<?php echo e(route('employee.list.dependent')); ?>">View List</a></li>
                    </ul>
                </li>

                <li <?php if($url=='user/faq') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.faq')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">F & Q</span></a>
                </li>


                <li <?php if($url=='user/update-profile') { ?> class="active" <?php } ?>>
                    <a href="<?php echo e(route('employee.updateProfile')); ?>"><i class="fa fa-user-o"></i> <span class="nav-label">Profile Update</span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Welcome to <?php echo e($companyDetails->name); ?></span>
                </li>
                <li>
                <?php echo e(Html::image($companyDetails->image,'', ['class'=>'','height'=>'40','width'=>'40'])); ?>

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

        <form id="logout-form" action="<?php echo e(route('user.logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    
        <?php echo $__env->make('employee.layouts.adminError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    <?php echo e(Html::script('public/assest/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>


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

    <?php echo e(Html::script('public/assest/js/plugins/sweetalert/sweetalert.min.js')); ?>


   
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
</body>

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


                            <script>
                                function checkForm(){

                                    var mydepended_self = $('.mydepended_self').val();
                                    if(mydepended_self!='self'){
                                        var dependedCheck=0;
                                        $('[name^="selectDependent"]:checked').each(function() {
                                            dependedCheck=1;
                                        });
                                        if(dependedCheck==0){
                                            alert('Please select Depended');
                                            return false;
                                        }
                                    }
                               




                                var selectTests=0;
                                $('[name^="selectTests"]:checked').each(function() {
                                    selectTests=1;
                                }); 
                                if(selectTests==0){
                                    alert('Please select Test');
                                    return false;
                                }

                                
                                   

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
                                    var id = $('.city_id').val();
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

 <script>
                                          $('.mydepended_self').change(function(){
                                            //  alert();
                                              var d_type = $(this).val();
                                              if(d_type=='self'){
                                                  $('.dependend_div').hide();
                                              } else {
                                                  $('.dependend_div').show();
                                              }
                                          })
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
    function view_test(id){
                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.testDetails').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('ajaxRequest.details.test')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.testDetails').empty().append(data);
                                        }
                                        });
    }



    function eventPartispate(id) {
       // alert(id);
        //alert();
        swal({
            title: "want to participate ?",
            type: "success",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function () {
            
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.testDetails').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"<?php echo e(route('employee.event.participate')); ?>",
                                        data:{id:id},   
                                        success:function(data){
                                            swal("Participated!", "Your have participated successfully.", "success");
                                            window.location.href = "event-list";
                                        }
                                        });
                                       

                    
                    
        });
    }


</script>


<!-- Modal -->
<div class="modal fade" id="myModalBookingTest" tabindex="-1" aria-labelledby="exampleModalLabela" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabela">Test Details</h5>


      </div>
      <div class="modal-body testDetails">
        
      </div>
      
    </div>
  </div>
</div>








<?php /**PATH C:\xampp\htdocs\health\resources\views/employee/layouts/app.blade.php ENDPATH**/ ?>