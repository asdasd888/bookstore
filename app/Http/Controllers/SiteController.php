<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $fullname = "Pongpoompan Natawan";
        $website = "Google.com";
        return view('about',[
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
    
}
