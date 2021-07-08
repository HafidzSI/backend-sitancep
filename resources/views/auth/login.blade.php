<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>SITANCEP - Sign in page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('template') }}/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('template') }}/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template') }}/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="{{ asset('template') }}/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="{{ asset('template') }}/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
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

<body class="bg-soft">
    <main>

        <!-- Section -->
        <section class="vh-lg-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('template') }}/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">ADMIN - SITANCEP</h1>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="mt-4">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <input type="email" name="email" class="form-control" placeholder="example@company.com" id="email" autofocus required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input name="password" type="password" placeholder="Password" class="form-control" id="password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                            <label class="form-check-label" for="defaultCheck5">
                                              Remember me
                                            </label>
                                        </div>
                                        <div><a href="#" class="small text-right">Lost password?</a></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
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

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('template') }}/assets/js/volt.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Initialize Firebase
    var firebaseConfig = {
        apiKey: "AIzaSyCI4UT7y3RGn4bGFUGbbh4EGCwSVFqW6xo",
        authDomain: "sitancep.firebaseapp.com",
        databaseURL: "https://sitancep-default-rtdb.firebaseio.com/",
        projectId: "sitancep",
        storageBucket: "sitancep.appspot.com",
        messagingSenderId: "105363604636",
        appId: "1:105363604636:web:ecf5d7f16996be85089959"
    };
    firebase.initializeApp(firebaseConfig);
    var facebookProvider = new firebase.auth.FacebookAuthProvider();
    var googleProvider = new firebase.auth.GoogleAuthProvider();
    var facebookCallbackLink = '/login/facebook/callback';
    var googleCallbackLink = '/login/google/callback';
    async function socialSignin(provider) {
    var socialProvider = null;
    if (provider == "facebook") {
        socialProvider = facebookProvider;
        document.getElementById('social-login-form').action = facebookCallbackLink;
    } else if (provider == "google") {
        socialProvider = googleProvider;
        document.getElementById('social-login-form').action = googleCallbackLink;
    } else {
        return;
    }
    firebase.auth().signInWithPopup(socialProvider).then(function(result) {
        result.user.getIdToken().then(function(result) {
        document.getElementById('social-login-tokenId').value = result;
        document.getElementById('social-login-form').submit();
        });
    }).catch(function(error) {
        // do error handling
        console.log(error);
    });
    }
</script>

</body>

</html>



