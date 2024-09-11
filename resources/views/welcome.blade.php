@extends('layouts.public')
@section('title', 'Homepage')
@section('content')

    <section class="hero" style="background:url({{ asset('assets/images/lattice/static-landing.jpg') }}) no-repeat center/cover;">
        <div class="container">
            <div class="hero-inner col-md-6 py-5">
                <h1 class="hero-title text-white">We partner with you to create new possibilities for your business.</h1>
                <p class="hero-text">Lattice Consulting is a boutique finance and strategy advisory firm.</p>
                <a href="{{ route('about.us') }}" class="btn btn-primary btn-lg">Learn More</a>
            </div>
        </div>
    </section>
    <section class="mt-4 container-fluid d-none">
        <div class="container">
            <img src="{{ asset('assets/images/lattice/static-landing.jpg') }}" alt="" class="img-fluid rounded-2">
            <h4 class="fw-bold fst-italic py-4 text-center text-white">We partner with you to create new possibilities for your
                business.</h4>
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
                        <a class="mt-3 d-none" href="#">Know more!</a>
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
                        <a class="mt-3 d-none" href="#">Know more!</a>
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
                        <a class="mt-3 d-none" href="#">Know more!</a>
                    </div>
                </div>
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
                            At Lattice, we exist to create and share prosperity by solving consequential problems through
                            bold, agile, and innovative solutions. We offer specialized expertise across Consulting,
                            Advisory, Training, and Aquaculture, driving sustainable impact in diverse sectors.
                            Our core values—boldness, agility, growth orientation, and competence—define our commitment to
                            delivering transformative results for businesses, communities, and ecosystems.
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

            <div class="row mt-4 align-items-center justify-content-center d-none">
                <div class="col-12">
                    <h3>Our Services:</h3>
                    <p>
                        We apply our thematic expertise across four core service areas:
                    </p>
                </div>
                <!-- feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-pencil"></i></div>
                        <h3 class="feature-box-title">Consulting</h3>
                        <p class="feature-box-desc">
                            Lattice provides tailored consulting services across industries, offering actionable insights
                            and solutions that drive growth and innovation. Our consulting expertise helps clients address
                            complex challenges and seize new opportunities in their sectors.
                        </p>
                        <a href="{{ route('consulting') }}" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-light-bulb"></i></div>
                        <h3 class="feature-box-title">Advisory</h3>
                        <p class="feature-box-desc">
                            Our advisory services offer strategic guidance for businesses and communities, helping them
                            navigate industry shifts, adopt best practices, and implement effective solutions. We focus on
                            long-term impact, resilience, and scalability.
                        </p>
                        <a href="{{ route('advisory') }}" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-book"></i></div>
                        <h3 class="feature-box-title">Training and Capacity Building</h3>
                        <p class="feature-box-desc">
                            We are committed to upskilling professionals, entrepreneurs, and community leaders. Our training
                            programs are designed to foster growth, adaptability, and leadership, preparing participants to
                            excel in an evolving market landscape.
                        </p>
                        <a href="{{ route('training') }}" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
                <!-- Aquaculture solutions -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-book"></i></div>
                        <h3 class="feature-box-title">Aquaculture Solutions</h3>
                        <p class="feature-box-desc">
                            Our specialized aquaculture services support sustainable marine and freshwater farming
                            practices. We work with stakeholders across the blue economy to drive innovation,
                            sustainability, and profitability in this critical sector.
                        </p>
                        <a href="{{ route('aquaculture') }}" class="btn btn-success btn-sm rounded-1 mt-2">Read more</a>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- column 1 -->
                <div class="col-md-4">
                    <!-- title -->
                    <h5 class="text-primary">Our services</h5>
                    <h2 class="h1">We apply our thematic expertise across four core service areas:</h2>
                    <p>
                        Offering expert web design, effective search engine optimization, and strategic online marketing
                        solutions to elevate your digital presence, attract more visitors, and drive business growth.
                    </p>
                    <!-- service item -->
                    <div class="bg-light p-4 p-lg-5 ">
                        <span class="display-5 icon-primary"><i class="ti-pencil"></i></span>
                        <h5>Consulting</h5>
                        <p class="mb-0">
                            Lattice provides tailored consulting services across industries, offering actionable insights
                            and solutions that drive growth and innovation. Our consulting expertise helps clients address
                            complex challenges and seize new opportunities in their sectors.
                        </p>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-md-4 mt-5">
                    <!-- service item -->
                    <div class="bg-light p-4 p-lg-5 mb-5">
                        <span class="display-5 icon-primary"><i class="ti-light-bulb"></i></span>
                        <h5>Advisory</h5>
                        <p class="mb-0">
                            Our advisory services offer strategic guidance for businesses and communities, helping them
                            navigate industry shifts, adopt best practices, and implement effective solutions. We focus on
                            long-term impact, resilience, and scalability.
                        </p>
                    </div>
                    <!-- service item -->
                    <div class="bg-light p-4 p-lg-5 mb-5">
                        <span class="display-5 icon-primary"><i class="ti-image"></i></span>
                        <h5>Training and Capacity Building</h5>
                        <p class="mb-0">
                            We are committed to upskilling professionals, entrepreneurs, and community leaders. Our training
                            programs are designed to foster growth, adaptability, and leadership, preparing participants to
                            excel in an evolving market landscape.
                        </p>
                    </div>
                </div>

                <!-- column 3 -->
                <div class="col-md-4">
                    <!-- service item -->
                    <div class="bg-grad all-text-white p-4 p-lg-5 mb-5">
                        <span class="display-5 icon-primary"><i class="ti-book"></i></span>
                        <h5>Aquaculture Solutions</h5>
                        <p class="mb-0">
                            Our specialized aquaculture services support sustainable marine and freshwater farming
                            practices. We work with stakeholders across the blue economy to drive innovation,
                            sustainability, and profitability in this critical sector.
                        </p>
                    </div>
                    <!-- service item -->
                    <div class="bg-light p-4 p-lg-5 mb-5 d-none">
                        <span class="display-5 icon-primary"><i class="ti-wallet"></i></span>
                        <h5>Technical Support</h5>
                        <p class="mb-0">
                            Providing reliable technical support to resolve issues promptly, ensure seamless operations,
                            and offer expert assistance, enabling your business to maintain optimal performance and
                            focus on core activities.
                        </p>
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
