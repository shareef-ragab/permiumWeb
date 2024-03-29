@extends('layouts.app')
@section('import')
    <link href="/css/welcome.css" rel="stylesheet">
@endsection

@section('content')
    <div class="nav-home" >
        <div class="text-uppercase font-weight-bold mx-auto text-center display-4 wow fadeInUp" data-wow-delay="0.2s"
             style="color: #FBD16B">{{trans('APP.header-title-one')}}</div>
        <div class="text-uppercase font-weight-bold mx-auto text-center display-4 wow fadeInUp" data-wow-delay="0.4s"
             style="color: #FBD16B">{{trans('APP.header-title-two')}}</div>
        <div class="mx-auto text-center display-4 mt-n5 wow fadeInUp"data-wow-delay="0.5s" style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span style="border-color: #707070; text-shadow: #000000">___</span>
        </div>
        <div class="text-uppercase mx-auto text-center text-white mt-md-5 wow fadeInUp" data-wow-delay="0.6s">{{$sub_title[0]->content}}</div>
        <!-- card header-->
        <div class=" row m-5 mt-lg-5 " >
            <div class="col-sm-4 mb-3 wow fadeInLeft"data-wow-delay="0.7s" style="border-color: #707070; box-shadow: #1b1e21">
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{$nav_card_left_title[0]->content}}</h5>
                        <div class="col-md-11">
                            <img src="{{$nav_card_left_image[0]->content}}" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center mx-auto ">
                            <p class="text-wrap text-justify col-12">{{$nav_card_left_content[0]->content}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="{{$nav_card_left_link[0]->content}}" style="color: #FBD16B; ">{{trans('APP.link-card-left')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 wow fadeInUp"data-wow-delay="0.7s" style="border-color: #707070; box-shadow: #1b1e21">
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{$nav_card_center_title[0]->content}}</h5>
                        <div class="col-md-11">
                            <img src="{{$nav_card_center_image[0]->content}}" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center mx-auto ">
                            <p class="text-wrap text-justify col-12">{{$nav_card_center_content[0]->content}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="{{$nav_card_center_link[0]->content}}" style="color: #FBD16B; ">{{trans('APP.link-card-center')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 wow fadeInRight"data-wow-delay="0.7s" style="border-color: #707070; box-shadow: #1b1e21">
                <div class="card col-sm-10 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-md-center col-12">{{$nav_card_center_title[0]->content}}</h5>
                        <div class="col-md-11">
                            <img src="{{$nav_card_center_image[0]->content}}" class="card-img" alt="...">
                        </div>
                        <div class="card-text text-md-center mx-auto ">
                            <p class="text-wrap text-justify col-12">{{$nav_card_center_content[0]->content}}</p>
                        </div>
                        <div class=" mx-auto text-center">
                            <a href="{{$nav_card_center_link[0]->content}}" style="color: #FBD16B; ">{{trans('APP.link-card-right')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- about -->
            <div class="col-sm-6 mt-lg-5 text-md-center text-center mx-auto m-5 wow fadeInUp" data-wow-delay="0.5s">
                <p class="text ">{{$content_about[0]->content}}</p>
            </div>
        @include('layouts.part_Home.partnerships')
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
