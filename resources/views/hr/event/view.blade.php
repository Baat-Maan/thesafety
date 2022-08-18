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
                       
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Created</th>
                                        <th>Event Name </th>
                                        <th>Employee Name </th>
                                    
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
                                        <td>{{$val->envetname}}</td>
                                        <td>{{$val->username}}</td>
                                       
                                    </tr>
                                    @endforeach
                                    @if(count($result)==0)
                                    <tr>
                                        <td colspan="4" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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
