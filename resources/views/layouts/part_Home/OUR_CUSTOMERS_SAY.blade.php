<!-- Explore our offering -->
<div class="container-fluid card-group mt-lg-5  ">
    <div class="no-gutters mt-lg-5">
        <div class="text-left ml-lg-5 mb-lg-n3 font-weight-bold text-uppercase wow fadeInLeft"
             data-wow-delay="0.4s">{{trans('part-home/OUR_CUSTOMERS_SAY.title')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4 wow fadeInLeft" data-wow-delay="0.6s"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
    </div>
    <div class="ml-lg-5 mt-lg-5 wow fadeInRight" data-wow-delay="0.8s">
        <div class="card-group m-lg-4 ">
            <div class="tab-content no-gutters col-lg-8 card-content  " id="nav-tabContent"
                 style="background-color: #FAFAFA;border-color: #707070;">
                @for($i=0;$i<5;$i++)
                <div class="tab-pane mt-lg-5 fade @if($i===0) show active @endif" id="list-customer-item-{{$i}}"
                     role="tabpanel" aria-labelledby="list-customer-item1-list">
                    <div class="card-deck container-fluid card-group mt-lg-5">
                        <div class="no-gutters mt-lg-n5 ml-lg-n5">
                            <div class=" ml-lg-5 mt-lg-3 font-weight-bold text-uppercase"
                                 style="font-size: 24px"><img src="/img/format_quote.png" class="img-fluid"></div>
                        </div>
                        <div class="text-right no-gutters">
                            <div class="mt-lg-n5">
                                <div class="ml-lg-5 font-weight-bold text-uppercase mt-lg-n5"
                                     style="font-size: 18px;font-family: SansSerif,sans-serif">{{$CUSTOMERS_SAY[$i]->name}}</div>
                                <div class="ml-lg-5 font-weight-bold text-uppercase"
                                     style="font-size: 18px;font-family: SansSerif,sans-serif">{{$CUSTOMERS_SAY[$i]->job}}</div>
                            </div>
                            <div class="ml-lg-5 mt-lg-5 text-left mr-5"
                                 style="font-size: 18px; font-style: italic; ">{{$CUSTOMERS_SAY[$i]->content}}</div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="list-group col-lg-4 card-content-item shadow " id="list-tab-our-customer" role="tablist"
                 style="background-color: #333333;">
                @for($i=0;$i<5;$i++)
                    <a class="list-group-item list-group-item-action text-left item-select pr-5  mt-lg-4 @if($i===0) mt-lg-5  active @elseif($i===4) mb-lg-5  @endif"
                       id="list-customer-item-{{$i}}-list" data-toggle="list-customer"
                       href="#list-customer-item-{{$i}}" role="tab"><img src="{{$CUSTOMERS_SAY[$i]->image}}" class="img-fluid"></a>
                @endfor
                <div class="mt-lg-auto text-left ml-lg-auto mr-lg-5 mb-lg-4">
                    <a href="{{$link_OUR_Instagram_SAY[0]->content}}" class="mr-lg-5 text-uppercase"
                       style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                            src="/img/arrow_forward.png" class="img-fluid small mr-3 ml-3"></a>
                </div>
            </div>
        </div>
    </div>
</div>
