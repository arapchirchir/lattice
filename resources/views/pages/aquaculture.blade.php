@extends('layouts.public')
@section('title', 'Aquaculture')
@section('content')
    <section class="p-0 h-500 h-lg-700 bg-parallax"
        style="background:url('{{ asset('assets/images/banner/Aquaculture-Lattice.png') }}') no-repeat 65% 0%; background-size:cover;">
        <div class="container h-100">
            <div class="row justify-content-between align-items-center h-100">
                <div class="col-md-8 rounded-2 text-white">
                    <h4 class="text-white">Lattice Aquaculture</h4>
                    <h1 class="display-4 fw-bold text-white">
                        Empowering East Africa's Aquaculture for Better Nutrition and Livelihoods
                    </h1>
                    <span>
                        <a class="btn btn-grad btn-round zoom-on-hover me-3" data-glightbox=""
                            href="https://youtu.be/ad-1dCkb1d0"> <i class="fa fa-play text-white"></i></a>Learn more</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container h-100">
            <div class="row">
                <div class="col-md-12 col-lg-6 align-self-center mb-5 mb-lg-0">
                    <div class="title pb-4 text-start">
                        <h2>What is aquaculture</h2>
                        <p class="mb-0">
                            Our Aquaculture practice spurs growth in the aquaculture sector in East Africa for better
                            prosperity through improved nutrition and livelihoods. We believe that the Aquaculture Sector
                            can contribute significantly to the production of much-needed high-quality protein to feed our
                            growing population and, in so doing, create meaningful and dignified jobs for people,
                            particularly women and youth.
                        </p>
                    </div>
                    <!-- counter start -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <h4 class="fw-bold mb-0">
                                    Program Design:
                                </h4>
                                <p class="text-secondary">
                                    Creating aquaculture programs with clear goals, we ensure that these programs are
                                    sustainable and impactful. Our design process includes stakeholder engagement, needs
                                    assessment, and strategic planning. Programs we have designed have improved aquaculture
                                    yields by 30% and increased profitability for fish farmers.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <h4 class="fw-boldmb-0">
                                    Market Entry and Targeting:
                                </h4>
                                <p class="text-secondary">
                                    Navigating the complexities of entering new markets is a specialized skill. Our
                                    expertise in market entry and targeting helps clients identify the best opportunities
                                    and develop strategies to capture market share. Our clients have successfully entered
                                    new markets with a 25% market share within the first year.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- counter end -->
                    <div>
                        <h4 class="fw-boldmb-0">
                            Market Entry and Targeting:
                        </h4>
                        <p class="mb-4">
                            Establishing the commercial viability of aquaculture enterprises is critical for securing
                            investment
                            and achieving growth. Our feasibility studies and business assessments provide a comprehensive
                            analysis of market potential, financial performance, and operational feasibility. These
                            assessments
                            have been pivotal in securing over $100 million in funding for aquaculture projects.
                        </p>
                    </div>
                </div>
                <!-- right -->
                <div class="col-md-10 col-lg-6 mx-md-auto align-self-center text-center position-relative">
                    <img class="rounded up-on-hover shadow shadow-hover"
                        src="{{ asset('assets/images/banner/Latice-Aqua92-scaled.jpg') }}" alt="">
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center mt-5">
                    <h6>
                        For more details on our aquaculture expertise.
                    </h6>
                    <a class="btn btn-grad" href="https://www.aquacultureacademy.co.ke/" target="_blank">Learn more</a>
                </div>
            </div>
        </div>
    </section>
@endsection
