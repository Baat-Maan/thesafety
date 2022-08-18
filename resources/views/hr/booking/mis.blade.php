@extends('hr.layouts.app')

@section('body')
<style>
    select.form-control:not([size]):not([multiple]) {
    height: 2.3rem !important;
}
.newrow {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    margin-bottom: 10px;
    padding: 5px;
}
</style>
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
                            
                          
        
        
                        <form method="get" action="{{ route('hr.mis') }}" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                    <label>Search Here</label>
                                </div>
                            <div class="row newrow">
                            
                               
                          <?php ?>

                            
                                <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="from"
                                         placeholder="From Date" id="from" value="{{ $_GET['from'] ?? ''}}">
                               </div>
                          
 <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="to" placeholder="To Date"
                                          id="to" value="{{ $_GET['to'] ?? ''}}">
                               </div>
                          
                                <div class="col-sm-3">
                                     {{ Form::select('type',['AHC' => 'AHC Employee','Pre' => 'Pre Employee','Both' => 'Both'],$_GET['type']?? '', ['class'=>'form-control','placeholder'=>'Select Type']) }}
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value=""> Select Status</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Pending' ) { echo "selected"; } ?> value="Pending"> To be contacted</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Show' ) { echo "selected"; } ?> value="Show"> Show / No Show</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA' ) { echo "selected"; } ?> value="MDRA"> MDRA</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Approve' ) { echo "selected"; } ?> value="Approve"> Partial Process Done  </option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA Done' ) { echo "selected"; } ?> value="MDRA Done"> Closed Cases</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Cancel' ) { echo "selected"; } ?> value="Cancel"> Cancel </option>

                                    </select>
                                    </div>


                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-primary">Search!</button>
                                            <a href="{{ route('hr.mis') }}">
                                                <button type="button" class="btn btn-sm btn-warning">Reset!
                                    </button></a> </span></div>


                                </div>
                                 <?php
                           
                            if(isset($selectStatus) && $selectStatus!='all' &&   $selectStatus!='Status' && $selectStatus!=''  ) {  $status=$selectStatus; 
                            }else {  $status="all";
                            }
                             //echo $status="all";
                             
                             ?>
                             
                              </div>
                            </form>
                           
                            
                          
        
        
                        <form method="get" action="{{ route('mis.export') }}" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                    <label>Export Here</label>
                                </div>
                            <div class="row newrow">
                               
                            
                               
                          <?php ?>

                            
                                <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="from"
                                         placeholder="From Date" id="efrom" value="{{ $_GET['from'] ?? ''}}">
                               </div>
                          
 <div class="col-sm-2">
                                   <input type="text" required class="form-control" name="to" placeholder="To Date"
                                          id="eto" value="{{ $_GET['to'] ?? ''}}">
                               </div>
                          
                                <div class="col-sm-3">
                                     {{ Form::select('type',['AHC' => 'AHC Employee','Pre' => 'Pre Employee','Both' => 'Both'],$_GET['type']?? '', ['class'=>'form-control','placeholder'=>'Select Type']) }}
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value=""> Select Status</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Pending' ) { echo "selected"; } ?> value="Pending"> To be contacted</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Show' ) { echo "selected"; } ?> value="Show"> Show / No Show</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='MDRA' ) { echo "selected"; } ?> value="MDRA"> MDRA</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Approve' ) { echo "selected"; } ?> value="Approve"> Partial Process Done  </option>
                                        <option <?php if(isset($selectStatus) && $selectStatus=='MDRA Done' ) { echo "selected"; } ?> value="MDRA Done"> Closed Cases</option>
                                         <option <?php if(isset($selectStatus) && $selectStatus=='Cancel' ) { echo "selected"; } ?> value="Cancel"> Cancel </option>

                                    </select>
                                    </div>


                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group">
                                    <span>
                                            <button type="submit" class="btn btn-sm btn-info">Export To Excel!</button>
                                           </span></div>


                                </div>
                                 <?php
                           
                            if(isset($selectStatus) && $selectStatus!='all' &&   $selectStatus!='Status' && $selectStatus!=''  ) {  $status=$selectStatus; 
                            }else {  $status="all";
                            }
                             //echo $status="all";
                             
                             ?>
                             
                              </div>
                            </form>
       
                            
                            <div class="table-responsive">
                                <h1>Total Record : {{$total}}</h1>
                                <table class="table table-striped" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Unique Id</th>
                                        <th>Booking Id</th>
                                        <th>Creation Date</th>
                                        <th>Appoinment Date</th>
                                        <th>Booking For</th>
                                        <th>User Name </th>
                                        <th>Package Name </th>
                                        <th>Booking Mode</th>
                                        <th>Employee Type</th>
                                        <th>Reschedule Reason</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       @if(count($result) > 0)
                                    @foreach($result as $key=>$val)
                                    <tr>
                                        <td>{{$val->unique_code}}</td>
                                        <td>{{$val->id}}</td>
                                        @php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        @endphp
                                        <td>{{$newDate}}</td>
                                        <td>{{$val->booking_date}}</td>
                                        <td>{{ucwords($val->type)}} / {{$val->booking_for_name}}
                                           
                                        </td>
                                        <td>{{$val->username}}
                                        </td>
                                        
                                        <td>{{$val->packageName}}
                                        </td>
                                        <td > {{$val->booking_mode}}</td>
                                         <td > @if($val->is_admin==2)
                                      AHC Employee
                                      @else
                                      Pre Employee
                                      @endif
                                      </td>
                                       <td>{{$val->reschedule_reason}}</td>
                                        <td >
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
                                    </tr>
                                    @endforeach
                                    @endif
                                   
                                    
                                    </tbody>
                                </table>
                                {{ $result->appends($_GET)->links()}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>
@endsection


