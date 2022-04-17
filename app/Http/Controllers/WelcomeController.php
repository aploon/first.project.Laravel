<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class WelcomeController extends Controller{

    public function wlc($nom = null){

        return view('wlc', compact("nom"));
    }

}