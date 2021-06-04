<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieOffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_offres = CategorieOffre::all();
        return view("admin.offres.categorie_offres.index",compact("categories_offres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.offres.categorie_offres.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["categorie_offre_title"=>"required|string"]
        ,[
            'categorie_offre_title.required' => 'Champ requis',
            'categorie_offre_title.string' => 'Chaine de caractère uniquement',
        ]
        );

        $new_categorie_offre = new CategorieOffre;
        $new_categorie_offre->categorie_offre_title = $request->categorie_offre_title;
        $new_categorie_offre->categorie_offre_desc = $request->categorie_offre_desc;
        $new_categorie_offre->user_id = Auth::id();
        $new_categorie_offre->categorie_offre_slug = Str::slug($request->categorie_offre_title);
        $new_categorie_offre->save();
        return redirect()->back()->with("success","Catégorie Ajoutée!");
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
