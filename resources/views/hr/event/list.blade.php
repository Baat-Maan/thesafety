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
                        <form method="get" action="{{ route('hr.list.event') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            
                               
                          

                                <div class="col-sm-5">
                                <label class="form-label">Event</label>
                                    <div class="input-group">
                                        <input placeholder="Search Event Name" type="text" value="{{ $_GET['name'] ?? ''}}" name="name" class="form-control form-control-sm"> <span class="input-group-append"> 
                                            <button type="submit" class="btn btn-sm btn-primary">Search! <button type="reset" class="btn btn-sm btn-warning">Reset!
                                    </button> </span></div>

                                </div>


                                
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Created</th>
                                        <th>Event Name </th>
                                        <th>Address </th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th width="500">Description</th>
                                        <th>Status</th>
                                        <th>Participated</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $key=>$val)
                                    <tr>
                                        <td>{{++$page}}</td>
                                        @php
                                        $originalDate = $val->created_at;
                                        $newDate = date("Y-m-d", strtotime($originalDate));
                                        @endphp
                                        <td>{{$newDate}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->address}}</td>
                                        <td>{{$val->from_date}}</td>
                                        <td>{{$val->from_to}}</td>
                                        <td>{{$val->description}}</td>
                                        <td class="text-center">
                                            @if($val->from_date > $date  &&  $val->from_to > $date)
                                            <span class="label label-warning">Comming Soon</span>
                                            @elseif($val->from_to >= $date)
                                            <span class="label label-primary">Active</span>
                                            @else
                                            <span class="label label-danger">Expire</span>
                                            @endif
                                            </td>
                                            <td class="">
                                            <span class="label label-info">{{$val->total}}</span>
                                            </td>
                                        <td>
                                        {!! Html::decode(link_to_route('hr.edit.event','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])) !!}
                                        {!! Html::decode(link_to_route('hr.list.view','<i class="fa fa-eye"></i>',[$val->id],['class'=>'btn btn-warning','title'=>'View List'])) !!}
                                        {!! Html::decode(link_to_route('hr.delete.event','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])) !!}
                                    
                                    </td>
                                    </tr>
                                    @endforeach
                                    @if(count($result)==0)
                                    <tr>
                                        <td colspan="9" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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
@endsection
