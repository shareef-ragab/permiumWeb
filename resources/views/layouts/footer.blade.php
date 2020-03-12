<footer class="footer mt-auto py-3" style="background-color: #333333" >
    <div class="container mx-auto col-sm-11">
        <div class="card-deck mx-auto mt-auto col-sm-12">
            <div class="no-gutters col-sm-1 wow fadeInUp mt-sm-4" data-wow-delay="0.6s"
                 style="background-color: #333333;border: none">
                <img class="img-fluid col-12 " src="/img/logo gold2@2x.png">
            </div>
            <div class="card-deck no-gutters col-sm-4 mx-auto mt-sm-4" style="background-color: #333333;border: none">
                <div class="no-gutters col-sm-2 wow fadeInUp " data-wow-delay="0.8s">
                    <img class="img-fluid small" src="/img/place.png">
                </div>
                <div class="no-gutters col-sm-8 wow fadeInDown " data-wow-delay="1s">
                    <p class="text-wrap text-white ">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                </div>
            </div>
            <div class="card-deck no-gutters col-sm-2 mx-auto mt-sm-4" style="background-color: #333333;border: none">
                <div class="no-gutters col-sm-2 wow fadeInUp " data-wow-delay="0.8s">
                    <img class="img-fluid small " src="/img/local_phone.png">
                </div>
                <div class="no-gutters col-sm-8 wow fadeInDown " data-wow-delay="1s">
                    <p class="text-wrap text-white "> (648)192-2454</p>
                </div>
            </div>
            <div class="card-deck no-gutters col-sm-3 mx-auto mt-sm-4" style="background-color: #333333;border: none">
                <div class="no-gutters col-sm-2 wow fadeInUp " data-wow-delay="0.8s">
                    <img class="img-fluid small" src="/img/email.png">
                </div>
                <div class="no-gutters col-sm-8 wow fadeInDown " data-wow-delay="1s">
                    <p class="text-wrap text-white"> tyler.freeman@mail.com</p>
                </div>
            </div>
            <div class="card-deck no-gutters col-sm-2 mx-auto mt-sm-4" style="background-color: #333333;border: none">
                <div class="no-gutters col-sm-4 wow fadeInLeft " data-wow-delay="0.8s">
                    <a><img class="img-fluid small" src="/img/linkedin-in.png"></a>
                </div>
                <div class="no-gutters col-sm-4 wow fadeInDown " data-wow-delay="0.8s">
                    <a><img class="img-fluid small" src="/img/facebook-f.png"></a>
                </div>
                <div class="no-gutters col-sm-4 wow fadeInRight " data-wow-delay="0.8s">
                    <a><img class="img-fluid small" src="/img/twitter.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto  text-center">
        <img class="img-fluid  " src="/img/Rectangle 45.png">
    </div>
    <div class="container mx-auto col-sm-11 ">
        <div class="card-deck">
            <div class="ml-lg-5 mt-sm-4 no-gutters wow fadeInLeft " data-wow-delay="0.6s"
                 style="background-color: #333333;border: none">
                <p class="text-wrap text-white " style="font-size:14px; "> © 2020 Premium Development Company. All
                    rights reserved. </p>
            </div>
            <div class="ml-lg-5 mt-sm-4 no-gutters wow fadeInUp " data-wow-delay="0.6s"
                 style="background-color: #333333;border: none">
                <p class="text-wrap text-white " style="font-size:14px;   "> About Premium Development</p>
            </div>
            <div class="ml-lg-5 mt-sm-4 no-gutters wow fadeInDown " data-wow-delay="0.6s"
                 style="background-color: #333333;border: none">
                <p class="text-wrap text-white " style="font-size:14px;  "> About Premium Development</p>
            </div>
            <div class="ml-lg-auto mt-sm-4 no-gutters ml-lg-n5 wow fadeInRight " data-wow-delay="1.5s"
                 style="background-color: #333333;border: none">
                {!! Form::open(['route' => 'local', 'method' => 'post','id'=>'langForm']) !!}
                @if(app()->getLocale()=='ar')
                    {!! Form::select('lang', array('ar'=>'Arabic','en'=>'English') , null , ['class' => 'custom-select-sm mr-sm-2 text-white','style'=>'background-color:  #333333;border: none; font-size:14px;','onchange'=>'submit()']) !!}
                @else
                    {!! Form::select('lang', array('en'=>'English','ar'=>'Arabic') , null , ['class' => 'custom-select-sm mr-sm-2 text-white','style'=>'background-color:  #333333;border: none; font-size:14px;','onchange'=>'submit()']) !!}
                @endif
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</footer>
