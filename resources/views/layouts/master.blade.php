<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Gaozim | A tech driven waybilling and package delivery platform for ecommerce and domestic parcel.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Gaozim is a tech driven waybilling and package delivery platform for ecommerce and domestic parcel." />
    <meta name="keywords"
        content="delivery, logistics, transportation,courier, ecommerce, waybill, rider, dispatcher, parcel" />
    <meta name="author" content="Emmanuel Iwuoha" />
    <meta name="email" content="contact@emmanueliwuoha.com" />
    <meta name="website" content="https://www.emmanueliwuoha.com/" />
    <meta name="Version" content="v1.0" />
    <meta http-equiv="Cache-control" content="no-cache">
    <!-- favicon -->
    <link rel="shortcut icon" href=" {{ asset('images/favicon.png') }}">
    <!-- Bootstrap -->
    <link href=" {{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href=" {{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href=" {{ asset('assets/../../../unicons.iconscout.com/release/v2.1.7/css/unicons.css') }}">
    <!-- Slider -->
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- Main Css -->
    <link href=" {{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href=" {{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XZKDJECDEC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XZKDJECDEC');
    </script>

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="/">
                    <img src=" {{ asset('images/logo-dark.png') }}" height="40" alt="">
                </a>
            </div>
            <div class="buy-button">

                <a href="{{ route('vendor') }}" class="btn btn-primary">Request carrier</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{ route('carrier') }}">Become a Carrier</a></li>
                    <li><a href="#">Support</a></li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Company</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="">About us </a></li>
                            <li><a href="{{ route('contact') }}">Contact us </a></li>
                            <li><a href="#">Blog </a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </li>
                </ul>
                <!--end navigation menu-->

                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->
    @yield('content')

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer">
                        <img src="{{ asset('images/logo-white.png') }}" height="40" alt="">
                    </a>
                    <p class="mt-4">Start working with Gaozim that can provide everything you need to generate
                        awareness, drive traffic, connect.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                    data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                About us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i>
                                Contact us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Careers</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Blog</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Usefull Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                Support</a></li>
                        <li><a href="{{ route('faq') }}" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i>
                                FAQ</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Resources</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="https://gaozim.com/assets/images/app/policy.pdf" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i> Terms
                                of Services</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i>
                                Privacy Policy</a></li>
                        <li><a href="{{ route('guide') }}" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i>
                                Customer guideline</a></li>
                        <li><a href="{{ route('guide') }}" class="text-foot"><i
                                    class="mdi mdi-chevron-right mr-1"></i>
                                Carrier guideline</a></li>

                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© {{ date('Y') }} Gaozim. Design with <i
                                class="mdi mdi-heart text-danger"></i> by <a class="text-reset">Gaozim Technologies
                                Limited</a>.
                        </p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled payment-cards text-sm-right mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/payments/master-card.png') }}" title="Master Card"
                                    alt=""></a></li>

                        <li class="list-inline-item"><a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/payments/visa.png') }}" title="Visa"
                                    alt=""></a></li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/653e30ccf2439e1631e98d29/1hdtet85k';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Back to top -->
    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up"
            class="icons"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src=" {{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src=" {{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src=" {{ asset('assets/js/owl.init.js') }}"></script>
    <!-- Icons -->
    <script src=" {{ asset('assets/js/feather.min.js') }}"></script>
    <script src=" {{ asset('assets/../../../unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js') }}">
    </script>
    <!-- Switcher -->
    <script src="{{ asset('assets/js/switcher.js') }}"></script>
    <!-- Main Js -->
    <script src=" {{ asset('assets/js/app.js') }}"></script>
</body>

</html>
