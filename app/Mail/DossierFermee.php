<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DossierFermee extends Mailable
{
    use Queueable, SerializesModels;
	public $nom;
	public $reference;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $reference)
    {
       $this->nom = $nom;
       $this->reference = $reference;
    }
	
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.dossierfermee');
    }
}
