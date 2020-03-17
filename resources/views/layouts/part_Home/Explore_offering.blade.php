<!-- Explore our offering -->
<div class="container-fluid card-group mt-lg-5 " style="background-color: #FAFAFA;border-color: #707070;">
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
                @for($i=0;$i<8;$i++)
                        <a class="list-group-item list-group-item-action text-center item-offering @if($i===0)mt-lg-5 active @elseif ($i===7) mb-lg-5 @endif"
                           id="list-item-{{$i}}-list" data-toggle="list"
                           href="#list-item-{{$i}}" role="tab">{{$EXPLORE_OFFERINGS[$i]->title}}</a>
                @endfor
            </div>
            <div class="tab-content no-gutters col-lg-8 mt-md-5 mr-lg-n5" id="nav-tabContent" style="">
                @for($i=0;$i<8;$i++)
                        <div class="tab-pane fade  @if($i===0) show active @endif" id="list-item-{{$i}}"
                     role="tabpanel"
                     aria-labelledby="list-item-{{$i}}-list">
                    <div class="container-fluid card-group mt-lg-5">
                        <div class="no-gutters">
                            <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase"
                            >{{$EXPLORE_OFFERINGS[$i]->title}}</div>
                            <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                                 style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-n5"
                                                                                                style="border-color: #707070; text-shadow: #000000">__</span>
                            </div>
                            <div
                                class="text-left ml-lg-5 mt-lg-2 ">{{$EXPLORE_OFFERINGS[$i]->content}}</div>
                        </div>
                        <div class="card-deck no-gutters">
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{$EXPLORE_OFFERINGS[$i]->list_1}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{$EXPLORE_OFFERINGS[$i]->list_2}}
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{$EXPLORE_OFFERINGS[$i]->list_3}}
                                </div>
                                <div class="m-lg-5 font-weight-bold text-wrap" style="font-size: 18px"><img
                                        class="m-lg-2"
                                        src="/img/Rectangle 9.png"> {{$EXPLORE_OFFERINGS[$i]->list_4}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5">
                            <a href="{{$EXPLORE_OFFERINGS[$i]->link}}" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                    src="/img/arrow_forward.png" class="img-fluid small"></a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
