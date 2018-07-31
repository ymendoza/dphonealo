<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Mail;

class ContactoControler extends Controller
{
    public function contacto(Request $request){

        $email = $request['email'];
        $mensaje = $request['mensaje'];


        $data= [

                "email"         => $email,
                'mensaje'       => $mensaje,

        ];

         Mail::to('contact@phonealo.com')->send(new ContactoMail($data));

         return redirect()->route('exito')->with("notificacion", 'Enviado');

    }
}
