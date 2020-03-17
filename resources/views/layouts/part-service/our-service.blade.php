<div class="container-fluid card-group mt-lg-5 mb-lg-5 text-center mx-auto" style="background-color: #FAFAFA;border-color: #707070;" >
    <div class="m-lg-3 font-weight-bold size-title text-uppercase mx-auto text-center col-lg-11 wow fadeInDownBig" data-wow-delay="0.6s">{{trans('part-service/our-serivce.title')}}</div>
    <div class=" m-lg-1 col-lg-12">
        <div class="card-deck mb-3">
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="0.6s" style="background-color: #333333; border: none; border-radius: 0">
                <div class="card-body custom ">
                    <div class="card-title font-weight-bold col-lg-11 text-left size-card-custom-title "
                         style="color: #FBD16B">{{$service_card_custom_title[0]->content}}</div>
                    <div class="card-text text-white col-lg-12 mt-4 text-left " >
                        {{$service_card_custom_content[0]->content}}</div>

                </div>
                <div class="card-link text-right mb-lg-4">
                    <a href="{{$service_card_custom_link[0]->content}}" class="mr-3" style="color: #FBD16B; ">{{trans('APP.link-card-right')}}<img
                            src="/img/arrow_forward.png" class="img-fluid small ml-3"></a>
                </div>
            </div>
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="0.8s">
                <div class="card-body">
                    <img class="row-cols-2 card-img img-fluid" src="{{$service_card_1_image[0]->content}}">
                    <div class="card-title font-weight-bold card-title-our-service mb-2">{{$service_card_1_title[0]->content}}</div>
                </div>
            </div>
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="1s">
                <div class="card-body">
                    <img class="card-img img-fluid" src="{{$service_card_2_image[0]->content}}">
                    <div class="card-title font-weight-bold card-title-our-service mb-2">{{$service_card_2_title[0]->content}}</div>
                </div>
            </div>
        </div>
        <div class="card-deck mt-3">
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="1.2s">
                <div class="card-body">
                    <img class="card-img img-fluid" src="{{$service_card_3_image[0]->content}}">
                    <div class="card-title font-weight-bold card-title-our-service mb-2">{{$service_card_3_title[0]->content}}</div>
                </div>
            </div>
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="1.4s">
                <div class="card-body">
                    <img class="card-img img-fluid" src="{{$service_card_4_image[0]->content}}">
                    <div class="card-title font-weight-bold card-title-our-service mb-2">{{$service_card_4_title[0]->content}}</div>
                </div>
            </div>
            <div class="card col-lg-4 shadow wow fadeInLeftBig" data-wow-delay="1.6s">
                <div class="card-body">
                    <img class="card-img img-fluid" src="{{$service_card_5_image[0]->content}}">
                    <div class="card-title font-weight-bold card-title-our-service mb-2">{{$service_card_5_title[0]->content}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
