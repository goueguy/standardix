<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Metier;
use Illuminate\Http\Request;
use App\Models\DomaineEmploi;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metiers= Metier::all();
        return view('admin.metier.index', compact('metiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeMetier(Request $request)
    {
        $request->validate(["nom"=>"required|string"]
        ,[
            'nom.required' => 'Champ requis',
            'nom.string' => 'Chaine de caractère uniquement',
        ]
        );
        $new_metier = new metier();
        $new_metier->nom_metier = $request->nom ;
        $new_metier->description_metier = $request->description;
        $new_metier->save();
        return redirect()->back()->with("success","Metier Ajouté!");
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
        $metier = Metier::find(decrypt($id));
        return view("admin.metier.edit",compact('metier'));
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
        $request->validate(["nom"=>"required|string"]
        ,[
            'nom.required' => 'Champ requis',
            'nom.string' => 'Chaine de caractère uniquement',
        ]
        );
        $data = [
            "nom_metier"=>$request->nom,
            "description_metier"=> $request->description
        ];
        Metier::where("id",decrypt($id))->update($data);

        return redirect("admin/metiers")->with("success","Métier Modifié!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Metier::find(decrypt($id))->delete();
        return redirect("admin/metiers")->with("success","Métier Supprimé!");
    }
}
