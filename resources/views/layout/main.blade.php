<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>SITANCEP - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Halaman Admin Sitancep">
    <meta name="keywords"
        content="sitancep, admin sitancep, bmcktr" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    {{-- <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg"> --}}

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('template') }}/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template') }}/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template') }}/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('template') }}/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('template') }}/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <link rel="stylesheet" href="{{ asset('plugin') }}/iziToast-master/dist/css/iziToast.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('template') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('template') }}/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('template') }}/css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="{{ asset('template') }}/assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="{{ asset('template') }}/assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid bg-soft">
        <div class="row">
            <div class="col-12">

                @include('layout.sidebar')

                <main class="content">
                    @include('layout.topbar')
                    <div class="row justify-content-md-center">

                        @yield('content')

                    </div>


                </main>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="{{ asset('template') }}/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('template') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('template') }}/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="{{ asset('template') }}/vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="{{ asset('template') }}/vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('template') }}/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="{{ asset('template') }}/vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="{{ asset('template') }}/vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="{{ asset('template') }}/vendor/chartist/dist/chartist.min.js"></script>
    <script src="{{ asset('template') }}/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="{{ asset('template') }}/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="{{ asset('template') }}/vendor/simplebar/dist/simplebar.min.js"></script>

    <script src="{{ asset('plugin') }}/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{ asset('template') }}/assets/js/volt.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
    https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>

    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyCI4UT7y3RGn4bGFUGbbh4EGCwSVFqW6xo",
            authDomain: "sitancep.firebaseapp.com",
            databaseURL: "https://sitancep-default-rtdb.firebaseio.com/",
            projectId: "sitancep",
            storageBucket: "sitancep.appspot.com",
            messagingSenderId: "105363604636",
            appId: "1:105363604636:web:ecf5d7f16996be85089959"
        };
    </script>

    @yield('scripts')

</body>

</html>
