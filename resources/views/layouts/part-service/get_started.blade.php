<div class="container m-lg-5" >
    <div class="get_started card-group col-12 " style="background-color: #333333">
        <div class="card col-lg-8" style="background-color: #333333;border: none">
            <div class="card-body">
                <div class="card-title font-weight-bold size-title-getStarted text-uppercase wow fadeInLeft" data-wow-delay="0.6s"
                     style="color: #FBD16B">{{trans('part-service/get_started.title')}}</div>
                <div class="card-text text-white col-10 mt-lg-5 wow fadeInLeft" data-wow-delay="0.7s">{{trans('part-service/get_started.content')}}</div>
                <div class="card-group mx-auto col-12 mt-5">
                    <div class="card mx-auto text-center no-gutters col-4 mr-lg-n3" style="background-color: #333333;border: none">
                        <div class="card-body text-center">
                            <div class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.8s"
                                 style="color: #FBD16B">{{trans('part-service/get_started.count-year')}}</div>
                            <div class="card-text font-weight-bold wow fadeInUp" data-wow-delay="1s"
                                 style="color: #FBD16B">{{trans('part-service/get_started.title-year')}}
                            </div>
                        </div>
                    </div>
                    <div class="card mx-auto text-center no-gutters col-4 ml-lg-n3" style="background-color: #333333;border: none">
                        <div class="card-body text-center">
                            <div class="card-title font-weight-bold wow fadeInUp" data-wow-delay="0.8s"
                                 style="color: #FBD16B">{{trans('part-service/get_started.count-clint')}}</div>
                            <div class="card-text font-weight-bold m-1 wow fadeInUp" data-wow-delay="1s"
                                 style="color: #FBD16B">{{trans('part-service/get_started.title-client')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-4 car-form-service ml-lg-auto shadow-lg wow fadeInRight" data-wow-delay="1s" style="border: none;">
            <div class="card-body mt-lg-5">
                {!! Form::open(['route' => 'send_service', 'method' => 'post']) !!}
                <div class="form-group wow fadeInDownBig" data-wow-delay="0.6s">
                    {!! Form::text('input-1', null, ['class' => 'form-control border-0','style'=>'background-color: #FAFAFA;','placeholder'=>trans('part-service/get_started.input-1')]) !!}
                </div>
                <div class="form-group wow fadeInDownBig" data-wow-delay="0.6s">
                    {!! Form::text('input-2', null, ['class' => 'form-control border-0','style'=>'background-color: #FAFAFA;','placeholder'=>trans('part-service/get_started.input-2')]) !!}
                </div>
                <div class="form-group wow fadeInDownBig" data-wow-delay="0.6s">
                    {!! Form::text('input-3', null, ['class' => 'form-control border-0','style'=>'background-color: #FAFAFA;','placeholder'=>trans('part-service/get_started.input-3')]) !!}
                </div>
                <div class="form-group wow fadeInDownBig" data-wow-delay="0.6s">
                   {!! Form::textarea('input-4', null, ['class' => 'form-control border-0','style'=>'background-color: #FAFAFA;max-height: 200px ','placeholder'=>trans('part-service/get_started.input-4')]) !!}
                </div>
                <div class="form-group wow fadeInUpBig" data-wow-delay="0.6s" style="border: none;">
                  {!! Form::submit('send', ['class' => 'form-control mb-lg-5 border-0 w-50 mx-auto font-weight-bold text-uppercase','style'=>'background-color: #FBD16B; color:#000']) !!}
                   </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
