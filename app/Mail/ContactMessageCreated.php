<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

     public $nom;
    public $email;
    public $sujet;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $email, $sujet, $msg)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->sujet = $sujet;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
