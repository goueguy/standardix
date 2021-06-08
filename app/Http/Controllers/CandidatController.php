<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DomaineEmploi;
use App\Models\Offre;
class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::all();
        return view("frontend.candidats.dashboard",compact('offres'));
    }
    public function parameters($user)
    {
        //dd($user);
        $user = User::where("id",$user)->first();
        $domaines = DomaineEmploi::get();
        //dd($user->domaine->nom);
        return view("frontend.candidats.parametres",compact('domaines'));
    }
    public function rendezVous()
    {
        return view("frontend.candidats.rendez-vous");
    }
    public function subscribes()
    {

        $candidatures = Candidature::where("user_id",Auth::id())->get();
        $idOffre = array();
        foreach ($candidatures as $key => $value) {
            array_push($idOffre,$value->offre_id);
        }
        $offres = Offre::whereIn("id",$idOffre)->get();
        return view("frontend.candidats.subscribes",compact('offres'));
    }
    public function offers()
    {
        $offres = Offre::all();
        return view("frontend.candidats.offers",compact('offres'));
    }
    public function changeParameters(Request $request,$user){
        $request->validate([
            "nom"=>"required|string",
            "prenoms"=>"required|string",
            "motivation"=>"required|string",
            "telephone"=>"required|string",
            "lieu_habitation"=>"required|string",
            "domaine"=>"required|integer"
        ]);
        $userData = [
            "nom" => $request->nom,
            "prenoms" => $request->prenoms,
            "motivation" => $request->motivation,
            "contact" => $request->telephone,
            "lieu_habitation" => $request->lieu_habitation,
            "domaine_emploi_id" => $request->domaine,
            "updated_at"=>date("Y-m-d h:i:s")
        ];
        //dd($userData);
        User::where("id",decrypt($user))->update($userData);
        return back()->with("success","Information a été modifiée");
    }

    public function detailOffre($offre){

        $offre = Offre::find(decrypt($offre));
        return view("frontend.candidats.detail-offre",compact('offre'));
    }
}
