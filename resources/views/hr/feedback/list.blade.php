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
                                        <th>Emp Name </th>
                                        <th>Emp Code </th>
                                        <th>Package Taken</th>
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
                                        <td>{{$val->username}}</td>
                                        <td>{{$val->employee_code}}</td>
                                        <td>{{$val->packageName}}</td>
                                        <td >
                                     
                                            <button tabindex="-1" data-toggle="modal"  onclick="myBookingViewDetails('{{$val->id}}','1')" data-target="#myCancelModelView" class="btn btn-info  " type="button">View</button>

                                        </td>
                                        
                                       
                                    </tr>
                                    @endforeach
                                    @if(count($result)==0)
                                    <tr>
                                        <td colspan="7" style="color:red; text-align:center">Record Not Found.....</td>
                                       
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
                                        url:"{{ route('ajaxRequest.details.view_feedback') }}",
                                        data:{id:id},   
                                        success:function(data){
                                            //alert(data);

                                            $('.callViewModelData').empty().append(data);
                                        }
                                        });
                                
                                    
                                }
    </script>


@endsection
