<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class CarcelController extends Controller
{

    public function carcel()
    {
      return view('user.projects.LandingCarcel');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ];

        Mail::to('ana.castaneda@app.gov.co')->send(new ContactMail($details));
        return back()->with('message_sent', 'Tu mensaje se ha enviado correctamente');
    }
}
