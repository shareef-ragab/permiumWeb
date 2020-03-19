<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('/')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link href="/css/welcome.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    @yield('import')
    <title>{{trans('APP.title').' | '}}@yield('title-page','Home')</title>
</head>
<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
<script src="/js/background.js"></script>
<script src="/js/scrollUp.min.js"></script>
<script src="/js/wow.min.js"></script>
<script>
    $('#list-tab-our-customer a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show').userSelect
    })
    $(document).ready(function () {
        $(window).scroll(function () {
           /* var navbar = document.getElementById('navberContent');*/
            if ($(document).scrollTop() > 50) {
                $(".navbar-fixed-top").css("background-color", "#333333");
              /*  navbar.classList.add('background');*/
            } else {
                $(".navbar-fixed-top").css("background-color", "transparent");
                /*navbar.classList.remove('background');*/
            }
        });
    });
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
    /*$( "#inlineFormCustomSelect" ).item(function() {
        $( "#langForm" ).submit();
    });*/

</script>
</body>
</html>
