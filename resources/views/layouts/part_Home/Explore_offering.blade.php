<!-- Explore our offering -->
<div class="container-fluid card-group mt-lg-5 " @if(app()->getLocale()=='ar') dir='rtl' @endif style="background-color: #FAFAFA;border-color: #707070;">
    <div class="no-gutters mt-lg-5 wow fadeInUp" data-wow-delay="0.6s">
        <div
            class="text-left ml-lg-5 mb-lg-n3 font-weight-bold text-uppercase">{{trans('part-home/Explore_offering.Explore_offering')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
    </div>
    <div class="ml-lg-5 mt-lg-5 wow fadeInLeft" data-wow-delay="0.9s">
        <div class="card-group m-lg-4 shadow" style="background-color: #FFFFFF;">
            <div class="list-group col-lg-4 mt-lg-n3 mb-lg-3 ml-lg-n5 " id="list-tab-Explore" role="tablist"
                 style="background-color: #333333;">
                <a class="list-group-item list-group-item-action text-center item-offering mt-lg-5 active"
                   id="list-item1-list" data-toggle="list"
                   href="#list-item1" role="tab">{{trans('part-home/Explore_offering.title_offering_item1')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item2-list"
                   data-toggle="list"
                   href="#list-item2" role="tab">{{trans('part-home/Explore_offering.title_offering_item2')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item3-list"
                   data-toggle="list"
                   href="#list-item3" role="tab">{{trans('part-home/Explore_offering.title_offering_item3')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item4-list"
                   data-toggle="list"
                   href="#list-item4" role="tab">{{trans('part-home/Explore_offering.title_offering_item4')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item5-list"
                   data-toggle="list"
                   href="#list-item5" role="tab">{{trans('part-home/Explore_offering.title_offering_item5')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item6-list"
                   data-toggle="list"
                   href="#list-item6" role="tab">{{trans('part-home/Explore_offering.title_offering_item6')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering  "
                   id="list-item7-list"
                   data-toggle="list"
                   href="#list-item7" role="tab">{{trans('part-home/Explore_offering.title_offering_item7')}}</a>
                <a class="list-group-item list-group-item-action text-center item-offering mb-4"
                   id="list-item8-list"
                   data-toggle="list"
                   href="#list-item8" role="tab">{{trans('part-home/Explore_offering.title_offering_item8')}}</a>
            </div>
            <div class="tab-content no-gutters col-lg-8 mt-md-5 mr-lg-n5" id="nav-tabContent" style="">
                <div class="tab-pane fade show active" id="list-item1"
                     role="tabpanel"
                     aria-labelledby="list-item1-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{trans('part-home/Explore_offering.title_offering_item1')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div
                                class="text-left ml-lg-5 mt-lg-2 ">{{trans('part-home/Explore_offering.content_offering_item1')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item1-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item1-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item1-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item1-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item2"
                     role="tabpanel"
                     aria-labelledby="list-item2-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{trans('part-home/Explore_offering.title_offering_item3')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item3')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold  text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item3-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item3-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item3-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item3-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item3"
                     role="tabpanel"
                     aria-labelledby="list-item3-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div
                                class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase">{{trans('part-home/Explore_offering.title_offering_item4')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item4')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item4-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item4-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item4-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item4-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item4"
                     role="tabpanel"
                     aria-labelledby="list-item4-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div
                                class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase">{{trans('part-home/Explore_offering.title_offering_item5')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item5')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item5-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item5-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item5-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item5-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item5"
                     role="tabpanel"
                     aria-labelledby="list-item5-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{trans('part-home/Explore_offering.title_offering_item6')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item6')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item6-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item6-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item6-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item6-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item6"
                     role="tabpanel"
                     aria-labelledby="list-item6-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div
                                class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase">{{trans('part-home/Explore_offering.title_offering_item7')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item7')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item7-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item7-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item7-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item7-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item7"
                     role="tabpanel"
                     aria-labelledby="list-item7-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{trans('part-home/Explore_offering.title_offering_item8')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item8')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item8-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item8-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item8-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item8-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="list-item8"
                     role="tabpanel"
                     aria-labelledby="list-item8-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{trans('part-home/Explore_offering.title_offering_item2')}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div class="text-left ml-lg-5 mt-lg-2 "
                            >{{trans('part-home/Explore_offering.content_offering_item2')}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item2-left-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item2-left-bottom')}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item2-right-top')}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{trans('part-home/Explore_offering.list_offering_item2-right-top')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="#" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
