<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Operateur extends Mailable
{
    use Queueable, SerializesModels;
	
     public $nom;
    public $email;
    public $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom_rep, $email, $password)
    {
        $this->nom_rep = $nom_rep;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.operateur')->with([
           
                'nom_rep' => $this->nom_rep, 
                'email' => $this->email, 
                'password' => $this->password, 
               
            ]);
    }
}
