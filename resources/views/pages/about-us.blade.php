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
                <div class="col-12">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-book"></i></div>
                        <h3 class="feature-box-title">Our Story</h3>
                        <div class="row g-3">
                            <div class="col-md-6">
                                Lattice was established with a clear vision: to drive positive change and sustainable
                                development in Africa. Our journey began with a commitment to innovation, collaboration, and
                                excellence, and these principles continue to guide us today. Through our comprehensive
                                services—spanning consulting, training, and advisory—we have successfully implemented
                                numerous
                                projects that have transformed communities and industries.
                            </div>
                            <div class="col-md-6">
                                From enhancing food security and promoting environmental sustainability to fostering
                                economic
                                development and creating jobs, our work speaks for itself. We have a dedicated team of
                                experts
                                who bring unparalleled expertise and passion to every project, ensuring that we deliver
                                high-impact solutions that meet the unique needs of our clients and stakeholders.
                            </div>
                            <div class="col-md-6">
                                Our strategic partnerships are central to our success. By joining forces with leading
                                organizations and institutions, we amplify our impact and drive sustainable growth. Our
                                commitment to the Sustainable Development Goals (SDGs) underpins everything we do, ensuring
                                that
                                our work contributes to a better and more sustainable future for all.
                            </div>
                            <div class="col-md-6">
                                At Lattice, we believe in the power of integrated, holistic solutions to address complex
                                challenges. By leveraging our expertise in consulting, training, and advisory, we provide
                                our
                                clients with the tools and insights they need to achieve lasting success. Our story is one
                                of
                                relentless pursuit of excellence, unwavering commitment to sustainability, and deep-rooted
                                belief in the potential of Africa.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
    </section>


    <section class="team social-hover team-overlay pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <span class="pre-title d-none">They are all professionals</span>
                        <h2>Meet our team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/winnie-ouko.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Winnie Ouko</h5>
                            <span class="team-position">CEO/Founder</span>
                            <p class="d-none">Far concluded not his something extremity. Four we face an he gate.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link" href="#"><i
                                            class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/joe.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Joe Maye</h5>
                            <span class="team-position">Director</span>
                            <p class="d-none">Sportsman one bed departure rapturous situation disposing partiality.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/john.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">John Erick</h5>
                            <span class="team-position">Technical Project Manager</span>
                            <p class="d-none">Continue delicate as unlocked entirely mr relation diverted in Expect</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/lydia.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Lydia Oguyo</h5>
                            <span class="team-position">Analyst</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/sharon.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Sharon Nzula</h5>
                            <span class="team-position">Analyst</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/esther.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Esther Nyawira</h5>
                            <span class="team-position">Accountant</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/mwende.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Edna Mwende</h5>
                            <span class="team-position">Analyst</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/millicent-songa.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Millicent Songa</h5>
                            <span class="team-position">Admin Assistant</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/placeholder.jpg') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Stephen Muthama</h5>
                            <span class="team-position">Human Resources Officer</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/millicent-songa.png') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Mike Ouya</h5>
                            <span class="team-position">Technical Project Manager</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/placeholder.jpg') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Lillian Marenya</h5>
                            <span class="team-position">Head of Programs</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/placeholder.jpg') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Junior Omollo</h5>
                            <span class="team-position">Accountant</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/placeholder.jpg') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Antonine Riany</h5>
                            <span class="team-position">Interim Finance and Operations Officer</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team item -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-item text-center">
                        <div class="team-avatar">
                            <img src="{{ asset('assets/images/team/placeholder.jpg') }}" alt="">
                        </div>
                        <div class="team-desc">
                            <h5 class="team-name">Junior Omollo</h5>
                            <span class="team-position">Accountant</span>
                            <p class="d-none">Expect no pretty though so genius afraid when of ye snug poor draw.</p>
                            <ul class="social-icons si-colored-on-hover">
                                <li class="social-icons-item social-facebook"><a class="social-icons-link"
                                        href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-item social-instagram"><a class="social-icons-link"
                                        href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-item social-twitter"><a class="social-icons-link"
                                        href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
