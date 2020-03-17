<div class="card container card-manged"  style="border: none;background-color: #FAFAFA">
    <div class="row no-gutters mt-lg-5">
        <div class="col-md-4 shadow card-img-manged wow fadeInLeft" data-wow-delay="0.4s">
            <img src="{{$image_managed_it_service[0]->content}}" class="card-img " alt="...">
        </div>
        <div class="col-md-8 wow fadeInRight" data-wow-delay="0.5s">
            <div class="card-body">
                <div class="text-left ml-lg-5 mt-lg-n3 font-weight-bold text-uppercase fadeInUp" data-wow-delay="1.1s"
                     style="font-size: 18px">{{trans('APP.title_managed_services')}}</div>
                <div class="text-left ml-lg-5 mt-lg-n5 display-4 fadeInUp" data-wow-delay="1.2s"
                     style="color: #FBD16B; border-color: #707070;opacity: 1">
                    <span class="mt-lg-n5 " style="border-color: #707070; text-shadow: #000000">__</span>
                </div>
                <div class="text-left ml-lg-5 mt-lg-5 fadeInUp" data-wow-delay="1.3s" style="font-size: 18px">{{$content_managed_it_servce[0]->content}}</div>
            </div>
            <div class="text-right mr-lg-auto mr-lg-5 card-link-manged">
                <a href="{{$link_managed_it_service[0]->content}}" class="mr-lg-5 fadeInRight" data-wow-delay="1.5s" style="color: #FBD16B; ">{{trans('APP.Learn_More')}}<img
                        src="/img/arrow_forward.png" class="img-fluid small"></a>
            </div>
        </div>
    </div>
</div>
