@extends('hr.layouts.app')

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
                        <form method="POST" action="{{ route('hr.save.event') }}" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group  row">
                                    
                                <label class="col-sm-2 col-form-label">Event Name</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('name') }}" name="name" class="form-control">
                                    <span class="" style="color:red"> {{ $errors->first('name')}} <span>
                                </div>


                               


                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row">
                                    <label class="col-sm-2 col-form-label">From</label>

                                    <div class="col-sm-4"><input type="date" value="{{  old('from_date') }}" name="from_date" class="form-control">
                                    <span class="" style="color:red"> {{ $errors->first('from_date')}} <span></div>


                                    <label class="col-sm-2 col-form-label">To</label>

                                    <div class="col-sm-4"><input type="date" value="{{  old('from_to') }}" name="from_to" class="form-control">
                                    <span class="" style="color:red"> {{ $errors->first('from_to')}} <span></div>
                                </div>
                                
                               
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>

                                    <div class="col-sm-10">
                                    <textarea  name="description" class="form-control">{{  old('description') }}</textarea>
                                    <span class="" style="color:red"> {{ $errors->first('description')}} <span>

                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Address</label>

                                    <div class="col-sm-10">
                                    <textarea  name="address" class="form-control">{{  old('address') }}</textarea>
                                    <span class="" style="color:red"> {{ $errors->first('address')}} <span>

                                    </div>
                                </div> 
                              
                                <div class="hr-line-dashed"></div>


                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Reset</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    
                </div>
            </div>
                
            </div>
            
            
        </div>
@endsection
