<!-- contact form -->
<div class="col-md-6">
    <div class="h-100">
        <div class="title">
            <h2 class="fw-bold">Send us a message</h2>
        </div>
        <p>
            Please fill out the form below and we will get back to you as soon as possible.
        </p>
        <form class=" needs-validation" id="" name="contactform" method="POST" wire:submit.prevent='submitMessage'
            action="#" novalidate>
            <!-- Main form -->
            <div class="row">
                <div class="col-md-6">
                    <!-- name -->
                    <div class="mb-3 position-relative">
                        <input required id="con-name" name="name" wire:model='name' type="text"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- email -->
                    <div class="mb-3 position-relative">
                        <input required id="con-email" name="email" wire:model='email' type="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Subject -->
                    <div class="mb-3 position-relative">
                        <input required id="con-subject" name="subject" type="text" wire:model='subject'
                            class="form-control @error('subject') is-invalid @enderror" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Message -->
                    <div class="mb-3 position-relative">
                        <textarea required id="con-message" name="message" wire:model='message' cols="40" rows="6"
                            class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                    </div>
                </div>
                <!-- submit button -->
                <div class="col-md-12 d-grid">
                    <button class="btn btn-dark m-0 d-flex align-items-center justify-content-center gap-2"
                        type="submit">
                        Send Message

                        <div wire:loading wire:target='submitMessage'>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="spinner-border text-primary spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
