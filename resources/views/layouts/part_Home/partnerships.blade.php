
<div id="carouselExampleControls" class="carousel slide col-lg-12 mx-auto mt-lg-5 mb-lg-5" data-ride="carousel">
        <div class="carousel-inner card-group ">
            @foreach($partnerships as $partnership)
            <div class="carousel-item @if($loop->first or $loop->index<5) active @endif no-gutters col-lg-2 m-3 mx-auto ml-lg-auto " >
                <img src="{{$partnership->image}}" class="d-block img-fluid"/>
            </div>
            @endforeach
        </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
