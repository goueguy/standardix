<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryOffre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Role;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_offres = CategoryOffre::all();
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

        $new_categorie_offre = new CategoryOffre;
        $new_categorie_offre->categorie_offre_title = $request->categorie_offre_title;
        $new_categorie_offre->categorie_offre_desc = $request->categorie_offre_desc;
        $new_categorie_offre->user_id = Auth::id();
        $new_categorie_offre->categorie_offre_slug = Str::slug($request->categorie_offre_title);
        $new_categorie_offre->save();
        return redirect()->back()->with("success","Catégorie Ajoutée!");
    }
    public function createRole()
    {
        $categories_users = Role::all();
       // dd($categories_users);
        return view("admin.roles.index",compact("categories_users"));
    }
    public function storeRole(Request $request)
    {
        $request->validate(["nom"=>"required|string"]
        ,[
            'nom.required' => 'Champ requis',
            'nom.string' => 'Chaine de caractère uniquement',
        ]
        );
        $new_role = new Role;
        $new_role->nom= $request->nom;
        $new_role->description= $request->description;
        $new_role->save();
        return redirect()->back()->with("success","Role Ajouté!");
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
        $categorie = CategoryOffre::find($id);
        return view("admin.offres.categorie_offres.edit",compact('categorie'));
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
                "categorie_offre_title"=>"required|string",
                "categorie_offre_desc"=>"required|string",
            ]
        ,[
            'categorie_offre_title.required' => 'Champ requis',
            'categorie_offre_desc.string' => 'Chaine de caractère uniquement',
        ]
        );
        $data = [
            "categorie_offre_title"=>$request->categorie_offre_title,
            "categorie_offre_desc"=> $request->categorie_offre_desc
        ];
        CategoryOffre::where("id",$id)->update($data);
        return redirect("admin/offres/categories/add")->with("success","Catégorie Modifiée!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoryOffre::find($id)->delete();
        return back()->with('success','Catégorie supprimée');
    }
}
