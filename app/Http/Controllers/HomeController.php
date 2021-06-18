<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $offres=Offre::all();
        //dd($offres->category->category_offre_title);
        return view("frontend.home", compact('offres'));
    }
    public function showPageNosMetiers()
    {
        return view("frontend.nos-metiers");
    }
    public function showPageCandidatureSpontanee(){
        return view("frontend.candidature-spontanee");
    }
    public function showDetailOffre($slug){
        //dd($slug);
        $offre = Offre::where("slug",$slug)->first();
        return view("frontend.detail_offre",compact('offre'));
    }


}
