<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view("frontend.home");
    }
    public function showPageNosMetiers()
    {
        return view("frontend.nos-metiers");
    }
    public function showPageNousRejoindre(){
        return view("frontend.nous-rejoindre");
    }


}
