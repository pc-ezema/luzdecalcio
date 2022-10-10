<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} | Home</title>
    <link href="{{URL::asset('images/logo.png')}}" rel="icon">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/tooltipster.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <script src="{{URL::asset('assets/js/vendor/modernizr-2.8.3.min.html')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!-- fontawesome Icon -->
    <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
    <style>
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
        }

        .currency-wrap {
            position: relative;
        }

        .currency-code {
            position: absolute;
            left: 8px;
            top: 9px;
        }

        .text-currency {
            padding: 10px 20px;
        }
    </style>
    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 11000);
    </script>
</head>

<body>
    <div id='loader'>
        <div class="loader-inner">
            <div class="loading-content"></div>
        </div>
    </div>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- Alerts  Start-->
    <div style="position: fixed; top: 10px; right: 20px; z-index: 100000; width: auto;">
        @include('layouts.alert')
    </div>

    @includeIf('layouts.header')

    @yield('slider')

    @yield('page-content')

    @includeIf('layouts.footer')

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <!--Bootstrap Core-->
    <script src="{{URL::asset('js/propper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <!--to view items on reach-->
    <script src="{{URL::asset('js/jquery.appear.js')}}"></script>
    <!--Owl Slider-->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <!--number counters-->
    <script src="{{URL::asset('js/jquery-countTo.js')}}"></script>
    <!--Parallax Background-->
    <script src="{{URL::asset('js/parallaxie.js')}}"></script>
    <!--Cubefolio Gallery-->
    <script src="{{URL::asset('js/jquery.cubeportfolio.min.js')}}"></script>
    <!--Fancybox js-->
    <script src="{{URL::asset('js/jquery.fancybox.min.js')}}"></script>
    <!--tooltip js-->
    <script src="{{URL::asset('js/tooltipster.min.js')}}"></script>
    <!--wow js-->
    <script src="{{URL::asset('js/wow.js')}}"></script>
    <!--Revolution SLider-->
    <script src="{{URL::asset('js/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{URL::asset('js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
    <!--custom functions and script-->
    <script src="{{URL::asset('js/functions.js')}}"></script>

    <script>
        $(function() {
            $("form").submit(function() {
                $('#loader').show();
            });
        });
    </script>
</body>

</html>