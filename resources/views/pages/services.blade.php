@extends('layouts.public')
@section('title', 'Our Services')
@section('content')

    <div class="left bg-dark-grad pattern-overlay-1">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center position-relative">
                    <h5 class="fw-bold display-1 mb-2 py-4">Our Services</h5>
                </div>
            </div>
        </div>
    </div>

    <section class="service">
        <div class="container">
            <div class="row">
                <!-- Consulting Services -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-briefcase"></i></div>
                        <h3 class="feature-box-title">Consulting Services</h3>
                        <p class="feature-box-desc">Providing expert guidance to help organizations develop strategies,
                            enhance performance, and achieve sustainable growth through innovative solutions.</p>
                    </div>
                </div>

                <!-- Training Services -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-blackboard"></i></div>
                        <h3 class="feature-box-title">Training Services</h3>
                        <p class="feature-box-desc">Enhancing skills and capabilities through targeted training programs to
                            improve job performance and career advancement.</p>
                    </div>
                </div>

                <!-- Advisory Services -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-headphone-alt"></i></div>
                        <h3 class="feature-box-title">Advisory Services</h3>
                        <p class="feature-box-desc">Delivering expert advice and support for program design, market studies,
                            and feasibility assessments to drive strategic success.</p>
                    </div>
                </div>

                <!-- Strategy Development -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-light-bulb"></i></div>
                        <h3 class="feature-box-title">Strategy Development</h3>
                        <p class="feature-box-desc">Crafting robust, future-oriented strategies to help organizations
                            navigate complex business landscapes and achieve their goals.</p>
                    </div>
                </div>

                <!-- Market Entry Strategy -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-world"></i></div>
                        <h3 class="feature-box-title">Market Entry Strategy</h3>
                        <p class="feature-box-desc">Guiding clients through the complexities of entering new markets, from
                            regulatory compliance to local partnerships.</p>
                    </div>
                </div>

                <!-- Financial Modelling -->
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box h-100 icon-grad">
                        <div class="feature-box-icon"><i class="ti-bar-chart"></i></div>
                        <h3 class="feature-box-title">Financial Modelling</h3>
                        <p class="feature-box-desc">Developing sophisticated financial models to aid strategic planning,
                            decision-making, and securing investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process-advance bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="section-title">Our Process at Lattice</h2>
                    <p class="section-subtitle">Here’s how we help organizations achieve sustainable development and
                        economic growth</p>
                </div>
            </div>
            <div class="row">
                <!-- Step 1 -->
                <div class="col-sm-6 col-lg-3 text-center mb-4">
                    <div class="process-border"><span class="process-number bg-grad border-end">01</span></div>
                    <h5 class="my-3">Understanding Client Needs</h5>
                    <p>Thorough discussions and assessments to identify specific challenges and goals of the client.</p>
                </div>
                <!-- Step 2 -->
                <div class="col-sm-6 col-lg-3 text-center mb-4">
                    <div class="process-border"><span class="process-number bg-grad border-start border-end">02</span></div>
                    <h5 class="my-3">Developing Tailored Solutions</h5>
                    <p>Customized strategies and solutions are developed to address the client's needs.</p>
                </div>
                <!-- Step 3 -->
                <div class="col-sm-6 col-lg-3 text-center mb-4">
                    <div class="process-border"><span class="process-number bg-grad border-start border-end">03</span></div>
                    <h5 class="my-3">Implementing Solutions</h5>
                    <p>Implementation of solutions along with providing training and capacity-building programs.</p>
                </div>
                <!-- Step 4 -->
                <div class="col-sm-6 col-lg-3 text-center mb-4">
                    <div class="process-border"><span class="process-number bg-grad border-start">04</span></div>
                    <h5 class="my-3">Monitoring and Evaluation</h5>
                    <p>Continuous monitoring and evaluation to ensure effective and sustainable solutions.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing pricing-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center mt-3">
                    <h6>
                        Partner with Lattice to leverage our expertise and drive sustainable growth. Contact us today to
                        learn more about how we can help you achieve your goals and make a lasting impact.
                    </h6>
                    <a class="btn btn-dark" href="{{ route('contact') }}">Get started</a>
                </div>
            </div>
        </div>
    </section>
@endsection
