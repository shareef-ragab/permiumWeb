<!-- featured insights -->
<div class="container-fluid card-group  mt-lg-5  mx-auto "
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
                <img src="{{$featcher_card_1_image[0]->content}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{$featcher_card_1_title[0]->content}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px">{{$featcher_card_1_subtitle[0]->content}} </p>
                    <p class="card-text">{{$featcher_card_1_content[0]->content}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-lg-5 " style="border-color: #707070; box-shadow: #1b1e21">
            <div class="card col-sm-10 shadow wow fadeInUp" data-wow-delay="0.7s">
                <img src="{{$featcher_card_2_image[0]->content}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{$featcher_card_2_title[0]->content}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px"> {{$featcher_card_2_subtitle[0]->content}}</p>
                    <p class="card-text">{{$featcher_card_2_content[0]->content}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-lg-5 "style="border-color: #707070; box-shadow: #1b1e21">
            <div class="card col-sm-10 shadow wow fadeInRight" data-wow-delay="0.7s" >
                <img src="{{$featcher_card_3_image[0]->content}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title display-5 "
                        style="color: #FBD16B; font-size: 14px">{{$featcher_card_3_title[0]->content}}</h5>
                    <p class="card-text col-sm-9 text-wrap font-weight-bold ml-n3 text-left"
                       style=" font-size: 18px"> {{$featcher_card_3_subtitle[0]->content}}</p>
                    <p class="card-text">{{$featcher_card_3_content[0]->content}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto text-left mb-5 wow fadeInDownBig" data-wow-delay="1.1s">
        <a href="{{$featcher_link[0]->content}}" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                src="/img/arrow_forward.png" class="img-fluid small"></a>
    </div>
</div>
