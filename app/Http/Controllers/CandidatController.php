<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DomaineEmploi;
use App\Models\Offre;
use App\Models\RendezVous;
use Illuminate\Support\Str;
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
        $messages = RendezVous::where("candidats_id",Auth::id())->get();
        return view("frontend.candidats.rendez-vous",compact('messages'));
    }

    public function candidatures()
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

    public function detailOffre($slug){

        $offre = Offre::where("slug",$slug)->first();
        return view("frontend.candidats.detail-offre",compact('offre'));
    }
    public function selectCandidature(Request $request,$candidat){
        $candidatData = Candidature::where("id",decrypt($candidat))->first();
        ($candidatData->status==0) ? $candidatData->update(['status'=>1]) : $candidatData->update(['status'=>0]);
        return back()->with("success","Le statut de cette candidature a été modifié");
    }

    public function storeRendezVous(Request $request){
        $request->validate(
            [
                "label"=>"required|string|min:3",
                "objet"=>"required|string|min:3",
                "contenu"=>"required|string|min:3",
                "date_rendez_vous"=>"required|date",
                "candidats"=>"required",
                "offres"=>"required"
            ]
        );
        //dd(implode(",",$request->candidats));
        $rendezvous = new RendezVous;
        $rendezvous->label = $request->label;
        $rendezvous->objet = $request->objet;
        $rendezvous->contenu = $request->contenu;
        $rendezvous->date_rendez_vous = date('Y-m-d H:i:s',strtotime($request->date_rendez_vous));
        $rendezvous->slug = Str::slug($request->label);
        $rendezvous->user_id = Auth::id();
        $rendezvous->offre_id = $request->offres;
        $rendezvous->candidats_id = implode(",",$request->candidats);
        $rendezvous->save();

        return back()->with("success","Le Rendez-Vous a été envoyé à tous les Candidats");

    }
    public function verifyCandidatesExists(Request $request){
        $candidature=Candidature::whereIn("id",explode(",",$request->ids))->get();
        return response()->json(['status'=>200,'candidats'=>$request->ids]);
    }
    public function createRendezVous(Request $request,$candidat){

        $candidats=Candidature::whereIn("id",explode(",",$candidat))->get();
        $allOffreCandidatId = [];
        foreach ($candidats as $key => $value) {
            array_push($allOffreCandidatId,$value->offre_id);
        }

        $offres=Offre::all();
        $messages= RendezVous::all();
        return view('admin.rendezvous.create-rendezvous', compact('messages', 'candidats', 'offres','allOffreCandidatId'));
    }
}
