<div class="container-fluid card-group mt-lg-5 mb-lg-5 text-center" >
    <div class="m-lg-3 font-weight-bold size-title mx-auto text-center text-uppercase col-lg-11 wow fadeInUp"data-wow-delay="0.5s">{{trans('part-service/our_clients.title')}}</div>
    <!-- about -->
    <div class="col-sm-7 mt-lg-5 text-md-center text-center mx-auto wow fadeInUp"data-wow-delay="0.5s">
        <p class="text ">{{$content_client[0]->content}}</p>
    </div>
    @include('layouts.part_Home.partnerships')
</div>
