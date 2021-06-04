<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $offres=Offre::all();
        return view("frontend.home", compact('offres'));
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
