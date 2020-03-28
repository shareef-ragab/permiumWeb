<div id="carouselExampleControls" class="carousel slide col-lg-12 mx-auto mt-lg-5 mb-lg-5" data-ride="carousel" role="listbox" id="clients-9-carousel">
    <div class="carousel-inner card-group slides5" data-visible="5">
        @foreach($partnerships as $partnership)
            <div
                class="carousel-item @if($loop->first or $loop->index<5) active @endif no-gutters col-lg-2 m-3 mx-auto ml-lg-auto ">
                <div class="wrap-img ">
                <img src="{{$partnership->image}}" class="d-block img-fluid"/>
                </div>
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
<div class="container">
    <div class="carousel slide" data-ride="carousel" role="listbox" id="clients-9-carousel">
        <div class="carousel-inner slides5" data-visible="5">
            <div class="carousel-item">
                <div class="media-container-row">
                    <div class="col-md-12 col-lg-15">
                        <div class="wrap-img ">
                            <img src="/img/asset.png" class="img-responsive clients-img" media-simple="true">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-15 cloneditem-1 clonedCol" data-cloned-index="1">
                        <div class="wrap-img ">
                            <img src="/img/asset.png" class="img-responsive clients-img" media-simple="true">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-15 cloneditem-2 clonedCol" data-cloned-index="2">
                        <div class="wrap-img ">
                            <img src="/img/asset.png" class="img-responsive clients-img" media-simple="true">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-15 cloneditem-3 clonedCol" data-cloned-index="3">
                        <div class="wrap-img ">
                            <img src="/img/asset.png" class="img-responsive clients-img" media-simple="true">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-15 cloneditem-4 clonedCol" data-cloned-index="4">
                        <div class="wrap-img ">
                            <img src="/img/asset.png" class="img-responsive clients-img" media-simple="true">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="carousel-controls">
            <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button"
               data-slide="prev" href="#clients-9-carousel">
                <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button"
               data-slide="next" href="#clients-9-carousel">
                <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
