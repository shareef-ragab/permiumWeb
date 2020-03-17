<!-- industry expertise-->
<div class="container-fluid card-group mt-lg-5">
    <div class="no-gutters mt-lg-5">
        <div class="text-left ml-lg-5 mt-lg-n5 font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.4s" >{{trans('APP.title_Platforms_work')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5 fadeInUp" data-wow-delay="0.5s" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
        <div class="text-left ml-lg-5 mt-lg-5 mr-lg-5 wow fadeInUp" data-wow-delay="0.9s"
             style="font-size: 18px">{{$PALT_WORK_contnet[0]->content}}</div>
    </div>
    <div class="card-group col-lg-12 mx-auto mt-5 mb-5">
        <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto shadow wow fadeInLeft" data-wow-delay="1.0s">
            <img src="{{$PALT_WORK_image_1[0]->content}}" class="img-fluid">
        </div>
        <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto shadow wow fadeInLeft" data-wow-delay="1.1s">
            <img src="{{$PALT_WORK_image_2[0]->content}}" class="img-fluid">
        </div>
        <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto shadow wow fadeInLeft" data-wow-delay="1.2s">
            <img src="{{$PALT_WORK_image_3[0]->content}}" class="img-fluid">
        </div>
        <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto shadow wow fadeInLeft" data-wow-delay="1.3s">
            <img src="{{$PALT_WORK_image_4[0]->content}}" class="img-fluid">
        </div>
        <div class="no-gutters col-lg-2 m-3 mx-auto ml-lg-auto shadow wow fadeInLeft" data-wow-delay="1.4s">
            <img src="{{$PALT_WORK_image_5[0]->content}}" class="img-fluid">
        </div>
    </div>
</div>
