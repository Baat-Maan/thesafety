@extends('hr.layouts.app')

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{$method}}  {{$pageName}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>{{$pageName}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>{{$method}} {{$pageName}}</strong>
                        </li>
                    </ol>
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
                        {{ Form::open(['route'=>['hr.update.faq',$result->id],'class'=>'classname','id'=>'myForm','files'=>'true'])}}


                      
                        @csrf
                        <input type="hidden" value="{{ $result->id }}" name="id">


                   
                                    
                                  
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Question</label>
    
                                        <div class="col-sm-10">
                                        <textarea  name="question" required class="form-control">{{ $result->question ?? old('question') }}</textarea>
                                        <span class="" style="color:red"> {{ $errors->first('question')}} <span>
    
                                        </div>
                                    </div> 
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Answer</label>
    
                                        <div class="col-sm-10">
                                        <textarea  name="ans" required class="form-control">{{ $result->ans ?? old('ans') }}</textarea>
                                        <span class="" style="color:red"> {{ $errors->first('ans')}} <span>
    
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
