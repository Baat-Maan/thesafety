@extends('employee.layouts.app')

@section('body')
<div class="wrapper wrapper-content">
<div class="row">
               
<div class="col-lg-12">
<div class="ibox ">
                        <div class="ibox-content">
@if(count($result) > 0)
@foreach($result as $key=>$val)

<div class="search-result">
                                <h3><a href="javascript:void(0)">{{$val->question}}</a></h3>
                                <!--<a href="#" class="search-link">www.inspinia.com/inspinia</a>-->
                                <p>
                                    {{$val->ans}}
                                </p>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            
<!--<div class="faq-item">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12">-->
<!--            <a data-toggle="collapse" href="#faq{{$key}}" class="faq-question">{{$val->question}}</a>-->
          
<!--        </div>-->
       
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <div id="faq{{$key}}" class="panel-collapse collapse ">-->
<!--                <div class="faq-answer">-->
<!--                    <p>-->
<!--                       {{$val->ans}}-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endforeach
@else 
</div>
                            </div>
<div class="faq-item">
    <div class="row">
        <div class="col-md-12">
           Record Not Found.....
          
        </div>
       
    </div>
   
@endif





</div>
</div>


            </div>
               
@endsection
