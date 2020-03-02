@extends('layouts.app')
@section('import')
    <link href="/css/welcome.css" rel="stylesheet">
    <link href="/css/part-Home/success_stories.css" rel="stylesheet">
    <link href="/css/part-Home/Explore_offering.css" rel="stylesheet">
    <link href="/css/part-Home/Solutions_deliver.css" rel="stylesheet">
    <link href="/css/part-Home/OUR_CUSTOMERS_SAY.css" rel="stylesheet">
@endsection

@section('content')
    <div class=" nav-home">
        <div class=" text-uppercase font-weight-bold mx-auto text-center display-4 "
             style="color: #FBD16B">{{trans('APP.header-title-one')}}</div>
        <div class="text-uppercase font-weight-bold mx-auto text-center display-4 "
             style="color: #FBD16B">{{trans('APP.header-title-two')}}</div>
        <div class=" mx-auto text-center display-4 mt-n5" style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span style="border-color: #707070; text-shadow: #000000">___</span>
        </div>
        <div class=" text-uppercase mx-auto text-center text-white mt-md-5">{{trans('APP.header-small')}}</div>
        <!-- card header-->
        <div class="row m-5 mt-lg-5">
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21">
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
                            <a href="#" style="color: #FBD16B; ">{{trans('APP.link-card-left')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21">
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{trans('APP.header-card-center')}}</h5>
                        <div class="col-md-11">
                            <img src="/img/Group%20243@2x.png" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center mx-auto ">
                            <p class="text-wrap text-justify col-12">{{trans('APP.content-card-center')}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="#" style="color: #FBD16B; ">{{trans('APP.link-card-center')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4  " style="border-color: #707070; box-shadow: #1b1e21">
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
                            <a href="#" style="color: #FBD16B; ">{{trans('APP.link-card-right')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- about -->
        <div class="col-sm-6 mt-lg-5 text-md-center text-center mx-auto m-5">
            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
        </div>
        <!-- -->
        <div class="card-group col-lg-12 mx-auto mt-lg-5 mb-lg-5">
            <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto">
                <img src="/img/asset.png" class="img-fluid">
            </div>
            <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto">
                <img src="/img/asset.png" class="img-fluid">
            </div>
            <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto">
                <img src="/img/asset.png" class="img-fluid">
            </div>
            <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto">
                <img src="/img/asset.png" class="img-fluid">
            </div>
            <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto">
                <img src="/img/asset.png" class="img-fluid">
            </div>
        </div>
        @include('layouts.part_Home.Explore_offering')
        @include('layouts.part_Home.improve_innovate_trends')
        @include('layouts.part_Home.Solutions_deliver')
        @include('layouts.part_Home.managed_services')
        @include('layouts.part_Home.Platforms_work')
        @include('layouts.part_Home.success_stories')
        @include('layouts.part_Home.OUR_CUSTOMERS_SAY')
        @include('layouts.part_Home.industry_expertise')
        @include('layouts.part_Home.recognitions_partnerships')
        @include('layouts.part_Home.featured_insights')
        @include('layouts.part_Home.need_consultation')
    </div>
@endsection
