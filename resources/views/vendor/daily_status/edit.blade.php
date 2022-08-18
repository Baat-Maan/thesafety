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
                        {{ Form::open(['route'=>['employee.update.dependent',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])}}


                      
                        @csrf
                        <input type="hidden" value="{{ $result->id }}" name="id">


                        <div class="form-group  row">
                                    
                                    <label class="col-sm-2 col-form-label"> Name</label>
    
                                        <div class="col-sm-4">
                                            {!! Form::text('name', $result->name,['class' => 'form-control', 'style'=>"text-transform:capitalize"]) !!}
                                        <span class="" style="color:red"> {{ $errors->first('name')}} <span>
                                    </div>
                                    <label class="col-sm-2 col-form-label"> Relation</label>
    
                                        <div class="col-sm-4">
                                            {!! Form::text('relation', $result->relation,['class' => 'form-control', 'style'=>"text-transform:capitalize"]) !!}
                                        <span class="" style="color:red"> {{ $errors->first('relation')}} <span>
                                    </div>
                                    </div>
                                    
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row">
                                        
                                    <label class="col-sm-2 col-form-label"> Contact No</label>
    
                                        <div class="col-sm-4">
                                            {!! Form::number('contact_no', $result->contact_no,['class' => 'form-control','onKeyPress'=>"if(this.value.length==10) return false;"]) !!}
                                        <span class="" style="color:red"> {{ $errors->first('contact_no')}} <span>
                                    </div>
                                     <label class="col-sm-2 col-form-label"> DOB</label>
    
                                        <div class="col-sm-4">
                                            {!! Form::date('dob', $result->dob,['class' => 'form-control']) !!}
                                        <span class="" style="color:red"> {{ $errors->first('dob')}} <span>
                                    </div>
                                    </div>
                                  
                                    <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                                {{ Form::close() }}
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
@endsection
