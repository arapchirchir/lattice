<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dennis Kipchumba">
    <meta name="description" content="Lattice Africa">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    @vite(['resources/css/app.css'])

</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/images/preloader.svg') }}" alt="Pre-loader">
    </div>

    <header class="header-static navbar-sticky navbar-light">
        <!-- Search -->
        <div class="top-search collapse bg-light" id="search-open" data-bs-parent="#search">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-md-8 mx-auto py-5">
                        <form>
                            <div class="input-group">
                                <input class="form-control rounded-start border-end-0 mb-0" type="text"
                                    name="search" autofocus placeholder="What are you looking for?">
                                <button type="button" class="btn btn-grad m-0">Search</button>
                            </div>
                        </form>
                        <p class="small mt-2 mb-0 d-none"><strong>e.g.</strong>Template, Wizixo, WordPress theme </p>
                    </div>
                    <a class="position-absolute top-0 end-0 mt-3 me-3 text-end" data-bs-toggle="collapse"
                        href="#search-open"><i class="fa fa-window-close"></i></a>
                </div>
            </div>
        </div>
        <!-- End Search -->

        <!-- Navbar top start-->
        <div class="navbar-top d-none d-lg-block">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- navbar top Left-->
                    <div class="d-flex align-items-center">
                        <!-- Top info -->
                        <ul class="nav list-unstyled">
                            <li class="nav-item me-3">
                                <a class="navbar-link" href="#"><strong>Phone:</strong> +254707180844</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="navbar-link" href="#"><strong>Email:</strong> info@lattice.africa</a>
                            </li>
                        </ul>
                    </div>

                    <!-- navbar top Right-->
                    <div class="d-flex align-items-center">
                        <!-- Top Account -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownAccount"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-user me-2"></i>Account </a>
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="#">Log In</a>
                                <a class="dropdown-item" href="#">Register</a>
                                <a class="dropdown-item" href="#">Settings</a>
                            </div>
                        </div>
                        <!-- top link -->
                        <!-- top social -->
                        <ul class="social-icons ms-2">
                            <li class="social-icons-item social-facebook m-0">
                                <a class="social-icons-link w-auto px-2" href="#">
                                    <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-item social-instagram m-0">
                                <a class="social-icons-link w-auto px-2" href="#">
                                    <i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-item social-twitter m-0">
                                <a class="social-icons-link w-auto ps-2" href="#">
                                    <i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar top End-->

        <!-- Logo Nav Start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo -->
                    {{ config('app.name', 'Laravel') }}
                    {{-- <img class="navbar-brand-item" src="assets/images/logo.svg" alt="Logo"> --}}
                </a>
                <!-- Menu opener button -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll ms-auto">
                        <!-- Menu item 1 Demos-->
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('homepage')) active @endif"
                                href="{{ route('homepage') }}" id="demosMenu">Home</a>
                        </li>
                        <!-- Menu item 2 Blog-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if (Route::is(['advisory', 'training'])) active @endif"
                                href="#" id="blogMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Programs</a>
                            <ul class="dropdown-menu" aria-labelledby="blogMenu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Aquaculture</a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="#">Aquaculture</a> </li>
                                        <li> <a class="dropdown-item" href="#">Aquaculture Academy</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu d-none">
                                    <a class="dropdown-item dropdown-toggle" href="#">Blog Grid</a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="#">Three column</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Four column</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Left
                                                Sidebar</a> </li>
                                        <li> <a class="dropdown-item" href="#">Right
                                                Sidebar</a> </li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('advisory') }}">Advisory</a></li>
                                <li><a class="dropdown-item" href="{{ route('training') }}">Training</a></li>
                                <li class="dropdown-submenu d-none">
                                    <a class="dropdown-item dropdown-toggle" href="#">Blog Single</a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="blog-single-classic.html">Single
                                                classic</a> </li>
                                        <li> <a class="dropdown-item" href="blog-single-minimal.html">Single
                                                Minimal</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('services')) active @endif"
                                href="{{ route('services') }}" id="demosMenu">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('about.us')) active @endif"
                                href="{{ route('about.us') }}" id="demosMenu">About us</a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link @if (Route::is('contact')) active @endif"
                                href="{{ route('contact') }}" id="demosMenu">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Main Menu End -->
                <!-- Header Extras Start-->
                <div class="navbar-nav">
                    <!-- extra item Search-->
                    <div class="nav-item search border-0 ps-3 pe-0 px-lg-2" id="search">
                        <a class="nav-link" data-bs-toggle="collapse" href="#search-open"><i class="ti-search">
                            </i></a>
                    </div>
                    <!-- extra item Btn-->
                    <div class="nav-item border-0 d-none d-lg-inline-block align-self-center">
                        <a href="{{ route('contact') }}" class=" btn btn-sm btn-grad text-white mb-0">Contacts</a>
                    </div>
                </div>
                <!-- Header Extras End-->
            </div>
        </nav>
        <!-- Logo Nav End -->
    </header>
    {{-- Main --}}
    @yield('content')
    {{-- Main end --}}
    <footer class="footer bg-light pt-6">
        <div class="footer-content pb-3">
            <div class="container">
                <div class="row">
                    <!-- Footer widget 1 -->
                    <div class="col-md-4">
                        <div class="widget">
                            <a href="#" class="footer-logo">
                                <!-- footer logo Start -->
                                {{ config('app.name', 'Laravel') }}
                                {{-- <img class="footer-logo-item" src="assets/images/logo.svg" alt=""> --}}
                                <!-- footer logo End -->
                            </a>
                            <p class="mt-3">
                                {{-- Short description about Lattice Africa --}}
                                Lattice Africa is a leading provider of aquaculture services in Africa.
                            </p>
                        </div>
                    </div>
                    <!-- Footer widget 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget address"
                            style="background-image: url('assets/images/world-map.png'); background-position: 50% 20px; background-repeat: no-repeat; background-size: contain;">
                            <ul class="list-group list-group-borderless">
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-map-alt"></i>
                                    Mashiara Park, Loresho, Nairobi, Kenya
                                </li>
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-headphone-alt"></i>
                                    +254707180844
                                </li>
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-email"></i> info@lattice.africa
                                </li>
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-time"></i>
                                    <p>Mon - Fri: <strong>09:00 - 21:00</strong> <br>Sat & Sun: <strong>Closed</strong>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer widget 3 -->
                    <div class="col-md-2 col-sm-6">
                        <div class="widget">
                            <h6>Quick LInks</h6>
                            <ul class="nav flex-column primary-hover">
                                <li class="nav-item"><a class="nav-link" href="{{ route('about.us') }}">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="nav-item d-none"><a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" href="portfolio-grid-column-4.html">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer widget 4 -->
                    <div class="col-md-3">
                        <div class="widget bg-grad p-4 all-text-white rounded">
                            <i class="ti-email newsletter-icon"></i>
                            <p class="mb-2">Subscribe to our newsletter to receive exclusive offers.</p>
                            <div class="form-group mb-0">
                                <input class="form-control border-white mb-3" type="email"
                                    placeholder="Enter email...">
                                <button class="btn btn-dark mb-0">Join us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-3"></div>
        <!--footer copyright -->
        <div class="footer-copyright py-3">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-start">
                    <!-- copyright text -->
                    <div class="copyright-text">©{{ date('Y') }} All Rights Reserved by <a
                            href="https://techworld.co.ke"> {{ config('app.name') }}</a></div>
                    <!-- copyright links-->
                    <div class="copyright-links primary-hover mt-3 mt-md-0">
                        <ul class="list-inline">
                            <li class="list-inline-item ps-2">
                                <a class="list-group-item-action" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="list-inline-item ps-2">
                                <a class="list-group-item-action" href="{{ route('about.us') }}">About
                                    Us</a>
                            </li>
                            <li class="list-inline-item ps-2">
                                <a class="list-group-item-action" href="#">Career</a>
                            </li>
                            <li class="list-inline-item ps-2">
                                <a class="list-group-item-action" href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item ps-2">
                                <a class="list-group-item-action pe-0" href="#">Use of terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
 footer  -->

    <!-- Back to top -->
    <div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--Vendors-->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>

    <!--Template Functions-->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

<!-- Mirrored from wizixo.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2024 06:45:02 GMT -->

</html>
