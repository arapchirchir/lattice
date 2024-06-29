@extends('layouts.public')
@section('title', 'Homepage')
@section('content')

    <section class="p-0">
        <div class="tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
            <div class="tiny-slider-inner h-400 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0"
                data-arrow="true" data-dots="false" data-items="1">
                <!-- slide 1-->
                <div class="h-100 bg-overlay-dark-2"
                    style="background-image:url(assets/images/banner/05.jpg); background-position: center center; background-size: cover;">
                    <div class="container h-100">
                        <div class="row d-flex h-100">
                            <div
                                class="col-lg-8 col-xl-6 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                                <h2
                                    class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">
                                    Welcome to {{ config('app.name') }}!
                                </h2>
                                <h3
                                    class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">
                                    We partner with you to create new posibilities for your business
                                </h3>
                                <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500">
                                    <a href="{{ route('about.us') }}" class="btn btn-grad">About us!</a>
                                    <a href="{{ route('contact') }}" class="btn btn-link text-white">Contact us </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 2-->
                <div class="h-100 bg-overlay-dark-2"
                    style="background-image:url(assets/images/banner/02.jpg); background-position: center top; background-size: cover;">
                    <div class="container h-100">
                        <div class="row d-flex h-100">
                            <div class="col-md-8 justify-content-center align-self-center align-items-start mx-auto">
                                <div class="slider-content text-center ">
                                    <h3
                                        class="animate__animated animate__fadeInUp animate__delay-1s display-7 text-white alt-font fst-italic">
                                        Lattice Advisory Services
                                    </h3>
                                    <h2
                                        class="animate__animated animate__fadeInUp animate__delay-2s display-3 fw-bold text-white">
                                        Strategy, corporate finance, market entry, and research
                                    </h2>
                                    <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500"><a
                                            href="#" class="btn btn-grad">Contact us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container h-100">
            <div class="row">
                <div class="col-md-12 col-lg-6 align-self-center ">
                    <div class="title text-start">
                        <span class="pre-title">We are {{ config('app.name') }}</span>
                        <h3>We are a full service <span class="text-primary">consultancy and training organization</span>
                            fostering sustainable development in Africa.</h3>
                        <div class="list-group-inline list-group-number list-unstyled mt-4">
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
                <div class="col-md-10 col-lg-6 mx-md-auto align-self-center position-relative">
                    <img class="rounded" src="assets/images/blog/02.jpg" alt="">
                    <div class="position-absolute start-0 bottom-0 ms-4 ms-md-n2 mb-3">
                        <a class="btn btn-grad d-none" data-glightbox="" href="https://youtu.be/n_Cn8eFo7u8"> <i
                                class="fa fa-play text-white"></i>Play Video </a>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="row mt-4">
                <div class="col-12">
                    <h3>What we offer</h3>
                </div>
                <!-- feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-pencil"></i></div>
                        <h3 class="feature-box-title">Consulting</h3>
                        <p class="feature-box-desc">
                            Expert guidance in strategy, ESG, and market entry for sustainable business success
                        </p>
                        <a href="#" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-light-bulb"></i></div>
                        <h3 class="feature-box-title">Advisory</h3>
                        <p class="feature-box-desc">
                            Tailored program design, feasibility studies, and technical research for informed
                            decision-making.
                        </p>
                        <a href="#" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-book"></i></div>
                        <h3 class="feature-box-title">Training</h3>
                        <p class="feature-box-desc">
                            Comprehensive capacity building and vocational training for skill enhancement and career growth.
                        </p>
                        <a href="#" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <span class="pre-title">About {{ config('app.name') }}</span>
                        <h2 class="d-none">Premium and royal service</h2>
                        <p class="mb-0">
                            We are a full service consultancy and training organization fostering sustainable development in
                            Africa. Our team of experts provide strategic guidance and technical support to businesses,
                            NGOs,
                            and governments seeking to create lasting impact in their communities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-eye"></i></div>
                        <h3 class="feature-box-title">Our Vision</h3>
                        <p class="feature-box-desc">
                            To be Africa's leading catalyst for sustainable development and economic prosperity, empowering
                            communities and industries to thrive through innovative solutions, collaborative efforts, and
                            unmatched strategic insight.
                        </p>
                        <a class="mt-3" href="#">Know more!</a>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-target"></i></div>
                        <h3 class="feature-box-title">Our Mission</h3>
                        <p class="feature-box-desc">
                            We deliver high-impact consultancy, training, and advisory services that empower individuals,
                            organizations, and communities to realize their full potential and significantly contribute to
                            the Sustainable Development Goals (SDGs).
                        </p>
                        <a class="mt-3" href="#">Know more!</a>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-heart"></i></div>
                        <h3 class="feature-box-title">Our Values</h3>
                        <p class="feature-box-desc">
                            Upholding honesty, transparency, and ethics; embracing innovation; championing sustainability;
                            valuing partnerships; striving for excellence; and leading by example to inspire sustainable
                            practices across Africa through knowledge and insights.
                        </p>
                        <a class="mt-3" href="#">Know more!</a>
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
                    style="background:url(assets/images/bg/06.jpg) no-repeat; background-size:cover;">
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
        style="background:url(assets/images/bg/05.jpg) no-repeat center center; background-size:cover;">
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
                                            <p class="text-white">Mr be cottage so related minuter is. Delicate say and
                                                blessing ladyship exertion few Margaret. Delight herself welcome against
                                                smiling its for. Suspected discovery by he affection household of principle
                                                perfectly he.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="testi-avatar mb-0"> <img class="w-75"
                                                        src="assets/images/thumbnails/avatar-01.jpg" alt="avatar">
                                                </div>
                                                <div>
                                                    <h6 class="m-0">Adam Ross</h6>
                                                    <h6 class="small">Software Developer</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonial item -->
                                <div class="item">
                                    <div class="testimonials-wrap">
                                        <div class="testi-text text-start p-0">
                                            <p class="text-white">You guys did an amazing work for me. Age his surprise
                                                formerly Mrs perceive few standstill moderate. Of in power match on truth
                                                worse voice would. Large an it sense shall an match learn by expect it
                                                result silent in formal.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="testi-avatar mb-0"> <img class="w-75"
                                                        src="assets/images/thumbnails/avatar-03.jpg" alt="avatar">
                                                </div>
                                                <div>
                                                    <h6 class="m-0">Emma Watson</h6>
                                                    <h6 class="small">Human Resource</h6>
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
@endsection
