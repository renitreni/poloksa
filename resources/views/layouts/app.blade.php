<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description" content="{{ env('APP_NAME') }}">
    <meta property="og:image" content="{{ asset('images/polo-ksa-logo.jpg') }}">
    <meta property="og:url" content="{{ asset('images/polo-ksa-logo.jpg') }}">
    <meta name="twitter:title" content="{{ env('APP_NAME') }}">
    <meta name="twitter:description" content="{{ env('APP_NAME') }}">
    <meta name="twitter:image" content="{{ asset('images/polo-ksa-logo.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    <meta charset="UTF-8">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="keywords" content="Philippine, Embassy, Government">
    <meta name="author" content="Yaramay CMS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/polo-ksa-logo.jpg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/polo-ksa-logo.jpg') }}">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/polo-ksa-logo.jpg') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
{{--<!-- Preloader Start -->--}}
{{--<div id="preloader-active">--}}
{{--    <div class="preloader d-flex align-items-center justify-content-center">--}}
{{--        <div class="preloader-inner position-relative">--}}
{{--            <div class="preloader-circle"></div>--}}
{{--            <div class="preloader-img pere-text">--}}
{{--                <img src="assets/img/logo/loder.jpg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Preloader Start -->--}}
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-3 col-sm-1">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('images/polo-ksa-logo.jpg') }}" class="img-fluid"
                                         alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('welcome') }}#about-detail">About Us</a></li>
                                        <li><a href="{{ route('welcome') }}#contact-sec">Contact</a></li>
                                        <li><a href="#">Other Details</a>
                                            <ul class="submenu" style="width: 230px !important;">
                                                <li>
                                                    <a href="#">Agencies</a>
                                                </li>
                                                {{-- <li> --}}
                                                {{--                                                    <a href="{{ route('complaint.index') }}">Request Assistance Form</a>--}}
                                                {{-- </li> --}}
                                                <li><a href="http://tabang.poloksa-ph.com">Tabang System</a></li>
                                                <li>
                                                    <a href="{{ route('downloadable') }}">
                                                        Contracts and Documents
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">OEC System</a>
                                            <ul class="submenu" style="width: 230px !important;">
                                                <li>
                                                    <a style="display: flex;align-items:center; gap:8px;" rel="noopener noreferrer" referrerpolicy="no-referrer" target="_blank" href="https://etravel.gov.ph/">
                                                        <div style="width: 24px; height:24px;">
                                                            <img style="width: 100%" src="https://www.globalexchange.co.uk/images/flag/Philippines.png" alt="PH_logo">
                                                        </div>
                                                        <span>E-Travel</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="display: flex;align-items:center; gap:8px;" rel="noopener noreferrer" referrerpolicy="no-referrer" target="_blank" href="https://play.google.com/store/apps/details?id=dmw.ofwmobileapp&hl=en&gl=US">
                                                        <div style="width: 24px; height:24px;">
                                                            <img style="width: 100%" src="https://pluspng.com/img-png/play-store-logo-png-google-play-store-logo-png-2608-free-transparent-png-logos-1525x1600.png" alt="Playstore_logo">
                                                        </div>
                                                        <span>DMWMobile Android</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="display: flex;align-items:center; gap:8px;" rel="noopener noreferrer" referrerpolicy="no-referrer" target="_blank" href="https://apps.apple.com/sg/app/dmwmobile/id6446920804">
                                                        <div style="width: 24px; height:24px;">
                                                            <img style="width: 100%" src="https://www.bridgeit.dk/wp-content/uploads/2015/07/appleiOSLogo.png" alt="IOS_logo">
                                                        </div>
                                                        <span>DMWMobile IOS</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="display: flex;align-items:center; gap:8px;" rel="noopener noreferrer" referrerpolicy="no-referrer" target="_blank" href="https://onlineservices.dmw.gov.ph/OnlineServices/(S(jlu1g1mblpy1kvi3r3gcj33p))/POEAOnline.aspx">
                                                        <div style="width: 24px; height:24px;">
                                                            <img style="width: 100%" src="https://www.dmw.gov.ph/assets/logo.7e414798.png" alt="DMW_logo">
                                                        </div>
                                                        <span>OFW Login</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="add-list"><a href="http://appoint.poloksa-ph.com/services/1">
                                                <i class="ti-plus"></i> Book an Appointment</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    @yield('content')
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('images/polo-ksa-logo.jpg') }}"
                                                     width="45%" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">--}}
                    {{--                        <div class="single-footer-caption mb-50">--}}
                    {{--                            <div class="footer-tittle">--}}
                    {{--                                <h4>Quick Link</h4>--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">Home</a></li>--}}
                    {{--                                    <li><a href="#">Listing</a></li>--}}
                    {{--                                    <li><a href="#">About</a></li>--}}
                    {{--                                    <li><a href="#">Contact</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">--}}
                    {{--                        <div class="single-footer-caption mb-50">--}}
                    {{--                            <div class="footer-tittle">--}}
                    {{--                                <h4>Categories</h4>--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">Reasonable Hotel</a></li>--}}
                    {{--                                    <li><a href="#">Popular Restaurant</a></li>--}}
                    {{--                                    <li><a href="#">Easy Shopping</a></li>--}}
                    {{--                                    <li><a href="#">Night Life</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">--}}
                    {{--                        <div class="single-footer-caption mb-50">--}}
                    {{--                            <div class="footer-tittle">--}}
                    {{--                                <h4>Download App</h4>--}}
                    {{--                                <ul>--}}
                    {{--                                    <li class="app-log"><a href="#"><img src="assets/img/gallery/app-logo.png" alt=""></a></li>--}}
                    {{--                                    <li><a href="#"><img src="assets/img/gallery/app-logo2.png" alt=""></a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <div class="d-flex flex-column">

                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                                <a href="{{ env('APP_LINK') }}">
                                    {{ env('APP_NAME') }}
                                </a>
                            </p>

                            <p><small>Powered by: <a href="/">Hoopoelink</a></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="https://www.facebook.com/POLO-Eastern-Region-Operations-KSA-107568820576350"><i
                                    class="fab fa-facebook-f"></i></a>
                            {{--                            <a href="#"><i class="fab fa-twitter"></i></a>--}}
                            {{--                            <a href="#"><i class="fas fa-globe"></i></a>--}}
                            {{--                            <a href="#"><i class="fab fa-instagram"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

@yield('scripts')

<!-- Author: Renier R. Trenuela II -->
</body>
</html>
