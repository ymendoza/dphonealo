<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContcatoController;
use Mail;

class ContactoControler extends Controller
{
    public function ContactoControler(Request $request){

    	$email = $request['email'];
    	$mnsaje = $request['mensaje'];


    	$data= [

    			"email" 		=> $email,
    			'mensaje' 		=> $mensaje,

    	];

    
    	 Mail::to($email)->send(new ContactoMail($data));

    	 return view('frontend.index')->with("notificacion");

    }
}
