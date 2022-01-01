<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function creer(){
        return view('contact');
    }
    function store(Request $request){
        //dd('toto');
        $mailable = new ContactMessageCreated($request->nom, $request->email, $request->sujet, $request->msg);
        Mail::to('contact@nomcompagnie.com')->send($mailable);

        return redirect()->route('contact')->with('status', 'Votre message a été envoyé avec succès !');
    }
}
