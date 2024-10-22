<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', 'Lattice')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dennis Kipchumba">
    <meta name="description"
        content="Lattice Africa - Pioneering consultancy and training organization committed to sustainable development and economic growth across Africa.">
    <meta name="keywords"
        content="Lattice Africa, consultancy, training, sustainable development, economic growth, Africa, ESG, SDG, financial modelling, market entry strategy, aquaculture, capacity building">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Lattice')">
    <meta property="og:description"
        content="Lattice Africa - Pioneering consultancy and training organization committed to sustainable development and economic growth across Africa.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Lattice')">
    <meta property="twitter:description"
        content="Lattice Africa - Pioneering consultancy and training organization committed to sustainable development and economic growth across Africa.">
    <meta property="twitter:image" content="{{ asset('assets/images/twitter-image.jpg') }}">

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
    @vite(['resources/css/app.css','resources/js/functions.js', 'resources/css/lattice.css'])
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/images/logo.png') }}" height="50px" style="height: 70px;" alt="Pre-loader">
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
                                <a class="navbar-link" href="#"><strong>Email:</strong> admin@lattice.africa</a>
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
                                @guest
                                    <a class="dropdown-item" href="{{ route('login') }}">Log In</a>
                                    <a class="dropdown-item" href="javascript:void(e)">Register</a>
                                @endguest
                                @auth
                                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                @endauth
                            </div>
                        </div>
                        <!-- top link -->
                        <!-- top social -->
                        <ul class="social-icons ms-2">
                            <li class="social-icons-item social-facebook m-0">
                                <a class="social-icons-link w-auto px-2" href="https://www.facebook.com/LatticeEA"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icons-item social-facebook m-0">
                                <a class="social-icons-link w-auto px-2"
                                    href="https://www.linkedin.com/company/lattice-east-africa/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icons-item social-instagram m-0">
                                <a class="social-icons-link w-auto px-2" href="https://www.instagram.com/__lattice__/"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icons-item social-twitter m-0">
                                <a class="social-icons-link w-auto ps-2" href="https://twitter.com/Lattice_EA"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path
                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icons-item social-twitter m-0">
                                <a class="social-icons-link w-auto ps-2"
                                    href="https://www.youtube.com/channel/UC7V5XVeGEUQGfs0cljI-3qQ" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar top End-->

        <!-- Logo Nav Start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <!-- Logo -->
                <a class="navbar-brand position-absolute top-0" href="{{ route('homepage') }}">
                    <!-- Logo -->
                    <img class="navbar-brand-item bg-white px-2 rounded-2"
                        src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                        style="height: 80px; margin-top: -15px;">
                </a>
                <!-- Menu opener button -->

                <div class="dropdown d-none d-sm-block ms-auto">
                    <a class="dropdown-toggle d-none" href="#" role="button" id="dropdownAccount"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-user me-2"></i>Account </a>
                    <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownAccount">
                        @guest
                            <a class="dropdown-item" href="{{ route('login') }}">Log In</a>
                            <a class="dropdown-item" href="javascript:void(e)">Register</a>
                        @endguest
                        @auth
                            <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                        @endauth
                    </div>
                </div>

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
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('about.us')) active @endif"
                                href="{{ route('about.us') }}" id="demosMenu">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('projects')) active @endif"
                                href="{{ route('projects') }}" id="demosMenu">Our Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::is('projects')) active @endif"
                                href="{{ route('projects') }}" id="demosMenu">Where we work</a>
                        </li>
                        <!-- Menu item 2 Blog-->
                        <li class="nav-item dropdown d-none">
                            <a class="nav-link dropdown-toggle @if (Route::is(['advisory', 'training'])) active @endif"
                                href="#" id="blogMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Our Portfolio</a>
                            <ul class="dropdown-menu" aria-labelledby="blogMenu">
                        </li>
                        <li><a class="dropdown-item d-none" href="{{ route('projects') }}">Projects</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">Access to finance</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">Agribusiness</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">Food security</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">MSME Acceleration and
                                capacity building</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">Small Holder Farmers</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">Gender</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects') }}">ESG and Climate</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if (Route::is(['consulting'])) active @endif"
                            href="#" id="expertise" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Impact areas</a>
                        <ul class="dropdown-menu" aria-labelledby="expertise">
                            <li><a class="dropdown-item" href="{{ route('aquaculture') }}">Aquaculture</a></li>
                            <li><a class="dropdown-item" href="https://aquacultureacademy.co.ke/" target="_blank">Aquaculture Academy </a></li>
                            <li><a class="dropdown-item" href="{{ route('advisory') }}">Advisory</a></li>
                            <li><a class="dropdown-item d-none" href="{{ route('training') }}">Training</a></li>
                            <li><a class="dropdown-item d-none" href="{{ route('consulting') }}">Consulting</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('contact')) active @endif"
                            href="{{ route('contact') }}" id="demosMenu">Resources</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link @if (Route::is('contact')) active @endif"
                            href="{{ route('contact') }}" id="demosMenu">Contact Us</a>
                    </li>
                    </ul>
                </div>
                <!-- Main Menu End -->
                <!-- Header Extras Start-->
                <div class="navbar-nav d-flex flex-row justify-content-center align-items-center">
                    <a href="{{ route('login') }}" class="btn px-2 mb-0 d-lg-none">Account</a>
                    <!-- extra item Search-->
                    <div class="nav-item search border-0 ps-3 pe-0 px-lg-2 d-none" id="search">
                        <a class="nav-link" data-bs-toggle="collapse" href="#search-open"><i class="ti-search">
                            </i></a>
                    </div>
                    <!-- extra item Btn-->
                    <div class="nav-item border-0 d-none d-lg-inline-block align-self-center">
                        <a href="{{ route('contact') }}" class=" btn btn-sm btn-grad text-white mb-0">Contact us</a>
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
                    <div class="col-md-2">
                        <div class="widget">
                            <a href="{{ url('/') }}" class="footer-logo">
                                <!-- footer logo Start -->
                                <img class="footer-logo-item" src="{{ asset('assets/images/logo.png') }}"
                                    alt="">
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
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-email"></i> admin@lattice.africa
                                </li>
                                <li class="d-flex mb-3"><i class="me-3 display-8 ti-time"></i>
                                    <p>Mon - Fri: <strong>09:00 - 21:00</strong> <br>Sat & Sun: <strong>Closed</strong>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer widget 3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="text-center">Useful LInks</h6>
                            <ul class="nav d-flex flex-wrap align-items-center justify-content-center primary-hover">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('advisory') }}">Advisory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('aquaculture') }}">Aquaculture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-none" href="https://aquacultureacademy.co.ke/" target="_blank">Aquaculture Academy </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-none" href="{{ route('consulting') }}">Consulting</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.us') }}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact
                                        us</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projects') }}">Portfolio</a>
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
                            href="https://techworld.co.ke"> Lattice</a></div>
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
                                <a class="list-group-item-action" href="#">Careers</a>
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


    <!-- Back to top -->
    <div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--Vendors-->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>

    <!--Template Functions-->
    {{-- <script src="{{ asset('assets/js/functions.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter({
            selector: ".purecounter",
        });
    </script>

</body>

</html>
