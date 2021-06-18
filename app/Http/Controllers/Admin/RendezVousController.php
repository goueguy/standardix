<?php

namespace App\Http\Controllers\Admin;
use App\Models\CandidatureRendezVous;
use App\Http\Controllers\Controller;
use App\Models\Candidature;
use App\Models\Offre;
use App\Models\User;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Notifications\MessagesNotification;
class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatures=Candidature::all();
        $offres=Offre::all();

        $messages= RendezVous::all();
        return view('admin.rendezvous.index', compact('messages', 'candidatures', 'offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$candidat){

        $candidats=Candidature::whereIn("id",explode(",",$candidat))->get();
        $allOffreCandidatId = [];
        foreach ($candidats as $key => $value) {
            array_push($allOffreCandidatId,$value->offre_id);
        }

        $offres=Offre::all();
        $messages= RendezVous::all();
        return view('admin.rendezvous.create-rendezvous', compact('messages', 'candidats', 'offres','allOffreCandidatId'));
    }
    public function store(Request $request){
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
        $rendezvous = new RendezVous;
        $rendezvous->label = $request->label;
        $rendezvous->objet = $request->objet;
        $rendezvous->contenu = $request->contenu;
        $rendezvous->date_rendez_vous = date('Y-m-d H:i:s',strtotime($request->date_rendez_vous));
        $rendezvous->slug = Str::slug($request->label);
        $rendezvous->user_id = Auth::id();
        $rendezvous->offre_id = $request->offres;
        $rendezvous->save();

        foreach ($request->candidats as $key => $candidat) {

            $candidates= User::where('id',$candidat)->first();
            CandidatureRendezVous::create(
                [
                    'candidature_id'=>$candidat,
                    'rendez_vous_id'=>$rendezvous->id
                ]
            );
            //Envoyer la notification aux candidats
            $candidates->notify(new MessagesNotification($rendezvous->id,$request->label,$request->contenu));
        }

        return redirect('admin/rendez-vous')->with("success","Le Rendez-Vous a été envoyé à tous les Candidats");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rendezvous = RendezVous::find($id);
        $candidatures = CandidatureRendezVous::where('rendez_vous_id',$rendezvous->id)->get();
        $candidatureIds = [];
        foreach($candidatures as $candidature){
            array_push($candidatureIds,$candidature->candidature_id);
        }
        $candidats = Candidature::all();
        $offres=Offre::all();
        return view('admin.rendezvous.show',compact('offres','rendezvous','candidats','candidatureIds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rendezvous = RendezVous::find($id);
        $candidatures = CandidatureRendezVous::where('rendez_vous_id',$rendezvous->id)->get();
        $candidatureIds = [];
        foreach($candidatures as $candidature){
            array_push($candidatureIds,$candidature->candidature_id);
        }
        $candidats = Candidature::all();
        $offres=Offre::all();
        return view('admin.rendezvous.edit-rendezvous',compact('offres','rendezvous','candidats','candidatureIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
       
        
        $data = [
            "label" => $request->label,
            "objet" => $request->objet,
            "contenu" => $request->contenu,
            "date_rendez_vous" => date('Y-m-d H:i:s',strtotime($request->date_rendez_vous)),
            "slug" => Str::slug($request->label),
            "user_id" => Auth::id(),
            "offre_id" => $request->offres
        ];
        RendezVous::where("id",$id)->update($data);

        foreach ($request->candidats as $key => $candidat) {

            $candidates= User::where('id',$candidat)->first();
            $isExist = CandidatureRendezVous::where("rendez_vous_id",$id)
            ->where("candidature_id",$candidat)->first();
            if($isExist){
                CandidatureRendezVous::where("id",$id)->update([
                    'candidature_id'=>$candidat,
                    'rendez_vous_id'=>$id
                ]);
            }else{
                CandidatureRendezVous::create(
                    [
                        'candidature_id'=>$candidat,
                        'rendez_vous_id'=>$id
                    ]
                );
            }
            
            //Envoyer la notification aux candidats
            $candidates->notify(new MessagesNotification($id,$request->label,$request->contenu));
        }

        return redirect('admin/rendez-vous')->with("success","Le Rendez-Vous a été envoyé à tous les Candidats");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($candidat)
    {
        RendezVous::find($candidat)->delete();
        return back()->with("success","Le Rendez-Vous a été supprimé");
    }

    public function verifyCandidatesExists(Request $request){
        $candidature=Candidature::whereIn("id",explode(",",$request->ids))->get();
        return response()->json(['status'=>200,'candidats'=>$request->ids]);
    }
    
}
