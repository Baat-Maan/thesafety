@extends('hr.layouts.app')

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> {{$pageName}} {{$method}}</h2>
                    
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{$pageName}} {{$method}} </h5>
                            
                        </div>
                        <div class="ibox-content">
                        <form method="get" action="{{ route('hr.my.booking') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                          
                          

                                <div class="col-sm-3">
                                <label class="form-label">Booking Date</label>
                                    <div class="input-group">
                                        <input placeholder="Search Date" type="date" value="{{ $_GET['date'] ?? ''}}" name="date" class="form-control form-control-sm"> <span class="input-group-append"> 
                                </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label">Package</label>
                                    <div class="input-group">
                                    {{ Form::select('package_id', $Packages,$selectPackages, ['class'=>'form-control','placeholder'=>'Select Package']) }}
                               
                                            </div>

                                </div>
                                <div class="col-sm-3">
                                <label class="form-label">State</label>
                                    <div class="input-group">
                                    {{ Form::select('state_id', $states,$selectState, ['class'=>'form-control','placeholder'=>'Select State']) }}
                               
                                            <button type="submit" class="btn btn-sm btn-primary">Search! <button type="reset" class="btn btn-sm btn-warning">Reset!
                                    </button> </span></div>

                                </div>
                                


                                
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Unique Id</th>
                                       <th>Booking Id</th>
                                        <th>Creation Date</th>
                                        
                                        <th>User Name </th>
                                        <th>Package Name </th>
                                        
                                        <th>Booking For</th>
                                        <th>Booking Mode</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $key=>$val)
                                    <tr>
                                        <td>{{$val->unique_code}}</td>
                                        <td>{{$val->id}}</td>
                                        @php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        @endphp
                                        <td>{{$newDate}}</td>
                                        <td>{{$val->username}}
                                        <br><a style="color:blue; display:none;" onclick="view_user('{{$val->employee_id}}')"; data-toggle="modal" data-target="#userModelDetails">click here</a>
                                        </td>
                                        <td>{{$val->packageName}}
                                        <br><a style="color:blue; display:none;" onclick="view_package('{{$val->package_id}}','{{$val->id}}')"; data-toggle="modal" data-target="#myModalViewPackage">click here</a>
                                        </td>
                                        <td>{{ucwords($val->type)}} / {{$val->booking_for_name}}
                                           
                                        </td>
                                        <td > {{$val->booking_mode}}</td>
                                        <td style="color:red">
                                         @if($val->status=='Pending')
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">To Be Contacted</button>
                                        @elseif($val->status=='Show')
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Confirmed</button>
                                        @elseif($val->status=='MDRA')
                                        <button  class="btn btn-info" type="button" style="cursor: default;">Medical Done Report Awaited</button>
                                        @elseif($val->status=='Approve')
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        @elseif($val->status=='Cancel')
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Appointment Cancel</button>
                                        @elseif($val->status=='Partial Process Done')
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Medical Partial Process Done</button>
                                        @else
                                        <button  class="btn btn-info  " type="button" style="cursor: default;">Closed</button>
                                        
                                        @endif
                                            
                                        
                                        </td>
                                        <td>
                                             <button tabindex="-1" data-toggle="modal"  onclick="myBookingViewDetails('{{$val->id}}',4)" data-target="#myCancelModelView" class="btn btn-info  " type="button">View</button>
                                            @if(!empty($val->report) && !empty($val->report_updated))
                                        <a class="btn btn-success" href="{{env('APP_URL').$val->report}}" download target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>



<div class="modal inmodal" id="myCancelModelView" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">View Details</h4>
                                        </div>
                                        
                                        <div class="modal-body callViewModelData">
                                          
                                     
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit"  class="btn btn-primary">Save changes</button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            </div>

                            <script>
      function myBookingViewDetails(id){
          //alert();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('.callViewModelData').empty();
                                        $.ajax({
                                        type:'POST',
                                        url:"{{ route('ajaxRequest.details.view_call_booking_mdra') }}",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>

@endsection


