<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $companyName = "Pongpoompan Natawan ComputerScience";

        return view('about',[ 'companyName' => $companyName ]);
    }
}
