@extends('layouts.app')
@section('import')
    <link href="/css/welcome.css" rel="stylesheet">
@endsection

@section('content')
    <div class=" nav-home">
        <div class="text-uppercase font-weight-bold mx-auto text-center display-4"
             style="color: #FBD16B">{{trans('APP.header-title-one')}}</div>
        <div class="text-uppercase font-weight-bold mx-auto text-center display-4 "
             style="color: #FBD16B">{{trans('APP.header-title-two')}}</div>
        <div class="  mx-auto text-center display-4 mt-n5" style="color: #FBD16B; border-color: #707070;">
            <span style="border-color: #707070; text-shadow: #000000">___</span>
        </div>
        <div class="text-uppercase mx-auto text-center text-white mt-md-5">{{trans('APP.header-small')}}</div>
        <div class="row m-5 mt-lg-5">
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21" >
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{trans('APP.header-card-left')}}</h5>
                        <div class="col-md-11">
                            <img src="/img/Group%20243@2x.png" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center  mx-auto ">
                            <p class="text-wrap text-justify col-12">{{trans('APP.content-card-left')}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="#"  style="color: #FBD16B; ">{{trans('APP.link-card-left')}}<img src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21" >
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{trans('APP.header-card-center')}}</h5>
                        <div class="col-md-11">
                            <img src="/img/Group%20243@2x.png" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center  mx-auto ">
                            <p class="text-wrap text-justify col-12">{{trans('APP.content-card-center')}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="#"  style="color: #FBD16B; ">{{trans('APP.link-card-center')}}<img src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21" >
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{trans('APP.header-card-right')}}</h5>
                        <div class="col-md-11">
                            <img src="/img/Group%20243@2x.png" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center mx-auto ">
                            <p class="text-wrap text-justify col-12">{{trans('APP.content-card-right')}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="#"  style="color: #FBD16B; ">{{trans('APP.link-card-right')}}<img src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
