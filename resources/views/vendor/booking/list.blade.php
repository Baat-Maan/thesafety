@extends('employee.layouts.app')

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
                      
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>Unique Id</th>
                                        <th>Date</th>
                                        <th>Booking For</th>
                                        <th>Schedule Date</th>
                                        <th>Package Name </th>
                                         <th>Booking Mode</th>
                                        <th>Price </th>
                                       
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $key=>$val)
                                    <tr>
                                        <td>{{$uniqueCode}}</td>
                                        @php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        @endphp
                                        <td>{{$newDate}}</td>
                                        <td>{{ucwords($val->type)}} / {{$val->booking_for_name}}
                                          
                                        </td>
                                        <td>{{$val->booking_date}}</td>



                                        <td >{{$val->packageName}}</td>
                                        <td >@if($val->booking_mode=='DC-Visit')
                                            {{$val->booking_mode}}
                                            @else
                                            {{$val->booking_mode}} <br>
                                            Address : {{$val->address_home}}
                                            @endif</td>
                                        <td>INR {{$val->price}}</td>
                                      
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
                                       
                                       @if(!empty($val->reschedule_reason))
                                       <button tabindex="-1" data-toggle="modal"  onclick="myBookingViewDetails('{{$val->id}}',4)" data-target="#myCancelModelView" class="btn btn-info" type="button">Rescheduled</button>
                                       @endif
                                       @if(Auth::user()->is_admin == 2) 
                                            @if(!empty($val->report) && !empty($val->report_updated))
                                            <a class="btn btn-success" href="{{env('APP_URL').$val->report}}" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                            @endif
                                        @endif  
                                            
                                            
                                              @if(!empty($val->report) && !empty($val->report_updated)  && $val->is_ratting==0)
                                            <button  onclick="feedback('{{$val->id}}')"; data-toggle="modal" data-target="#myModalFeedback" class="btn btn-info" type="button">Feedback</button>
    
    
                                            @endif
                                        

                                        </td>
                                    </tr>
                                    @endforeach
                                    @if(count($result)==0)
                                                    <tr>
                                                        <td colspan="8" style="color:red; text-align:center">Record Not Found.....</td>
                                                    
                                                    </tr>
                                                    @endif
                                    <!--tr>
                                        <td colspan="9"></td>
                                       
                                    </tr-->
                                    
                                    </tbody>
                                </table>
                                {{ $result->appends($_GET)->links()}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>





<div class="modal inmodal" id="myModalFeedback" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"  >Feedback</h4>
                                        </div>
                                        {{ Form::open(['route'=>['employee.booking.feedback'],'class'=>'classname','id'=>'myForm','files'=>'true','onsubmit'=>'return checkFormFeedback()'])}}
                                        @csrf
                                        <?php 
                                        $feedbacks = ['Excellent','Very Good','Good','Fair','Poor']?>
                                        <div class="modal-body ">
                                            <input type="hidden" value="" class="booking_id" name="booking_id"/>
                                      

                                        <div class="row">
                                            <table width="100%" class="table table-striped">
                                                <tr>
                                                    <th>
                                                        Feedback Form Please share your experience during the medical examination process as below
                                                    </th>
                                                    <th>
                                                        Excellent
                                                    </th>
                                                    <th>
                                                       Very Good
                                                    </th>
                                                    <th>
                                                        Good
                                                    </th>
                                                    <th>
                                                        Fair
                                                    </th><th>
                                                       Poor
                                                    </th>
                                                    
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        Overall Experience With the medical examination process
                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="overall_expeirence[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                       Medical Facility :(Ease of Locating, Set up, instruments, cleanliness, process

followed)
                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="medical_facility[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                      Reception at Clinic / Hospital
                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="reception[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Behavior and cooperation of staff at reception
                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="behavior_of_staff[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Courtesy and politeness of the doctor/medical staff for Technical Know

how, Behavior, Appearance etc

                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="courtesy_and_politeness[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Experience with the waiting time before the test began

                                                    </th>
                                                    
                                                        @foreach($feedbacks as $feedback)
                                                        <td>
                                <input type="radio" name="waiting_time[]" 
                                
                                value="{{ $feedback}}" id="inlineCheckbox{{$feedback}}">
                                 </td>
                                     @endforeach
                                                   
                                                   
                                                    
                                                </tr>
                                            </table>
                                            
                                    </div>
                                    
                                    <div class="row">
                                            <table width="100%">
                                               
                                            </table>
                                            
                                    </div>
                                        
                                      
                                        
                                    <!--    <div class="row">-->
                                            
                                    <!--        <div class="col-sm-12">-->
                                    <!--        <div class="form-group date" style="color:green"><label>Ratting</label> <br>-->
                                    <!--        {{ Form::select('ratting', ['5'=>'5 * ','4'=>'4 * ','3'=>'3 * ','2'=>'2 * ','1'=>'1 * '],'', ['class'=>'form-control ratting']) }}-->
                                    <!--    </div>-->
                                    <!--        <div class="col-sm-12">-->
                                    <!--        <div class="form-group date" style="color:green"><label>Feedback</label> <br>-->
                                    <!--        <textarea class="form-control feedback" name="feedback"></textarea>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                        
                                    <!--    </div>  </div>-->
                                        
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <a href="javascript:void(0)" style="display:none;" class="btn btn-sm btn-primary float-right buy_now" >Save changes</a> 

                                            <button type="submit" class="btn btn-primary button_submit">Save changes</button>
                                        </div>
                                        {{ Form::close() }}       
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
                                        url:"{{ route('ajaxRequest.details.view_call_booking_reschedule') }}",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>




@endsection


