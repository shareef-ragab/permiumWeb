<!-- industry expertise-->
<div class="container-fluid card-group mt-lg-5" style="background-color: #333333;">
    <div class="no-gutters wow fadeInUp" data-wow-delay="0.4s">
        <div
            class="text-left ml-lg-5 mt-lg-5 font-weight-bold text-uppercase text-white">{{trans('part-home/Solutions_deliver.title')}}</div>
        <div class="text-left ml-lg-5 mt-lg-n5 display-4"
             style="color: #FBD16B; border-color: #707070;opacity: 1">
            <span class="mt-lg-n5" style="border-color: #707070; text-shadow: #000000">__</span>
        </div>
        <div class="text-left ml-lg-5 mt-lg-5 mr-lg-5 mb-lg-5 text-white"
             style="font-size: 18px">{{$SOLUTIONS_DELIVER_content[0]->content}}<br></div>
    </div>
    @php
        $start=0;
        $end=5;
    @endphp
    @for($i=0;$i<$count_line;$i++)
        <div class="card-group col-lg-12 mx-auto wow fadeInUp" data-wow-delay="0.7s">
            @for($j=$start;$j<$end;$j++)
                <div
                    class="card no-gutters card-text-custom col-lg-2 m-1 shadow bg-white text-center mx-auto wow fadeInUp"
                    data-wow-delay="{{$j*0.4+$i}}s">
                    <h5 class="card-title">{{$solutions_we_deliver[$j]->content}}</h5>
                    <a href="{{$solutions_we_deliver[$j]->link}}" class="card-link text-right mr-n2">
                        <img src="/img/Group%2021.png" class="img-fluid small"></a>
                </div>
            @endfor
        </div>
        @php
            $start+=5;
            $end+=5;
        @endphp
    @endfor
    <div class="mb-lg-5 mt-lg-5">
        <br class="mb-lg-5 mt-lg-5">
    </div>
</div>
