<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DomaineEmploi;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines= DomaineEmploi::all();
        return view('admin.domaines.index', compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeDomaine(Request $request)
    {
        $request->validate(["nom"=>"required|string"]
        ,[
            'nom.required' => 'Champ requis',
            'nom.string' => 'Chaine de caractère uniquement',
        ]
        );
        $new_role = new DomaineEmploi();
        $new_role->nom= $request->nom;
        $new_role->description_domaine_emplois= $request->description;
        $new_role->save();
        return redirect()->back()->with("success","Domaine Ajouté!");
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
        $domaine = DomaineEmploi::find($id);
        return view("admin.domaines.edit",compact('domaine'));
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
            "nom"=>$request->nom,
            "description_domaine_emplois"=> $request->description
        ];
        DomaineEmploi::where("id",$id)->update($data);

        return redirect("admin/domaines")->with("success","Domaine Modifié!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DomaineEmploi::find($id)->delete();
        return redirect("admin/domaines")->with("success","Domaine Supprimé!");

    }
}
