@extends('layouts.app')
@section('import')
    <link href="/css/Cost_calculator.css" rel="stylesheet">
@endsection
@section('content')
@section('classes-background','')
<div class="nav-Cost">
    <div class="m-lg-5 col-lg-11">
        <div class="col-7 display-4 mt-5 font-weight-bold wow fadeInLeft" data-wow-delay="0.6s">
            {{trans('part-service/serivce.title')}}
        </div>
        <div class="col-7 display-4 mt-2 font-weight-bold wow fadeInLeft" data-wow-delay="0.7s"
             style="color: #FBD16B">{{trans('part-service/serivce.title-2')}}</div>
        <div class="text-left ml-lg-3 wow fadeInLeft" data-wow-delay="0.7s"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <img class="small img-fluid" src="/img/Rectangle 39.png">
        </div>
        <div class="col-6 mt-2 wow fadeInLeft"
             data-wow-delay="0.8s">{{trans('part-service/serivce.content-title')}}</div>
    </div>
    @include('layouts.part-service.Tell_us_project')

    @include('layouts.part-service.get_started')
</div>
@endsection
