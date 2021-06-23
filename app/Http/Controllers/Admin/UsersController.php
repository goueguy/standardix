<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Metier;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Models\DomaineEmploi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatures = Candidature::orderBy("id","desc")->get();
        return view('admin.candidatures.list', compact('candidatures'));
    }

    public function usersList()
    {
        //$users = User::whereIn('role_id',[2,3])->orderBy("id","desc")->get();
        $users = User::orderBy("id","desc")->get();
        return view('admin.users.list-users', compact('users'));
    }
    public function list(){
        $users= User::all();
        return view('admin.users.list-users', compact('users'));
    }
    public function editPassword($user){
        $user = User::find($user);
        return view('admin.users.user-password', compact('user'));
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
        $roles = Role::all();
        return view('admin.users.create-users',compact("roles"));
    }
    public function edit($user)
    {
        $user = User::find($user);
        $roles = Role::all();
        return view('admin.users.edit-users',compact('user','roles'));
    }
    public function view($user)
    {
        $user = User::find($user);
        $roles = Role::all();
        return view('admin.users.view-users',compact('user','roles'));
    }

    public function updateProfil(Request $request,$user_id){
        //dd($request->all());
        $this->validate($request,[
            "nom"=>"required|string|min:3",
            "prenoms"=>"required|string|min:3",
            "contact"=>"required",
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
        User::where("id",$user_id)->update($data);
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
        $verifyPasswordExist = User::where("id",$user_id)->first();
        if(Hash::check($old_password, $verifyPasswordExist->password)){
            User::where("id",$user_id)->update(["password"=>Hash::make($password)]);
            return back()->with("success","Vos Informations on été modifiées");
        }else{
            return back()->with("error","Mot de passe Incorrect ou Inexistant");
        }

    }
    public function delete($id_candidat){

        $data = Candidature::where("id",$id_candidat)->first();
        //delete cv file in uploads folder
        $data->delete();
        if(File::exists(public_path("cv_uploads/".$data->cv))){
            File::delete(public_path("cv_uploads/".$data->cv));
        }
        return back()->with("success","Cette candidature a été supprimée");
    }

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|string|min:3",
            "firstname"=>"required|string|min:3",
            "email"=>"required|email|unique:users",
            "password"=>"required|string|min:8",
            "roles"=>"required|array",
            "contact"=>"required|string|min:10",
        ]);

        $newUser = new User;
        $newUser->nom=$request->name;
        $newUser->prenoms=$request->firstname;
        $newUser->email=$request->email;
        $newUser->contact=$request->contact;
        $newUser->password=Hash::make($request->password);
        $newUser->save();
        $newUser->roles()->attach($request->roles);
        return redirect('admin/users')->with('success','Utilisateur crée');
    }

    public function deleteUser(User $user){
        $user->roles()->detach();
        $user->delete();
        return redirect('admin/users')->with('success','Utilisateur supprimé');
    }
    public function update(Request $request,User $user){
        //dd($request->all());
        $this->validate($request,[
            "name"=>"required|string|min:3",
            "firstname"=>"required|string|min:3",
            "email"=>"required|email",
        ]);

        $user->roles()->sync($request->roles);
        $data = [
            "nom"=>$request->name,
            "prenoms"=>$request->firstname,
            "email"=>$request->email,
            "contact"=>$request->contact
        ];

        User::where("id",$user->id)->update($data);
        return redirect('admin/users')->with('success','Utilisateur modifié');
    }

    public function updateUserListPassword(Request $request,$user_id){
        $this->validate($request,[
            "password"=>"required|min:8",
            "password_confirmation"=>"required|min:8|same:password",
        ]);
        $password = $request->password;
        User::where("id",$user_id)->update(["password"=>Hash::make($password)]);
        return redirect('admin/users')->with("success","Mot de passe modifié");
    }

}
