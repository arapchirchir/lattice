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
                <!-- contact form -->
                <div class="col-md-6">
                    <div class="h-100">
                        <div class="title">
                            <h2>Send us a message</h2>
                        </div>
                        <p>
                            Please fill out the form below and we will get back to you as soon as possible.
                        </p>
                        <form class=" needs-validation" id="" name="contactform" method="POST" action="#"
                            novalidate>
                            <!-- Main form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- name -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-name" name="name" type="text" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- email -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-email" name="email" type="email" class="form-control"
                                            placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-subject" name="subject" type="text" class="form-control"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="mb-3 position-relative">
                                        <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <!-- submit button -->
                                <div class="col-md-12 d-grid">
                                    <button class="btn btn-dark m-0" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
