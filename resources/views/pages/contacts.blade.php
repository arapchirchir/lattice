@extends('layouts.public')
@section('title', 'Contact us')
@section('content')

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <h2>How can we assist you?</h2>
                        <p>
                            We are here to help you with any queries you may have. Reach out to us and we will respond as
                            soon as possible.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="contact-box d-flex flex-column h-100 bg-overlay-dark-7 px-3 py-4"
                        style="background:url(assets/images/bg/04.jpg) no-repeat; background-size: cover; background-position: center center;">
                        <!-- Phone -->
                        <div class="all-text-white mb-4">
                            <div class="fs-4"><i class="ti-map-alt"></i></div>
                            <h5 class="mb-2">Address</h5>
                            <p>
                                Mashiara Park, Loresho, Nairobi, Kenya
                            </p>
                        </div>
                        <!-- Email -->
                        <div class="all-text-white mb-4">
                            <div class="fs-4"><i class="ti-email"></i></div>
                            <h5 class="mb-2">E-mail</h5>
                            <p>admin@lattice.africa</p>
                        </div>
                        <!-- Phone -->
                        <div class="all-text-white">
                            <div class="fs-4"><i class="ti-panel"></i></div>
                            <h5 class="mb-2">Phone</h5>
                            <p class="mb-0">(+254) 707-180-844</p>
                        </div>
                    </div>
                </div>
                <!-- google map -->
                <div class="col-md-3">
                    <div class="h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d510573.0315680922!2d36.749059!3d-1.261169!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171356c728b3%3A0x9987f982cc67c738!2sLattice%20Consulting%20Ltd!5e0!3m2!1sen!2sus!4v1719667301324!5m2!1sen!2sus"
                            class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                @livewire('contacts.email')
            </div>
        </div>
    </section>
@endsection
