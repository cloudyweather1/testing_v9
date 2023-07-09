<!DOCTYPE html>
<html lang="en">

<head>
    <title>Winkel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('template0/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('template0/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('template0/css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('template0/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('template0/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ url('template0/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('template0/css/style.css') }}">

    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

</head>

<body class="goto-here">




    <!-- Start Navbar -->
    <x-template0.navbar cart-number="0" />
    <!-- End Navbar -->


    <!-- Start Alert -->
    <x-core.alert />
    <!-- End Alert -->


    <!-- Start Page Content -->
    {{ $slot }}
    <!-- End Page Content -->

    <!-- Start Footer -->
    <x-template0.footer />
    <!-- End Footer -->







    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>



    <script src="{{ url('template0/js/jquery.min.js') }} "></script>
    <script src="{{ url('template0/js/jquery-migrate-3.0.1.min.js') }} "></script>
    <script src="{{ url('template0/js/popper.min.js') }} "></script>
    <script src="{{ url('template0/js/bootstrap.min.js') }} "></script>
    <script src="{{ url('template0/js/jquery.easing.1.3.js') }} "></script>
    <script src="{{ url('template0/js/jquery.waypoints.min.js') }} "></script>
    <script src="{{ url('template0/js/jquery.stellar.min.js') }} "></script>
    <script src="{{ url('template0/js/owl.carousel.min.js') }} "></script>
    <script src="{{ url('template0/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ url('template0/js/aos.js') }} "></script>
    <script src="{{ url('template0/js/jquery.animateNumber.min.js') }} "></script>
    <script src="{{ url('template0/js/bootstrap-datepicker.js') }} "></script>
    <script src="{{ url('template0/js/scrollax.min.js') }} "></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ url('template0/js/google-map.js') }} "></script>
    <script src="{{ url('template0/js/main.js') }} "></script>
    <script src="{{ url('template0/js/custom.js') }} "></script>




</body>

</html>