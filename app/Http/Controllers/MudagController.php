<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMudag;
use Mail;

class MudagController extends Controller
{
    public function mudag()
    {
      return view('user.projects.mudag');
    }

    public function enviarEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ];

        Mail::to('ana.castaneda@app.gov.co')->send(new ContactMudag($details));
        return back()->with('enviar-message', 'Tu mensaje se ha enviado correctamente');
    }
}
