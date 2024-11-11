<?php

namespace App\Livewire\Contacts;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Email extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $recipientEmail = 'kipchumbadennis10@gmail.com';

    public function render()
    {
        return view('livewire.contacts.email');
    }

    // submitMessage
    public function submitMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        // @2024Lattice. All Rights Reserved.
        // email feedback@lattice.africa

        // Send email with the contact form data
        $info = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => trim(e($this->message)),
        ];
        Mail::to($this->recipientEmail)->send(new ContactMail($info));

        // Reset form
        $this->reset();
    }
}
