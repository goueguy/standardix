<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieOffre;
use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::orderBy("id","desc")->get();
        return view('admin.offres.list-offres',compact('offres'));
    }
    /**
     * View offers details
     *
     * @return void
     */
    public function view()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.view-offres',compact("categories","users"));
    }
    public function lancees()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.list-offres-lancees',compact("categories","users"));
    }
    public function edit($id)
    {
        $offre = Offre::find(decrypt($id));
        $categories = CategorieOffre::all();
        return view('admin.offres.edit-offres',compact('offre','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.create-offres',compact("categories","users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate(
            [
                "titre"=>"required|string|min:8",
                "categorie_offre"=>"required|integer",
                "description"=>"required|string|min:5",
                "lieu"=>"required|string|min:5",
                "profil"=>"required|string|min:5",
                "date_limite"=>"required",
                "avantages"=>"required|string|min:5",
                "dossier_candidature"=>"required|string|min:5",
                "duree_contrat"=>"required|string|min:3"
            ]

        );

        $newOffres = new Offre;
        $newOffres->titre = $request->titre;
        $newOffres->categorie_offre_id = $request->categorie_offre;
        $newOffres->description_offres = $request->description;
        $newOffres->lieu =  $request->lieu;
        $newOffres->profil = $request->profil;
        $newOffres->date_limite = \Carbon\Carbon::createFromFormat('d/m/Y',$request->date_limite)->format('Y-m-d H:i:s');
        $newOffres->avantages = $request->avantages;
        $newOffres->dossier_candidature = $request->dossier_candidature;
        $newOffres->duree_contrat = $request->duree_contrat;
        $newOffres->slug = Str::slug($request->titre);
        $newOffres->user_id = Auth::id();
        $newOffres->date_edition = date("Y-m-d H:i:s");
        $newOffres->save();

        return back()->with("success","Offre ajoutée");

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
                "titre"=>"required|string|min:8",
                "categorie_offre"=>"required|integer",
                "description"=>"required|string|min:5",
                "lieu"=>"required|string|min:5",
                "profil"=>"required|string|min:5",
                "date_limite"=>"required",
                "avantages"=>"required|string|min:5",
                "dossier_candidature"=>"required|string|min:5",
                "duree_contrat"=>"required|string|min:3"
            ]

        );

        $dataOffre = [
            "titre" => $request->titre,
            "categorie_offre_id" => $request->categorie_offre,
            "description_offres" => $request->description,
            "lieu" => $request->lieu,
            "profil" => $request->profil,
            // date("Y-m-d",strtotime($request->date_limite))." ".date('h:i:s')
            "date_limite" =>\Carbon\Carbon::createFromFormat('d/m/Y',$request->date_limite)->format('Y-m-d H:i:s'),
            "avantages" => $request->avantages,
            "dossier_candidature" => $request->dossier_candidature,
            "duree_contrat" => $request->duree_contrat,
            "slug" => Str::slug($request->titre),
            "user_id" => Auth::id(),
            // "date_edition" => date("Y-m-d H:i:s")
        ];
        Offre::where("id",decrypt($id))->update($dataOffre);

        return redirect("admin/offres")->with("success","Offre modifiée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offre::find(decrypt($id))->delete();
        return back()->with("success","Offre Supprimée");
    }
}
