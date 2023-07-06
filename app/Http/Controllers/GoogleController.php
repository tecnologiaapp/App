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
    }

}
