<canvas class="background "></canvas>
<nav class="navbar-fixed-top wgl-header-row_wrapper navbar navbar-expand-lg  nav-opacity fixed-top " @if(app()->getLocale()=='ar') dir='rtl' @endif>
    <img class="navbar-brand ml-lg-5 img-fluid"  src="/img/logo%20gold2@2x.png">
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "><img src="/img/Nav.png" class="img-fluid small"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse "  href="{{route('home')}}">{{trans('nav.home')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse" href="{{route('service')}}">{{trans('nav.services')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse" href="#">{{trans('nav.about_us')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse" href="{{route('portfolio')}}">{{trans('nav.portfolio')}}</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse" href="#">{{trans('nav.blog')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mouse" href="{{route('COST_CALCULATOR')}}">{{trans('nav.COST_CALCULATOR')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 pl-4 pr-4 pt-sm-2 pb-sm-2 mouse_contact " href="#" style="background: #FBD16B;">{{trans('nav.contact_us')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-uppercase font-weight-bold m-3 mr-5" href="#" ><img src="/img/search.png"></a>
                </li>
            </ul>
        </form>
    </div>
</nav>
