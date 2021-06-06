<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DomaineEmploi;
class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.candidats.dashboard");
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
        return view("frontend.candidats.subscribes");
    }
    public function offers()
    {
        return view("frontend.candidats.offers");
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
