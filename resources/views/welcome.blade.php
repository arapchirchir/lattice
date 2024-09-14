@extends('layouts.public')
@section('title', 'Homepage')
@section('content')
    <section class="hero position-relative">
        <div class="container position-relative">
            <div class="hero-inner col-md-6 py-5">
                <h1 class="fw-bold text-white mb-5">Welcome to {{ config('app.name') }}</h1>
                <h1 class="hero-title text-white">solving global challenges to create shared prosperity</h1>
                <a href="{{ route('about.us') }}" class="btn btn-dark mb-0 border-white rounded-2">Learn More</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container h-100">
            <div class="row">
                <div class="col-12 align-self-center ">
                    <div class="title text-start">
                        <span class="pre-title">Our Purpose</span>
                        <p>
                            At Lattice, we’re here to solve real-world problems and create shared prosperity for everyone we
                            work with. We believe that lasting growth happens when we tackle the challenges that matter
                            most—whether it’s empowering smallholder farmers, advancing sustainable aquaculture, or driving
                            innovations in agribusiness and food security. Our purpose is simple: to make a meaningful,
                            long-term impact by helping communities, industries, and organizations thrive.
                        </p>
                        <p>
                            Through our vast expertise, we deliver bold, practical solutions that push boundaries and lead
                            to lasting progress. We’re driven by a commitment to help those we work with not just overcome
                            challenges but build a brighter future.
                        </p>
                        <div class="list-group-inline list-group-number list-unstyled mt-4 d-none">
                            <a href="#" class="list-group-item list-group-item-action"><span>01</span>Sustainable
                                Development Experts</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>02</span> Strategic
                                Market Entry</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>03</span> Financial
                                Modelling Success</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>04</span> Aquaculture
                                Program Leaders</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 mx-md-auto align-self-center position-relative d-none">
                    <img class="rounded" src="{{ asset('assets/images/lattice/5.jpg') }}" alt="">
                    <div class="position-absolute start-0 bottom-0 ms-4 ms-md-n2 mb-3">
                        <a class="btn btn-grad d-none" data-glightbox="" href="https://youtu.be/n_Cn8eFo7u8"> <i
                                class="fa fa-play text-white"></i>Play Video </a>
                    </div>
                </div>
            </div>
            <!-- row end -->


            <div class="row">
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-target"></i></div>
                        <h3 class="feature-box-title">Our Mission</h3>
                        <p class="feature-box-desc">
                            Our mission is to be the partner people turn to when they need trusted advice and real
                            solutions. We’re passionate about making a difference, and we do that by providing practical,
                            sustainable guidance that helps businesses, communities, and industries grow. Whether it's
                            supporting small enterprises or empowering farmers, we focus on delivering results that lift
                            people up and drive real progress. We combine our deep local understanding with insights from
                            global trends, always looking for the best way forward.
                        </p>
                        <a class="mt-3 d-none" href="#">Know more!</a>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-eye"></i></div>
                        <h3 class="feature-box-title">Our Vision</h3>
                        <p class="feature-box-desc">
                            We see a future where growth is sustainable , inclusive , and built to last . In this future,
                            people are empowered, businesses thrive, and the environment is respected. At Lattice, we’re
                            working toward this vision by crafting solutions that benefit both people and the planet. From
                            aquaculture innovations to agribusiness, and expanding access to finance, every step we take is
                            toward a more resilient and prosperous future for everyone.
                        </p>
                        <a class="mt-3 d-none" href="#">Know more!</a>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-heart"></i></div>
                        <h3 class="feature-box-title">Our Core Values</h3>
                        <p class="feature-box-desc">
                            <span class="fw-bold">Bold:</span> We’re not afraid to tackle big challenges or explore new ideas. We approach every
                            opportunity with courage, aiming for solutions that make a meaningful difference. <br>
                            <span class="fw-bold">Agile:</span> We adapt quickly and stay flexible, ready to adjust to whatever changes come our way. In
                            a fast-moving world, we’re always finding new paths forward. <br>
                            <span class="fw-bold">Competent:</span> We take pride in the depth of our knowledge and expertise. Our commitment to
                            delivering high-quality results ensures we meet the needs of our clients and
                            communities, every time.
                        </p>
                        <a class="mt-3 d-none" href="#">Know more!</a>
                    </div>
                </div>
            </div>

            <div class="row mt-4 align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h3>Our Thematic Areas of Focus:</h3>
                    <p class="col-md-6 mx-auto">
                        These thematic areas reflect the diverse yet interconnected challenges we address, focusing on
                        sustainable development and inclusive growth.
                    </p>
                </div>
                <!-- Aquaculture and the Blue Economy -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Aquaculture and the Blue Economy</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/aqua-and-blue-econ.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We promote sustainable and innovative marine-based solutions to enhance food security, economic
                            development, and biodiversity. Our approach in aquaculture supports local communities while
                            fostering a thriving blue economy.
                        </p>
                        <a href="{{ route('consulting') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- Access to Finance -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Access to Finance</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/access-to-finance.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We believe that financial inclusivity is crucial for empowering businesses and communities. Our
                            solutions aim to unlock financial opportunities for marginalized groups, MSMEs, and underserved
                            populations, providing access to credit, investment, and capital.
                        </p>
                        <a href="{{ route('advisory') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- Agribusiness -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Agribusiness</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/agribusiness.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We focus on driving innovation and sustainability in agriculture. Our agribusiness initiatives
                            help farmers and agripreneurs adopt advanced practices, improve yields, and access markets,
                            contributing to rural development and food security.
                        </p>
                        <a href="{{ route('training') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- Food Security -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Food Security</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/food-security.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            With growing global concerns over food scarcity, we are committed to building resilient food
                            systems. By combining expertise in aquaculture, agribusiness, and sustainable farming, we work
                            towards securing food availability for all.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- MSME Acceleration and Capacity Building -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">MSME Acceleration and Capacity Building</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/slider1.jpeg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We provide tailored support to Micro, Small, and Medium Enterprises (MSMEs) through acceleration
                            programs, training, and mentorship. By empowering businesses with the skills, resources, and
                            networks they need, we help them scale and thrive.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- Smallholder Farmers -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Smallholder Farmers</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/small-holder-farmers.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We champion the role of smallholder farmers in global food production. Through capacity
                            building, financial access, and market integration, we help these farmers achieve sustainable
                            growth and improve their livelihoods.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- Gender Equality and Empowerment -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">Gender Equality and Empowerment</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/gender-equality.webp') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            We promote inclusivity and gender equality in all our initiatives, ensuring that women and
                            marginalized groups are empowered to participate fully in economic and social development. From
                            financial access to agribusiness, we embed gender-focused strategies across our work.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
                <!-- ESG and Climate Action -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <h3 class="feature-box-title">ESG and Climate Action</h3>
                        <div class="team-avatar overflow-hidden" style="max-height: 12rem;">
                            <img src="{{ asset('assets/images/lattice/climate.jpg') }}" alt=""
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <p class="feature-box-desc">
                            Our approach to Environmental, Social, and Governance (ESG) issues is rooted in climate
                            responsibility. We help organizations adopt sustainable practices, mitigate climate risks, and
                            drive environmental stewardship in all their operations.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2 d-none">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client pt-0 d-none">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mb-2">
                    <h3>Our Partners</h3>
                </div>
                <div class="col-md-12">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-hover arrow-gray">
                        <div class="tns-outer" id="tns2-ow">
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                <span class="current">26 to 29</span> of 8
                            </div>
                            <div id="tns2-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns2-iw">
                                    <div class="tiny-slider-inner  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        data-arrow="true" data-dots="false" data-autoplay="3800" data-gutter="80"
                                        data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3"
                                        data-items-xs="2" id="tns2"
                                        style="transform: translate3d(-83.3333%, 0px, 0px);">
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/06.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/07.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/08.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/01.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/02.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/03.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/04.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/05.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/06.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/07.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/08.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item0" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/01.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item1" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/02.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item2" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/03.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item3" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/04.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item4" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/05.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item5" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/06.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item6" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/07.png" alt="">
                                        </div>
                                        <div class="item tns-item" id="tns2-item7" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/08.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/01.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/02.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/03.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/04.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/05.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/06.png" alt="">
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active"><img
                                                src="assets/images/clients/07.png" alt=""></div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active"><img
                                                src="assets/images/clients/08.png" alt=""></div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active"><img
                                                src="assets/images/clients/01.png" alt=""></div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active"><img
                                                src="assets/images/clients/02.png" alt=""></div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <img src="assets/images/clients/03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button
                                    type="button" data-controls="prev" tabindex="-1" aria-controls="tns2"><i
                                        class="fas fa-chevron-left"></i></button><button type="button"
                                    data-controls="next" tabindex="-1" aria-controls="tns2"><i
                                        class="fas fa-chevron-right"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 vh-md-50 rounded-start"
                    style="background:url('{{ asset('assets/images/lattice/1.jpg') }}') no-repeat; background-size:cover;">
                </div>
                <div class="col-md-6 p-md-5 p-4 bg-dark all-text-white rounded-end">
                    <h4 class="mb-4">Join Us in Driving Sustainable Growth</h4>
                    <p>
                        Partner with Lattice to transform communities and industries across Africa through innovative
                        solutions, strategic expertise, and a commitment to sustainability. Together, we can achieve lasting
                        impact and prosperity.
                    </p>
                    <h5>Have any question? Contact us now:</h5>
                    <div class="display-7 mt-4">
                        <a class="primary-hover mb-3 d-inline-block text-white" href="tel:+254707180844">
                            +254707180844
                        </a>
                        or
                        <a class="primary-hover mb-3 d-inline-block text-white"
                            href="mailto:admin@lattice.africa">admin@lattice.africa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-parallax bg-overlay-dark-2 mt-5"
        style="background:url('{{ asset('assets/images/lattice/3.jpg') }}') no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row">
                <!-- left -->
                <div class="col-md-7 col-lg-6">
                    <div class="z-index-9 position-relative testimonials all-text-white bg-grad p-3 p-sm-5 rounded">
                        <span class="display-6"><i class="fas fa-quote-left mb-3"></i></span>
                        <!-- Tiny slider start-->
                        <div class="tiny-slider testi-full dots-white dots-right-top">
                            <div class="tiny-slider-inner" data-arrow="false" data-items="1" data-autoplay="4500">
                                <!-- testimonial item -->
                                <div class="item">
                                    <div class="testimonials-wrap">
                                        <div class="testi-text text-start p-0">
                                            <p class="text-white">
                                                The training that I received from Lattice was informative and it gave me a
                                                hands-on experience. I learnt more on feeding and feeding ratios,
                                                appetite registration, and value addition. Thank you Lattice
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <div class="testi-avatar mb-0 d-none">
                                                    <img class="w-75" src="assets/images/thumbnails/avatar-01.jpg"
                                                        alt="avatar">
                                                </div>
                                                <div>
                                                    <h6 class="m-0">Swabrine Aluoch</h6>
                                                    <h6 class="small">Aquaculture Graduate</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonial item -->
                                <div class="item">
                                    <div class="testimonials-wrap">
                                        <div class="testi-text text-start p-0">
                                            <p class="text-white">
                                                Through Lattice I have been able to learn how to select good beeds, how to
                                                market, keep records and now I can confidently teach other farmers on the
                                                application of these skills. I started with one pond and now I have three.
                                                Thanks you Lattice for the training and support you are providing to us as
                                                farmers
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <div class="testi-avatar mb-0 d-none"> <img class="w-75"
                                                        src="assets/images/thumbnails/avatar-03.jpg" alt="avatar">
                                                </div>
                                                <div>
                                                    <h6 class="m-0">Stephen Namai</h6>
                                                    <h6 class="small">Fish Farmer</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tiny slider End-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 counter counter-small mt-5 mb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="bg-dark rounded py-5 all-text-white pattern-overlay-2">
                        <div class="row align-items-center justify-content-center">
                            <!-- count item -->
                            <div class="col-md-4 col-6 mb-4 mb-sm-0">
                                <div class="text-center">
                                    <i class="display-6 ti-bar-chart"></i>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="fw-bold mt-2 mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-delay="10" data-purecounter-duration="2"
                                            data-purecounter-end="18">18</h2>
                                        <h2 class="ms-1">+</h2>
                                    </div>
                                    <p class="mb-0">Years of experience</p>
                                </div>
                            </div>
                            <!-- count item -->
                            <div class="col-md-4 col-6 mb-4 mb-sm-0">
                                <div class="text-center">
                                    <i class="display-6 ti-face-smile"></i>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="fw-bold mt-2 mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-delay="10" data-purecounter-separator="true"
                                            data-purecounter-duration="2" data-purecounter-end="10000">0</h2>
                                        <h2 class="ms-1">+</h2>
                                    </div>
                                    <p class="mb-0">Satisfied Clients</p>
                                </div>
                            </div>
                            <!-- count item -->
                            <div class="col-md-4 col-6">
                                <div class="text-center">
                                    <i class="display-6 ti-check"></i>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="fw-bold mt-2 mb-0 purecounter" data-purecounter-start="0"
                                            data-purecounter-delay="10" data-purecounter-duration="2"
                                            data-purecounter-end="75">0</h2>
                                        <h2 class="ms-1">+</h2>
                                    </div>
                                    <p class="mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
