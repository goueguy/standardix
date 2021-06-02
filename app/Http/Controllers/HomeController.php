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
    public function showPageCandidatureSpontanee(){
        return view("frontend.candidature-spontanee");
    }
    public function showDetailOffre(){
        return view("frontend.detail_offre");
    }


}
