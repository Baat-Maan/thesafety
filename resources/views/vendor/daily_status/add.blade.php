@extends('employee.layouts.app')

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{$method}}  {{$pageName}}</h2>
                  
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
          
            <div class="col-lg-12">
                
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{$method}}  {{$pageName}}</h5>
                            
                        </div>
                        <div class="ibox-content">
                            {!! Form::open(['role' => 'form','route' => "employee.save.status",'class' => 'mws-form','method' => 'post', 'files' => true,]) !!}
                        
                        @csrf
                        
                                 <div class="form-group  row">
                                    
                             
                                <label class="col-sm-2 col-form-label"> Date*</label>

                                    <div class="col-sm-4">
                                        <input type="text" value="{{date('d/m/Y')}}" disabled  class="form-control" name="date"
                                          id="datepickerrr12" data-zdp_readonly_element="true">
                                    <span class="" style="color:red"> {{ $errors->first('date')}} <span>
                                </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Project* </label>
    
                                        <div class="col-sm-10"> 
                                            {{ Form::select('project_id', $projectAll,'', ['class'=>'form-control','placeholder'=>'Select Project']) }}
                                <span class="" style="color:red"> {{ $errors->first('project_id')}} <span>
                                    </div>
    
    
                                   
    
    
                                    </div>
                                     <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                              
                                <label class="col-sm-2 col-form-label"> Description</label>

                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']) !!}
                                    <span class="" style="color:red"> {{ $errors->first('relation')}} <span>
                                </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label">Select Status* </label>
    
                                        <div class="col-sm-10"> 
                                            {{ Form::select('status', ['Still Pending'=>'Still Pending','Completed'=>'Completed','On Hold'=>'On Hold'],'', ['class'=>'form-control status','placeholder'=>'Select Status','onchange'=>'selectStatus()']) }}
                                <span class="" style="color:red"> {{ $errors->first('status')}} <span>
                                    </div>
                                    </div>
                                <div class="form-group  row due_to_div" style="display:none;">
                                    
                              
                                <label class="col-sm-2 col-form-label"> Due To</label>

                                    <div class="col-sm-10">
                                        {!! Form::textarea('reason', null, ['class'=>'form-control','rows'=>'3']) !!}
                                    <span class="" style="color:red"> {{ $errors->first('reason')}} <span>
                                </div>
                                </div>
                                    
                                    
                                <div class="hr-line-dashed"></div>


                               
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm"  type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">
           
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>{{$pageName}} List</h5>
                            
                        </div>
                        <div class="ibox-content">
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                      
                                        <th>Date</th>
                                        <th> Project Name </th>
                                        <th>Daily Status </th>
                                        <th >Admin Feedback</th>
                                        <th>Status</th>
                                        <th>Due To</th>
                                        
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $key=>$val)
                                    <tr>
                                        <td>{{$val->date}}</td>
                                        <td>{{$val->projectName}}</td>
                                        <td>{{$val->description}}</td>
                                         <td class='feedcolr'>  {{$val->feedback}}</td>
                                        <td>@if($val->status == 'Completed')
                                                <span class="label label-success" >Completed </span>
                                                @elseif($val->status == 'On Hold')
                                               <span class="label label-warning" >On Hold</span>
                                              
                                               @else
                                                 <span class="label label-info" >Still Pending</span>
                                               @endif</td>
                                        <td>{{$val->reason}}</td>
                                       
                                       
                                    </tr>
                                    @endforeach
                                    @if(count($result)==0)
                                    <tr>
                                        <td colspan="6" style="color:red; text-align:center">Record Not Found.....</td>
                                       
                                    </tr>
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
<script>
    function selectStatus(){
        var status =  $('.status').val();
        if(status == "On Hold"){
            $('.due_to_div').show();
        }else{
            $('.due_to_div').hide();
        }
    }
</script>
@endsection
