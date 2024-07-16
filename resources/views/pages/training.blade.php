@extends('layouts.public')
@section('title', 'Training')
@section('content')
    <div class="text-start bg-overlay-dark-7 py-7"
        style="background:url('{{ asset('assets/images/banner/Lattice-KIM-Training.png') }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-6 align-self-start">
                    <h1 class="fw-bold">Lattice Training</h1>
                    <h6 class="mb-5 lh-base">
                        Lattice provides technical assistance and capacity-building services to Financial Institution (FI)
                        partners, largely on an on-demand and institution-specific basis. We deliver training to Business
                        Advisory Services Providers (BASPs). We have vast experience delivering Agriculture Value Chain
                        Finance, Business Acumen, Business Development, and Financial Modelling training. We have worked
                        with USAID’s Kenya Investment Mechanism’s (KIM) Financial Institution (FI) partners, Building
                        Capacity in local banks, financial institutions, and investment firms. We have trained over 3,500
                        bankers on different agriculture value chains through which financial institutions have been able to
                        unlock over $400 million in financing.
                    </h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item active">
                                <a href="{{ route('contact') }}" class="btn rounded-1 btn-success">
                                    Contact us
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <span class="pre-title">What Lattice training is all about</span>
                        <h2 class="d-none">Premium and royal service</h2>
                        <p class="mb-0">
                            Expert training in Agriculture Value Chain Finance, Business Acumen, Development, and Financial
                            Modelling for financial institutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-bar-chart"></i></div>
                        <h5 class="feature-box-title">Capacity Building Programs: </h5>
                        <p class="feature-box-desc">
                            Enhancing skills and capabilities through targeted training programs is essential for
                            organizational growth. Our capacity-building initiatives have equipped over 5,000 individuals
                            with the skills needed to excel in their respective fields. Participants in our programs have
                            reported a 50% increase in job performance and career advancement opportunities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-book"></i></div>
                        <h5 class="feature-box-title">Technical and Vocational Education and Training (TVET):</h5>
                        <p class="feature-box-desc">
                            Providing practical skills and knowledge for the aquaculture sector is a core strength. Our TVET
                            programs, supported by leading industry experts, offer hands-on training that aligns with
                            industry standards. Graduates from our TVET programs have seen an 80% employment rate within six
                            months of completion.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="feature-box f-style-2 icon-grad h-100">
                        <div class="feature-box-icon"><i class="ti-pencil-alt"></i></div>
                        <h5 class="feature-box-title">Customized Workshops and Seminars:</h5>
                        <p class="feature-box-desc">
                            Offering bespoke training solutions for specific needs, our workshops and seminars cover a wide
                            range of topics, from technical skills to leadership development. These customized training
                            sessions have helped organizations improve team performance and achieve strategic goals. Clients
                            have reported a 35% improvement in team efficiency post-training.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
