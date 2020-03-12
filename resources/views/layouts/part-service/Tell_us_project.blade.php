<div class="container-fluid card-group mt-lg-5 text-center"
     style="background-color: #FAFAFA;border-color: #707070;">
    <div class="m-lg-3 font-weight-bold size-title text-uppercase mx-auto text-center col-lg-11 wow fadeInDownBig"
         data-wow-delay="0.6s">{{trans('part-service/Tell_us_project.title')}}</div>
    <div class="card-deck m-lg-1 mx-lg-auto col-lg-11 ">
        <div class="card col-lg-6 text-left border-0 m-1 wow fadeInLeftBig" data-wow-delay="0.6s"
             style="background-color: #FAFAFA;">
            <div class="card-body">
                <div class="card-title font-weight-bold size-title-card" style="color: #707070; ">
                    <div>
                        {{trans('part-service/Tell_us_project.D_P_Type')}}
                    </div>
                    <div class="mt-n3">
                        <img class="img-fluid small" src="/img/Rectangle%2057.png">
                    </div>
                </div>
                <div class="m-1">
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-1-item-1')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-1', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-1-item-2')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-2', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-1-item-3')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-3', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-1-item-4')}}</label>
                        <div class="col-sm-7 input-group mb-2">
                            {!! Form::text('calender', null, ['class' => 'form-control border-0','placeholder'=>"02/02/2020"]) !!}
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 " style="background-color:#FFFFFF"><img
                                        class="small img-fluid" src="/img/calendar_today.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-lg-5 text-left border-0 m-1 ml-auto wow fadeInLeftBig" data-wow-delay="0.8s"
             style="background-color: #FAFAFA;">
            <div class="card-body">
                <div class="card-title font-weight-bold size-title-card" style="color: #707070; ">
                    <div>
                        {{trans('part-service/Tell_us_project.O_R')}}
                    </div>
                    <div class="mt-n3">
                        <img class="img-fluid small" src="/img/Rectangle%2057.png">
                    </div>
                </div>
                <div class="m-1">

                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            {!! Form::text('item-1', null, ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF','placeholder'=>trans('part-service/Tell_us_project.card-2-item-1')]) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            {!! Form::textarea('item-1', null, ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF;max-height: 150px','placeholder'=>trans('part-service/Tell_us_project.card-2-item-2')]) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-deck m-lg-1 mx-lg-auto col-lg-11 mb-lg-5">
        <div class="card col-lg-6 text-left border-0 m-1 wow fadeInLeftBig" data-wow-delay="0.6s"
             style="background-color: #FAFAFA;">
            <div class="card-body">
                <div class="card-title font-weight-bold size-title-card" style="color: #707070; ">
                    <div>
                        {{trans('part-service/Tell_us_project.T_D')}}
                    </div>
                    <div class="mt-n3">
                        <img class="img-fluid small" src="/img/Rectangle%2057.png">
                    </div>
                </div>
                <div class="m-1">
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-3-item-1')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-1', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-3-item-2')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-2', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-3-item-3')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-3', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-5 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-3-item-4')}}</label>
                        <div class="col-sm-7 ">
                            {!! Form::select('item-3', array('select'=>'select') , null , ['class' => 'form-control border-0','style'=>'background-color:#FFFFFF']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card col-lg-5 text-left shadow card-size-custom ml-lg-auto wow fadeInLeftBig" data-wow-delay="0.8s"
             style="background-color: #FAFAFA;">
            <div class="card-body">
                <div class="card-title font-weight-bold size-title-card" style="color: #707070; ">
                    <div>
                        {{trans('part-service/Tell_us_project.E_C')}}
                    </div>
                    <div class="mt-n3">
                        <img class="img-fluid small" src="/img/Rectangle%2057.png">
                    </div>
                </div>
                <div class="m-1">
                    {!! Form::open(['route' => 'CALCULATE', 'method' => 'post']) !!}
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-6 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-4-item-1')}}</label>
                        <div class="col-sm-6 text-right">
                            {!! Form::label('email', 'Lorem Ipsum ', ['class' => 'control-label border-0 font-weight-bold']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-6 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-4-item-2')}}</label>
                        <div class="col-sm-6 text-right">
                            {!! Form::label('email', 'Medium', ['class' => 'control-label border-0 font-weight-bold']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-6 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-4-item-3')}}</label>
                        <div class="col-sm-6 text-right">
                            {!! Form::label('email', 'laptop ', ['class' => 'control-label border-0 font-weight-bold']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail"
                               class="col-sm-6 col-form-label"
                               style="color: #707070">{{trans('part-service/Tell_us_project.card-4-item-4')}}</label>
                        <div class="col-sm-6 text-right">
                            {!! Form::label('email', 'Included', ['class' => 'control-label border-0 font-weight-bold']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 col-form-label">
                            <label for="staticEmail"
                                   style="color: #707070">{{trans('part-service/Tell_us_project.total')}}</label>
                            <div class="mt-n2">
                                <label for="staticEmail" class="font-weight-bold">$3,000</label>
                            </div>
                        </div>
                        <div class="col-sm-4 ml-lg-auto text-right mt-1">
                            {!! Form::submit('Get Started', ['class' => 'form-control border-0 text-uppercase font-weight-bold size-text-submit-start','style'=>'background-color: #FBD16B;color:#000']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
