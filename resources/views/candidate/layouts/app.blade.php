<!doctype html>
<html lang="en">

<head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="{{ asset('welcome/css') }}/custom-bs.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/fonts') }}/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('welcome/fonts') }}/line-icons/style.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/style.css">
</head>

<body id="top">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        @include('candidate.components.header')

        <!-- HOME -->
        @include('candidate.components.hero')

        @yield('content')
        @include('candidate.components.footer')

    </div>

    <!-- SCRIPTS -->
    <script src="{{ asset('welcome/js') }}/jquery.min.js"></script>
    <script src="{{ asset('welcome/js') }}/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('welcome/js') }}/isotope.pkgd.min.js"></script>
    <script src="{{ asset('welcome/js') }}/stickyfill.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.fancybox.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.easing.1.3.js"></script>

    <script src="{{ asset('welcome/js') }}/jquery.waypoints.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('welcome/js') }}/owl.carousel.min.js"></script>

    <script src="{{ asset('welcome/js') }}/bootstrap-select.min.js"></script>

    <script src="{{ asset('welcome/js') }}/custom.js"></script>


</body>

</html>
