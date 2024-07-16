@extends('layouts.public')
@section('title', 'Projects')
@section('content')
    <div class="text-start bg-overlay-dark-7 py-7"
        style="background:url('{{ asset('assets/images/banner/02.jpg') }}') no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-6 align-self-start">
                    <h1 class="fw-bold">Our Projects</h1>
                    <h6 class="mb-5">
                        Empowering Growth and Innovation Across Africa
                    </h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item active">
                                <a href="{{ route('about.us') }}" class="btn rounded-1 btn-success">
                                    About us
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 mx-auto">
                    <!-- title -->
                    <div class="title text-center">
                        <span class="pre-title">Check out some of our latest work.</span>
                        <h2 class="d-none">Our Portfolio: Quality Results</h2>
                        <p class="mb-0">Our portfolio shows our hard work and devotion to helping our clients succeed.
                            Don't just take our word for it</p>
                    </div>
                </div>
                <div class="col-md-12 p-0">
                    <div class="portfolio-wrap row items-padding justify-content-center">
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset('assets/images/banner/women.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">Empowering Women Smallholder Farmers</h6>
                                    <p>
                                        In Migori and Homabay Counties, women smallholder farmers struggle with limited
                                        access to quality inputs and markets. Lattice, collaborating with local cooperatives
                                        and financial institutions, aims to empower 300 women farmers. By offering essential
                                        resources and training in modern farming techniques, their productivity and
                                        profitability have significantly increased. This initiative has boosted the
                                        financial independence of women, strengthened community resilience, and led to
                                        better financial management and higher household incomes, ultimately uplifting
                                        entire communities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset('assets/images/banner/food-security.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">Food Security - RF Omena Project</h6>
                                    <p>
                                        In Kenya, Rwanda, and Burundi, malnutrition remains a critical issue, particularly
                                        among school-aged children. To combat this, Lattice and the Rockefeller Foundation
                                        launched the RF Omena Project, integrating sustainable small fish (Omena) into
                                        school feeding programs. Collaborating with local fisheries and schools, this
                                        initiative has led to a 25% increase in local fish production, directly benefiting
                                        over 10,000 households. By enhancing the nutritional value of school meals, we
                                        ensure that children receive essential nutrients while supporting the local economy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset('assets/images/lattice/2.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">Samaki Poa</h6>
                                    <p>
                                        The Samaki Poa project, funded by NORAD, is a beacon of innovation in East Africa's
                                        aquaculture sector. This initiative combines digital learning and vocational
                                        training to enhance the skills and productivity of local fish farmers. Collaborating
                                        with industry organizations and educational institutions, Lattice has significantly
                                        boosted aquaculture productivity, creating numerous job opportunities and reducing
                                        poverty in the region.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset('assets/images/banner/commercializing.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">Commercialising Aquaculture Through Sustainable Innovations and
                                        Market Linkages for Job Creation</h6>
                                    <p>
                                        With the support of Mastercard, Lattice is transforming Kenya's aquaculture
                                        landscape by creating 200,000 jobs. This ambitious project focuses on financial
                                        inclusion, education, and market linkages, targeting marginalized groups such as
                                        women and youth. By fostering sustainable fish production and breaking down
                                        socio-economic barriers, Lattice is paving the way for a more inclusive and
                                        prosperous future.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">An Integrated Approach to Enhancing Tilapia Farmer Productivity
                                        and Market Linkages in Kenya</h6>
                                    <p>
                                        Smallholder farmers in Kenya face numerous challenges, from low productivity to
                                        limited market access. In collaboration with IDH and Lattice Aqua, we implemented an
                                        integrated approach to enhance the productivity and profitability of tilapia
                                        farmers. By introducing improved farming techniques and establishing strong market
                                        linkages, this project has resulted in a 35% increase in tilapia yields and a 20%
                                        boost in farmers' incomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        Financial Inclusion and Capacity Building under the KIM Project
                                    </h6>
                                    <p>
                                        The Kenya Investment Mechanism (KIM) project, in partnership with Palladium
                                        International, focuses on financial inclusion and capacity building for MSMEs and
                                        financial institutions. Through various task orders, Lattice has developed and
                                        delivered comprehensive training programs on topics such as value chain finance,
                                        credit risk management, and gender mainstreaming. These programs have reached over
                                        1,000 participants, enhancing their skills and knowledge to better serve the MSME
                                        sector.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        Development of Courses & TOT for Aquaculture Business Operators and Employees
                                    </h6>
                                    <p>
                                        In collaboration with FAO, Lattice Aqua developed training courses and conducted
                                        Training of Trainers (TOT) programs for aquaculture business operators and employees
                                        in the Lake Victoria basin (Kenya, Tanzania, and Uganda). This project aimed to
                                        enhance technical skills and improve the overall efficiency of aquaculture
                                        operations. The training programs reached over 500 participants, resulting in a 40%
                                        increase in operational efficiency and a 30% reduction in post-harvest losses.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        Best Fish Farmer Competition 2022/2023
                                    </h6>
                                    <p>
                                        Organized in partnership with Larive International and funded by RVO-EKN, the Best
                                        Fish Farmer Competition aimed to promote best practices in fish farming and
                                        recognize outstanding farmers. This competition involved over 200 fish farmers, who
                                        received training and support to improve their farming practices. The initiative led
                                        to a 25% increase in productivity among participating farmers and enhanced awareness
                                        of sustainable aquaculture practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset('assets/images/lattice/nairobi-main.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        Strategy Formulation for The Nairobi Club
                                    </h6>
                                    <p>
                                        Lattice was engaged by The Nairobi Club to formulate a comprehensive strategy that
                                        aligns with its vision for growth and sustainability. Through detailed assessments
                                        and stakeholder consultations, we developed a strategic plan that addresses key
                                        challenges and leverages opportunities for expansion. This strategic intervention
                                        has positioned The Nairobi Club for sustained growth, enhancing member engagement
                                        and operational efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        Financial Modelling for Lake Harvest
                                    </h6>
                                    <p>
                                        Lake Harvest, a leading aquaculture company, engaged Lattice to develop a robust
                                        financial model to support its expansion plans. Our financial modelling services
                                        provided clear insights into the financial performance and feasibility of various
                                        growth strategies. This comprehensive model has been instrumental in securing $10
                                        million in investment for Lake Harvest's expansion
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-card -->
                        <div class="portfolio-card isotope-item digital col-md-4">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="assets/images/portfolio/01.jpg" alt="">
                                </div>
                                <div class="portfolio-card-footer">
                                    <h6 class="info-title">
                                        ESG and Climate Financing Training
                                    </h6>
                                    <p>
                                        In partnership with various stakeholders, Lattice conducted an extensive training
                                        program on ESG and climate financing. This training equipped participants with the
                                        knowledge and tools needed to integrate ESG principles into their operations and
                                        access climate financing. Over 300 participants benefited from this training,
                                        leading to improved ESG practices and enhanced access to climate-related funding.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio wrap -->
                </div>
            </div>
        </div>
    </section>
@endsection
