<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;


    public $name,$contactMessage,$email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attributes)
    {
        $this->name = $attributes->name;
        $this->contactMessage = $attributes->message;
        $this->email = $attributes->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('portfolio@Contact.com')
        ->markdown('email.contactEmail');
    }
}
