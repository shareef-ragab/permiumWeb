@extends('layouts.app')
@section('import')
    <link href="/css/welcome.css" rel="stylesheet">
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
        <!-- -->
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
        <!-- industry expertise-->
        <div class="card-group mt-lg-5">
            <div class="no-gutters">
                <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase" style="font-size: 30px">{{trans('APP.industry_expertise')}}</div>
                <div class="text-left ml-lg-5 mt-lg-n5 display-4" style="color: #FBD16B; border-color: #707070;opacity: 1">
                    <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
                </div>
                <div class="text-left ml-lg-5 mt-lg-5 "  style="font-size: 18px" >{{trans('APP.content_industry_expertise')}}</div>
            </div>
            <div class="card-group col-lg-12 mx-auto ">
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>

            </div>
            <div class="card-group col-lg-12 mx-auto ">
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>
                <div class="no-gutters col-lg-1 m-3 mx-auto ml-lg-auto">
                    <img src="/img/analytics.png" class="img-fluid">
                    <p class="col-2 font-weight-bold text-wrap" style="font-size: 18px">Machine
                        Learning</p>
                </div>

            </div>
        </div>
        <!-- recognitions and partnerships-->
        <div class="card-group mt-lg-5">
            <div class="no-gutters">
                <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase" style="font-size: 30px">{{trans('APP.recognitions_partnerships')}}</div>
                <div class="text-left ml-lg-5 mt-lg-n5 display-4" style="color: #FBD16B; border-color: #707070;opacity: 1">
                    <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
                </div>
            </div>
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
        </div>
        <!-- featured insights -->
        <div class="card-group mt-lg-5  " style="background-color: #FAFAFA;border-color: #707070;">
            <div class="no-gutters">
                <div class="text-left ml-lg-5 mb-lg-n3 font-weight-bold text-uppercase" style="font-size: 30px">{{trans('APP.featured_insights')}}</div>
                <div class="text-left ml-lg-5 mt-lg-n5 display-4" style="color: #FBD16B; border-color: #707070;opacity: 1">
                    <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
                </div>
            </div>
            <div class="card-deck ml-lg-auto no-gutters mx-auto mt-md-4 col-lg-12">
                <div class="col-sm-4 mb-lg-5" style="border-color: #707070; box-shadow: #1b1e21">
                        <div class="card col-sm-10 shadow">
                            <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title display-5 " style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-left')}}</h5>
                                <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left" style=" font-size: 18px"> {{trans('APP.title-card-insights-left')}}</p>
                                <p class="card-text">{{trans('APP.content-card-insights-left')}}</p>
                            </div>
                        </div>
                </div>
                <div class=" col-sm-4 mb-lg-5" style="border-color: #707070; box-shadow: #1b1e21">
                    <div class="card col-sm-10 shadow">
                        <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title display-5 " style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-left')}}</h5>
                            <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left" style=" font-size: 18px"> {{trans('APP.title-card-insights-left')}}</p>
                            <p class="card-text">{{trans('APP.content-card-insights-left')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-lg-5" style="border-color: #707070; box-shadow: #1b1e21">
                    <div class="card col-sm-10 shadow">
                        <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title display-5 " style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-left')}}</h5>
                            <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left" style=" font-size: 18px"> {{trans('APP.title-card-insights-left')}}</p>
                            <p class="card-text">{{trans('APP.content-card-insights-left')}}</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class=" mx-auto text-left mb-5">
                    <a href="#" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                            src="/img/arrow_forward.png" class="img-fluid small"></a>
                </div>
        </div>
        <!-- need a consultation-->
        <div class="card-group mt-lg-5">
            <div class="no-gutters">
                <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase" style="font-size: 30px">{{trans('APP.need_consultation')}}</div>
                <div class="text-left ml-lg-5 mt-lg-n5 display-4" style="color: #FBD16B; border-color: #707070;opacity: 1">
                    <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
                </div>
                <div class="text-left ml-lg-5 mt-lg-5 "  style="font-size: 18px" >{{trans('APP.Drop_line')}}</div>
                <div class="col-12 text-left ml-lg-5 mt-lg-5 text-uppercase font-weight-bold mb-lg-5 ">
                    <a class="pl-lg-5 pr-lg-5 pt-lg-2 pb-lg-2  w-75 mouse_contact_revert" href="#" style="font-size: 14px;  background: #FBD16B; ">{{trans('nav.contact_us')}}</a>
                </div>
            </div>
            <div class="ml-lg-auto card-group no-gutters mx-auto mt-md-4">
                <div class="no-gutters mt-lg-5 mr-lg-5">
                    <div class="text font-weight-bold">{{trans('APP.Press_inquires')}}</div>
                    <div class=" mx-auto text-left">
                        <a href="#" style="color: #FBD16B; ">{{trans('APP.get_with_us')}}<img
                                src="/img/arrow_forward.png" class="img-fluid small"></a>
                    </div>
                </div>
                <div class="no-gutters mt-lg-5 mr-lg-5 ">
                    <div class="text font-weight-bold">{{trans('APP.Press_inquires')}}</div>
                    <div class=" mx-auto text-left">
                        <a href="#" style="color: #FBD16B; ">{{trans('APP.get_with_us')}}<img
                                src="/img/arrow_forward.png" class="img-fluid small"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
