@extends('layouts.public')
@section('title', 'Aquaculture')
@section('content')


    <section class="p-0">
        <div class="tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
            <div class="tiny-slider-inner h-400 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0"
                data-arrow="true" data-dots="false" data-items="1">
                <!-- slide 1-->
                <div class="h-100 bg-overlay-dark-2"
                    style="background-image:url('{{ asset('assets/images/banner/Aquaculture-Lattice.png') }}'); background-position: center center; background-size: cover;">
                    <div class="container h-100">
                        <div class="row d-flex h-100">
                            <div
                                class="col-lg-8 col-xl-6 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                                <h2
                                    class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">
                                    Lattice Aquaculture
                                </h2>
                                <h3
                                    class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">
                                    Empowering East Africa's Aquaculture for Better Nutrition and Livelihoods
                                </h3>
                                <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500">
                                    <a href="{{ route('about.us') }}" class="btn btn-grad">About us!</a>
                                    <a href="{{ route('contact') }}" class="btn btn-link text-white">Contact us </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (isset($slider_projects) && count($slider_projects) > 0)
                    @foreach ($slider_projects as $item)
                        <div class="h-100 bg-overlay-dark-2"
                            style="background-image:url('{{ Storage::url($item->image) }}'); background-position: center center; background-size: cover;">
                            <div class="container h-100">
                                <div class="row d-flex h-100">
                                    <div
                                        class="col-lg-12 me-auto slider-content justify-content-center align-self-center align-items-start text-start">
                                        <h2
                                            class="animate__animated animate__fadeInUp animate__delay-1s display-2 fw-bold text-white">
                                            {{ $item->title }}
                                        </h2>
                                        <h3
                                            class="animate__animated animate__fadeInUp animate__delay-2s text-white display-7 alt-font fst-italic mb-2 my-md-4">
                                            {!! Str::words($item->description, 10) !!}
                                        </h3>
                                        <div class="animate__animated animate__fadeInUp animate__delay-3s mt-3 dealy-1500">
                                            <a href="{{ route('project.view', $item->slug) }}" class="btn btn-grad">Learn
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                        src="{{ asset('assets/images/lattice/aqua-about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center g-3">
                <div class="col-md-6">
                    <p>
                        Lattice Aqua believes in the possibility of the Aquaculture Sector in Eastern Africa to drive the
                        production of much needed high-quality protein to feed our growing population. In so doing the
                        sector will create meaningful and dignified jobs for people, particularly women and youth.
                    </p>
                    <p>
                        Lattice Aqua works with likeminded partners to realize the potential of this sector, by providing
                        the services below:
                    </p>
                    <ol class="mb-3">
                        <li>Program design and management</li>
                        <li>Market studies and technical research</li>
                        <li>Feasibility studies and business for commercial players along the aquaculture value chain, e.g.,
                            large, and mid-scale farms, feed producers, logistics providers and education</li>
                    </ol>
                    <p>
                        The Lattice Aquaculture Family includes Lattice Aquaculture Trust (which enables us to work with
                        players in the non-for-profit space) and the Aquaculture Academy.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/lattice/aqua-about.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <div class="position-relative"
                        style="min-height: 300px; background-image: url('{{ asset('assets/images/lattice/background.jpg') }}'); background-repeat:no-repeat;background-size:cover;">
                        <div class="position-absolute start-0 p-5 bottom-0">
                            <h4 class="fw-bold text-white">The Opportunity For Aquaculture In East Africa</h4>
                            <p class="text-white">
                                Provide sustainable protein and economic growth
                                for East Africa’s fast growing population
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="py-5">
                        <h3>Background</h3>
                        <p>
                            East Africa is facing a growing demand for animal protein, due to population growth, rising
                            incomes,
                            urbanization and changing food habits. This results in rapidly growing demand for sustainably
                            produced, safe, nutritious and protein rich food.
                        </p>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <h4>Opportunity</h4>
                    <p>
                        The farming of fish provides a unique opportunity to address this growing demand. Fish is healthy,
                        low-fat, contains key amino acids and valuable nutritional properties, whilst preventing disease.
                        Traditionally, fish makes up a significant share of East Africa’s diet.
                    </p>
                    <p>
                        Fish are the most resource-efficient protein available (aside from insects):
                    </p>
                    <ol class="mb-2 px-3 fw-bold">
                        <li>Has the lowest carbon footprint.</li>
                        <li>Uses the least fresh water per kg produced.</li>
                        <li>1 kg of fish can be cultured with 1.3 kg of feed (compared to a 1-to-8 ratio for beef).</li>
                    </ol>
                    <p>
                        In recent years, spurred by investments by the private sector, public institutions and NGOS in the
                        value chain, the aquaculture industry in East Africa has been developing rapidly.
                    </p>
                    <p>
                        Ten years ago, fish farming in cages on Lake Victoria was non-existent. Now, in Kenya, over 4,000
                        cages are registered on Lake Victoria. In the three main counties for cage farming (Homa Bay, Siaya,
                        Kisumu) alone, a total of 2,961 fish farmers are registered.
                    </p>
                    <p>
                        However, critically, the available number of skilled people is drastically lagging, constraining the
                        entire sector.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-5 text-center">Our Partners</h5>
                    <div class="tiny-slider arrow-hover arrow-dark">
                        <div class="tiny-slider-inner" data-arrow="true" data-dots="false" data-autoplay="3800"
                            data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3"
                            data-items-xs="2">
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/larive.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/farm-africa.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/holland-logo.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/FTA.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/msingi-logo.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/partners/gvt-netherlands.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h4 class="fw-bold mb-0">Aquaculture Academy’s Online Courses</h4>
        <div class="row g-3 justify-content-center align-items-center mt-0 flex-md-row-reverse">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/lattice/aqua-online.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        To increase the reach and accessibility of the Aquaculture Academy, a curriculum with over 100
                        e-learning videos is available, including courses and exams.
                    </li>
                    <li>
                        Farmers can learn about the detailed procedures of fish farming and access this knowledge at their
                        own
                        farm.
                    </li>
                    <li>
                        Courses include business skills, water quality, feeding practices, animal health management, farm
                        management.
                    </li>
                    <li>
                        Young students easily adopt online learning materials.
                    </li>
                    <li>
                        Efficient method to visualize internal procedures.
                    </li>
                    <li>
                        Improve young farmers’ skills to match the labour market requirements.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="portfolio portfolio-style-2 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="fw-bold">Our Past Assignments</h4>
                    <p>
                        Lattice together with its partners have conducted the following <br> Research assignments Fisheries
                        & Aquaculture East Africa;
                    </p>
                </div>
                <div class="col-md-12 p-0">
                    <div class="row g-3" data-isotope='{ "layoutMode": "masonry" }'>
                        @if ($projects && count($projects) > 0)
                            @foreach ($projects as $project)
                                <!-- portfolio-card -->
                                <div class="portfolio-card grid-item digital rounded-2 col-sm-6 col-md-4 col-lg-3 h-100">
                                    <div class="portfolio-card-body rounded-2">
                                        <div class="portfolio-card-header rounded-2">
                                            <img src="{{ Storage::url($project->image) }}" class="rounded-2"
                                                alt="">
                                        </div>
                                        <div class="portfolio-card-footer rounded-2 p-1">
                                            <a class="full-screen d-none"
                                                href="{{ Storage::url($project->image) }}" data-glightbox=""
                                                data-gallery="portfolio"><i class="ti-arrow-top-right"></i></a>
                                            <h6 class="info-title">
                                                <a href="{{ route('project.view', $project->slug) }}" title="">
                                                    {{ $project->title }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- portfolio-card -->
                            @endforeach
                        @else
                            <div class="alert alert-info col-12">
                                No projects available
                            </div>
                        @endif
                    </div>
                    <!-- portfolio wrap -->
                </div>
            </div>
        </div>
    </section>
@endsection
