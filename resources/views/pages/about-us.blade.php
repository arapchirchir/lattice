@extends('layouts.public')
@section('title', 'About Us')
@section('content')
    <section>
        <div class="container h-100">
            <div class="row">
                <div class="col-md-12 col-lg-6 align-self-center ">
                    <div class="title text-start">
                        <span class="pre-title">We are {{ config('app.name') }}</span>
                        <h2>
                            Driving Sustainable Development and Economic Growth Across Africa
                        </h2>
                        <p class="mb-0">
                            Lattice is a pioneering consultancy and training organization dedicated to fostering sustainable
                            development and economic growth across Africa through innovative solutions and strategic
                            expertise.
                        </p>
                        <div class="list-group-inline list-group-number list-unstyled mt-4">
                            <a href="#" class="list-group-item list-group-item-action"><span>01</span> Innovative
                                Solutions</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>02</span> Strategic
                                Expertise</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>03</span> Sustainable
                                Practices</a>
                            <a href="#" class="list-group-item list-group-item-action"><span>04</span> Comprehensive
                                Training</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 mx-md-auto align-self-center position-relative">
                    <img class="rounded" src="assets/images/blog/02.jpg" alt="">
                    <div class="position-absolute start-0 bottom-0 ms-4 ms-md-n2 mb-3 d-none">
                        <a class="btn btn-grad" data-glightbox href="https://youtu.be/n_Cn8eFo7u8"> <i
                                class="fa fa-play text-white"></i>Play Video </a>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="row mt-4">
                <!-- Mission -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-target"></i></div>
                        <h3 class="feature-box-title">Our Mission</h3>
                        <p class="feature-box-desc">Deliver high-impact consultancy, training, and advisory services that
                            empower individuals, organizations, and communities to achieve their full potential and
                            contribute to the SDGs.</p>
                    </div>
                </div>
                <!-- Vision -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-eye"></i></div>
                        <h3 class="feature-box-title">Our Vision</h3>
                        <p class="feature-box-desc">To be Africa's leading catalyst for sustainable development and economic
                            prosperity, empowering communities and industries through innovative solutions and strategic
                            insight.</p>
                    </div>
                </div>
                <!-- Values -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-star"></i></div>
                        <h3 class="feature-box-title">Our Values</h3>
                        <p class="feature-box-desc">Integrity, Innovation, Sustainability, Collaboration, Excellence,
                            Thought Leadership</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
@endsection
