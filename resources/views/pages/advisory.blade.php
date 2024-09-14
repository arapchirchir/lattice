@extends('layouts.public')
@section('title', 'Advisory')
@section('content')
    <div class="text-start bg-overlay-dark-7 py-7"
        style="background:url('{{ asset('assets/images/lattice/advisory.jpg') }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-6 align-self-start">
                    <h1 class="fw-bold">Welcome to lattice Advisory</h1>
                    <h6 class="mb-2">
                        Join over 75+ companies who love what we do
                    </h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item active">
                                <a href="#about" class="btn rounded-1 btn-success">
                                    About us
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4" id="about">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h2 class="display-6 fw-bold">Who we are</h2>
                <p>
                    Lattice Consulting Ltd offers specialized corporate finance, strategy, training, and research services
                    to clients across Africa. Lattice has a strong presence in Kenya and has accumulated rich local
                    knowledge in multiple industries.
                </p>
                <p>
                    Our principals and associates combine over sixty years of private and public-sector experience
                    across a broad range of sectors and functional areas, with multi-discipline expertise, international
                    exposure, a strong relationship with local authorities and corporations, and the ability to
                    incorporate local context in their services
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/banner/advisory-about.jpg') }}" class="img-fluid rounded-2"
                    alt="">
            </div>
        </div>

        <div class="d-flex align-items-end justify-content-end py-4">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div>
                    <hr class="border border-success">
                </div>
                <h4 class="fw-bold display-6 text-nowrap">What advisory does</h4>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bolder">Program Design and Management: </h5>
                    <p>Designing and managing programs with quantifiable goals is key to
                        achieving
                        desired outcomes. Our advisory services ensure that programs are well-structured, effectively
                        managed, and
                        aligned with organizational objectives. Programs we have managed have consistently met or exceeded
                        their
                        targets, with an average success rate of 90%.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bold">Market Studies and Technical Research: </h5>
                    <p>Providing invaluable insights for strategic planning, our
                        market
                        studies
                        and technical research are thorough and data-driven. These studies have helped clients understand
                        market
                        trends,
                        customer needs, and competitive landscapes, leading to more effective business strategies. Our
                        research has
                        been
                        cited in industry journals and used by policymakers for strategic planning.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 card card-body">
                    <h5 class="fw-bold">Feasibility Studies: </h5>
                    <p>
                        Assessing the viability of projects and initiatives is crucial for informed
                        decision-making. Our feasibility studies provide a detailed analysis of potential projects,
                        including
                        financial,
                        technical, and market considerations. Projects vetted through our feasibility studies have achieved
                        a 95%
                        success rate in execution.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="container mt-4">
        <div class="row g-3 align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/lattice/Africa-map-3.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold">Lattice Consulting</h4>
                <p>
                    Incorporated in June 2003, Lattice is a boutique finance and strategy advisory firm. We have clients
                    across Africa. In addition to our consulting practice, we have a training practice. To learn more about
                    our training solutions click here.
                </p>
                <p class="mb-0"><span class="fw-bold">“Lattice”:</span> A framework or structure of crossed wood or metal
                    strips.</p>
                <p>
                    <span class="fw-bold">“Lattice Consulting”:</span> A consulting framework that combines tools to deliver
                    robust and stable solutions
                    to clients.
                </p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <h6 class="fw-bold">The Lattice Difference</h6>
                <ol>
                    <li>We are small and flexible, and give each client focused attention.</li>
                    <li>
                        Drawing from our diverse skills, and in depth engagements, we connect ideas and concepts to build
                        simple stable solutions for our clients.
                    </li>
                    <li>
                        We consistently invest in the training and development of our staff to better serve our clients – we
                        grow, so we can help you grow.
                    </li>
                </ol>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Our values</h6>
                <ul>
                    <li>We prefer to work with clients whose businesses inspire us and where we can make a difference.</li>
                    <li>
                        We like to build long lasting relationships. It is these long and intimate relationships with our
                        clients that give the best consulting outcomes.
                    </li>
                    <li>
                        We take every opportunity to work closely with our clients staff so that knowledge is transferred
                        and solutions are owned by the organisation.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container mt-5" id="strategy">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-6 p-0 p-4">
                <h4>Strategy Development:</h4>
                <p>
                    Crafting robust, future-oriented strategies is our forte. We help organizations
                    navigate complex business landscapes by developing tailored strategies that align with their goals and
                    market dynamics. Our strategic interventions have led to a 30% increase in operational efficiency for
                    our clients.
                </p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 p-0 p-4">
                <h4>ESG and SDG Advisory:</h4>
                <p>
                    Integrating environmental, social, and governance (ESG) criteria with the Sustainable Development Goals
                    (SDGs) is critical for sustainable business practices. Our advisory services help organizations
                    incorporate these principles into their operations, resulting in enhanced corporate responsibility and
                    improved market reputation. Companies we've advised have seen a 25% reduction in their carbon footprint
                    within a year.
                </p>
            </div>
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
        </div>
        <div class="row justify-content-center align-items-center" id="financing-model">
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-6 p-0 p-4">
                <h4>Financial Modelling: </h4>
                <p>
                    Developing sophisticated financial models is essential for strategic planning and decision-making. Our
                    models provide clear insights into financial performance, helping businesses secure funding and make
                    informed decisions. Our financial models have been instrumental in securing over $50 million in
                    investment for our clients.
                </p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center" id="market-entry">
            <div class="col-md-6 p-0 p-4">
                <h4>Market Entry Strategy:</h4>
                <p>
                    Entering new markets requires careful planning and execution. We guide clients through the complexities
                    of market entry, from regulatory compliance to local partnerships. Our market entry strategies have
                    helped clients achieve a 40% market penetration within the first year of operation.
                </p>
            </div>
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-6 p-0 p-4">
                <h4>Opportunity Assessment:</h4>
                <p>
                    Identifying and evaluating new business opportunities is crucial for growth. Our assessments provide a
                    comprehensive analysis of market potential, competition, and risks, enabling clients to make informed
                    investment decisions. Our opportunity assessments have led to the successful launch of over 100 new
                    products and services.
                </p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center" id="blue-economy">
            <div class="col-md-6 p-0 p-4">
                <h4>Blue Economy Consulting:</h4>
                <p>
                    Focusing on the sustainable use of ocean resources for economic growth, Blue Economy consulting is a
                    burgeoning field. Our expertise in this area helps clients leverage ocean resources sustainably,
                    ensuring long-term economic and environmental benefits. Our projects in this domain have resulted in a
                    20% increase in sustainable fishery yields.
                </p>
            </div>
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/images/banner/Lattice-Samaki-Poa-Launch.png') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-6 p-0 p-4">
                <h4>Deal Sourcing and Pitching:</h4>
                <p>
                    Enhancing the quality of investment deals and supporting the growth of SMEs, Lattice provides technical
                    assistance and training on deal sourcing and pitching for Business Advisory Service Providers (BASPs).
                    This initiative has improved the capacity of BASPs to support SMEs, resulting in a 30% increase in
                    successful investment deals. "Our training has significantly improved the quality of investment deals
                    and the capacity of BASPs to drive SME growth," says John Erick, Technical Project Manager.
                </p>
            </div>
        </div>
    </div>

    <section class="container mt-4">
        <div class="row g-3 align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded-2" width="100%" height="315"
                        src="https://www.youtube.com/embed/t9olp2VEAAU?feature=oembed" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded-2" width="100%" height="315" src="https://www.youtube.com/embed/w3RLemluW9o"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded-2" width="100%" height="315" src="https://www.youtube.com/embed/S7opG8XS-l8"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


    <div class="text-start bg-overlay-dark-7 py-7 mt-5"
        style="background:url('{{ asset('assets/images/banner/Lattice-KIM-Training.png') }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-12 align-self-start">
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
