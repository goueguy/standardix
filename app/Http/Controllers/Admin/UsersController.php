<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use App\Models\DomaineEmploi;
use App\Models\Metier;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = DB::table('users')->where('niveau_acces');
        $candidatures = Candidature::orderBy("id","desc")->get();
        // foreach ($users->roles as $user) {
        //     dd($user->roles);
        //}

        // foreach ($candidatures as $key => $value) {
        //     dd($value->metier->nom_metier);
        // }

        return view('admin.candidatures.list', compact('candidatures'));
    }
    public function list(){
        $users= User::all();
        return view('admin.users.list-users', compact('users'));
    }

    public function createPassword(){

        return view('admin.users.parametres.password');
    }
    public function createProfil(){
        $roles = Role::all();
        $domaines = DomaineEmploi::all();
        $metiers = Metier::all();
        return view('admin.users.parametres.profil',compact('roles','domaines','metiers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $users = User::all();
        return view('admin.users.create-users',compact("users"));
    }
    public function edit()
    {
        return view('admin.users.edit-users');
    }
    public function view()
    {
        return view('admin.users.view-users');
    }


    public function updateProfil(Request $request,$user_id){
        //dd($request->all());
        $this->validate($request,[
            "nom"=>"required|string|min:3",
            "prenoms"=>"required|string|min:3",
            "contact"=>"required",
            "role"=>"required|integer",
            "lieu_habitation"=>"required|string|min:3",
            "domaine_emploi"=>"required",
            "metier"=>"required",
            "motivation"=>"required|string|min:3"
        ]);
        $data = [
            "nom"=>$request->nom,
            "prenoms"=>$request->prenoms,
            "contact"=>$request->contact,
            "role_id"=>$request->role,
            "lieu_habitation"=>$request->lieu_habitation,
            "domaine_emploi_id"=>$request->domaine_emploi,
            "metier_id"=>$request->metier,
            "motivation"=>$request->motivation
        ];
        User::where("id",decrypt($user_id))->update($data);
        return back()->with("success","Vos Informations on été modifiées");
    }
    public function updatePassword(Request $request,$user_id){
        $this->validate($request,[
            "old_password"=>"required|min:8",
            "password"=>"required|min:8",
            "password_confirmation"=>"required|min:8|same:password",
        ]);
        //password=john0000
        $old_password = $request->old_password;
        $password = $request->password;
        $verifyPasswordExist = User::where("id",decrypt($user_id))->first();
        if(Hash::check($old_password, $verifyPasswordExist->password)){
            User::where("id",decrypt($user_id))->update(["password"=>Hash::make($password)]);
            return back()->with("success","Vos Informations on été modifiées");
        }else{
            return back()->with("error","Mot de passe Incorrect ou Inexistant");
        }

    }

    public function delete($id_candidat){

        $data = Candidature::where("id",decrypt($id_candidat))->first();
        //delete cv file in uploads folder
        $data->delete();
        if(File::exists(public_path("cv_uploads/".$data->cv))){
            File::delete(public_path("cv_uploads/".$data->cv));
        }

        return back()->with("success","Cette candidature a été supprimée");


    }
}
