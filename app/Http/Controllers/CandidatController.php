<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\CandidatureRendezVous;
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
        $offres = Offre::orderBy('id','desc')->limit(5)->get();
        $totalOffre =  Offre::count();
        //$this->CandidatureStat();
        $totalRendezVous = RendezVous::whereIn("id", $this->RendezVousDataId())->count();
        $totalCandidature = Candidature::where('user_id',Auth::id())->count();
        return view("frontend.candidats.dashboard",compact('totalCandidature','offres','totalOffre','totalRendezVous'));
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
        //$this->RendezVousDataId();
        $rendezvous = RendezVous::whereIn("id",$this->RendezVousDataId())->get();
        return view("frontend.candidats.rendez-vous",compact('rendezvous'));
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
        $offres = Offre::paginate(10);
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
        User::where("id",$user)->update($userData);
        return back()->with("success","Information a été modifiée");
    }

    public function detailOffre($slug){

        $offre = Offre::where("slug",$slug)->first();
        return view("frontend.candidats.detail-offre",compact('offre'));
    }
    public function selectCandidature(Request $request,$candidat){
        $candidatData = Candidature::where("id",$candidat)->first();
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
        //$rendezvous->candidats_id = implode(",",$request->candidats);

        $rendezvous->save();
        foreach ($request->candidats as $key => $value) {
            CandidatureRendezVous::create(
                [
                    'candidature_id'=>$value,
                    'rendez_vous_id'=>$rendezvous->id
                ]
            );
        }

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

    public function RendezVousDataId(){
        $candidature = CandidatureRendezVous::where("candidature_id",Auth::id())->get();
        $rendezVousIds = [];
        foreach ($candidature as $key => $value) {
            array_push($rendezVousIds,$value->rendez_vous_id);
        }

        return $rendezVousIds;
    }
}
