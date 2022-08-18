@extends('hr.layouts.app')

@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> {{$pageName}} {{$method}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>{{$pageName}}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>{{$method}}</strong>
                        </li>
                    </ol>
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

                                        <th>#</th>
                                        <th>Created</th>
                                        <th>Question </th>
                                        <th>Answer </th>
                                       
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
                                        <td>{{$val->question}}</td>
                                        <td>{{$val->ans}}</td>
                                        
                                        <td>
                                        {!! Html::decode(link_to_route('hr.edit.faq','<i class="fa fa-pencil"></i>',[$val->id],['class'=>'btn btn-primary','title'=>'Edit'])) !!}
                                        {!! Html::decode(link_to_route('hr.delete.faq','<i class="fa fa-trash"></i>',[$val->id],['class'=>'btn btn-danger','title'=>'Delete','onclick'=>'return deleteConfirm();'])) !!}
                                    
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
