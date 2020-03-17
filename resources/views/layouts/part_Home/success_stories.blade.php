<div class="container-fluid card-group mt-lg-5  " style="background-color: #FAFAFA;border-color: #707070;">
    <div class="no-gutters mt-lg-5">
        <div class="text-left ml-lg-5 mb-lg-n3 font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.4s">{{trans('part-home/success_stories.title_success_stories')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4 wow fadeInUp" data-wow-delay="0.5s"
             style="color: #FBD16B; border-color: #707070;opacity: 1" >
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
    </div>
    <div class="col-lg-12 mx-auto mt-lg-5 mb-lg-5">
        <div class="card-deck no-gutters">
            <div class="col-sm-4 mb-4 mr-lg-5 ml-lg-4" >
                <div class="card bg-dark text-white size-card size-card-1 wow fadeInLeft" data-wow-delay="0.6s">
                    <img src="{{$stories_card_1_image[0]->content}}" class="card-img size-card-1" alt="...">
                    <div class="card-img-overlay content ">
                        <p class="card-text font-weight-bold wow fadeInUp" data-wow-delay="0.9s">{{$stories_card_1_content[0]->content}}</p>
                        <div class="text-left wow fadeInUp" data-wow-delay="0.8s" style="color: #FBD16B; border-color: #707070;opacity: 1">
                            <img class="" src="/img/Rectangle 39.png">
                        </div>
                        <h5 class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.7s" style="color: #FBD16B">{{$stories_card_1_title[0]->content}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4 ml-lg-5 " >
                <div class="card bg-dark text-white size-card size-card-2 wow fadeInRight" data-wow-delay="0.6s">
                    <img src="{{$stories_card_2_image[0]->content}}" class="card-img size-card-2" alt="...">
                    <div class="card-img-overlay content">
                        <p class="card-text font-weight-bold wow fadeInUp" data-wow-delay="0.9s">{{$stories_card_2_content[0]->content}}</p>
                        <div class="text-left wow fadeInUp" data-wow-delay="0.8s" style="color: #FBD16B; border-color: #707070;opacity: 1">
                            <img class="" src="/img/Rectangle 39.png">
                        </div>
                        <h5 class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.7s" style="color: #FBD16B">{{$stories_card_2_title[0]->content}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck no-gutters" >
            <div class="col-sm-4 mt-lg-4 mb-4 mr-lg-5 ml-lg-4 " >
                <div class="card bg-dark text-white size-card size-card-3 wow fadeInDown" data-wow-delay="0.6s">
                    <img src="{{$stories_card_3_image[0]->content}}" class="card-img size-card-3" alt="...">
                    <div class="card-img-overlay content ">
                        <p class="card-text font-weight-bold wow fadeInLeft" data-wow-delay="0.9s">{{$stories_card_3_content[0]->content}}</p>
                        <div class="text-left wow fadeInUp" data-wow-delay="0.8s" style="color: #FBD16B; border-color: #707070;opacity: 1">
                            <img class="" src="/img/Rectangle 39.png">
                        </div>
                        <h5 class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.7s" style="color: #FBD16B">{{$stories_card_3_title[0]->content}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-lg-4 card-margin ">
                <div class="card bg-dark text-white size-card size-card-3 wow fadeInDown" data-wow-delay="0.6s" >
                    <img src="{{$stories_card_4_image[0]->content}}" class="card-img size-card-3 " alt="...">
                    <div class="card-img-overlay content">
                        <p class="card-text font-weight-bold wow fadeInLeft" data-wow-delay="0.9s">{{$stories_card_4_content[0]->content}}</p>
                        <div class="text-left wow fadeInUp" data-wow-delay="0.8s" style="color: #FBD16B; border-color: #707070;opacity: 1">
                            <img class="" src="/img/Rectangle 39.png">
                        </div>
                        <h5 class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.7s" style="color: #FBD16B">{{$stories_card_4_title[0]->content}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mx-auto text-left mb-5 wow fadeInUp" data-wow-delay="1.3s">
        <a href="{{$stories_link[0]->content}}" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                src="/img/arrow_forward.png" class="img-fluid small"></a>
    </div>
</div>
