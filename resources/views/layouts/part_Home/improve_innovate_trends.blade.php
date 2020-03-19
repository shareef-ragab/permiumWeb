<div class="container-fluid card-group mt-lg-5 " >
    <div class="no-gutters mt-lg-5 wow fadeInUp" data-wow-delay="0.4s">
        <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase">{{trans('part-home/improve_innovate_trends.title')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
        <div class="text-left ml-lg-5 mt-lg-3 mr-lg-5 "
             style="font-size: 18px">{{$trends_content[0]->content}}</div>
    </div>
    <div class="col-lg-11 mx-auto mt-lg-5 mb-5 shadow wow fadeInLeft" data-wow-delay="1s" >
        <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
            @for($i=0;$i<6;$i++)
            <li class="nav-item">
                <a class="nav-link item-trends text-center ml-5 @if($i===0) active @endif" id="pills-trend-tab-{{$i}}" data-toggle="pill" href="#item-trend-{{$i}}" role="tab" aria-controls="pills-item-{{$i}}" aria-selected="true">
                    <img src="{{$improve_trends[$i]->image}}">
                    <p class="col-12 font-weight-bold text-wrap">{{$improve_trends[$i]->title}}</p>
                </a>
                <div class="arrow"><img src="/img/sort-down-solid.svg" class="img-fluid"></div>
            </li>
           @endfor
        </ul>
        <div class="tab-content" id="myTabContent">
            @for($i=0;$i<6;$i++)
            <div class="tab-pane fade @if($i===0) show active @endif" id="item-trend-{{$i}}" role="tabpanel" aria-labelledby="item-tab-{{$i}}">
                <div class="no-gutters">
                    <div class="text-left ml-lg-5 mt-lg-5 " style="font-size: 18px">{{$improve_trends[$i]->content}}</div>
                    <div class="text-left ml-lg-5 mt-lg-5 font-weight-bold text-uppercase"
                         style="font-size: 18px">{{trans('part-home/improve_innovate_trends.title-serve-item-1')}}</div>
                    <div class="text-left ml-lg-5 mt-lg-n5 display-4"
                         style="color: #FBD16B; border-color: #707070;opacity: 1"><span class="mt-lg-auto" style="border-color: #707070; text-shadow: #000000">__</span>
                    </div>
                </div>
                <div class="card-deck no-gutters mt-lg-n3">
                    <div class="ml-3">
                        <div class="m-lg-5 font-weight-bold" style="font-size: 18px"><img class="m-lg-2" src="/img/Rectangle 9.png"> {{$improve_trends[$i]->list_1}}
                        </div>
                        <div class="m-lg-5 font-weight-bold" style="font-size: 18px"><img class="m-lg-2" src="/img/Rectangle 9.png"> {{$improve_trends[$i]->list_2}}
                        </div>
                    </div>
                    <div class="ml-lg-auto mr-lg-5 ">
                        <div class="m-lg-5 font-weight-bold" style="font-size: 18px"><img class="m-lg-2" src="/img/Rectangle 9.png"> {{$improve_trends[$i]->list_3}}
                        </div>
                        <div class="m-lg-5 font-weight-bold" style="font-size: 18px"><img class="m-lg-2" src="/img/Rectangle 9.png"> {{$improve_trends[$i]->list_4}}
                        </div>
                    </div>
                    <div class="mt-auto text-right ml-lg-5 mr-lg-5 mb-5">
                        <a href="{{$improve_trends[$i]->link}}" class="mr-lg-5" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                                src="/img/arrow_forward.png" class="img-fluid small"></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
