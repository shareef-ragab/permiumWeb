<!-- featured insights -->
<div class="container-fluid card-group  mt-lg-5  mx-auto " @if(app()->getLocale()=='ar') dir='rtl' @endif
     style="background-color: #FAFAFA;border-color: #707070;">
    <div class="no-gutters mt-lg-5">
        <div class="text-left ml-lg-5 mb-lg-n3 font-weight-bold text-uppercase wow fadeInLeft" data-wow-delay="0.4s">{{trans('APP.featured_insights')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4 wow fadeInLeft" data-wow-delay="0.6s"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
    </div>
    <div class="card-deck ml-lg-auto no-gutters mx-auto mt-md-4 col-lg-12">
        <div class="col-sm-4 mb-lg-5" style="border-color: #707070; box-shadow: #1b1e21">
            <div class="card col-sm-10 shadow wow fadeInLeft" data-wow-delay="0.7s">
                <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-left')}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px"> {{trans('APP.title-card-insights-left')}}</p>
                    <p class="card-text">{{trans('APP.content-card-insights-left')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-lg-5 " style="border-color: #707070; box-shadow: #1b1e21">
            <div class="card col-sm-10 shadow wow fadeInUp" data-wow-delay="0.7s">
                <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-center')}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px"> {{trans('APP.title-card-insights-center')}}</p>
                    <p class="card-text">{{trans('APP.content-card-insights-center')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-lg-5 "style="border-color: #707070; box-shadow: #1b1e21">
            <div class="card col-sm-10 shadow wow fadeInRight" data-wow-delay="0.7s" >
                <img src="/img/Group%20243@2x.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{trans('APP.name-card-insights-right')}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px"> {{trans('APP.title-card-insights-right')}}</p>
                    <p class="card-text">{{trans('APP.content-card-insights-right')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto text-left mb-5 wow fadeInDownBig" data-wow-delay="1.1s">
        <a href="#" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                src="/img/arrow_forward.png" class="img-fluid small"></a>
    </div>
</div>
