<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    protected $providers = ["google","github","facebook"];

    
    public function redirect(Request $request){
        $provider = $request->provider;
        // On vérifie si le provider est autorisé
        if(in_array($provider,$this->providers)){
            //dd('ok');
            return Socialite::driver($provider)->redirect();//// On redirige vers le provider
        }
        abort(404);//si le provider n'est pas autorisé on retourne erreur 404 
    }
    public function callback(Request $request){
        $provider = $request->provider;
        if(in_array($provider,$this->providers)){
            //on récupère les informations provenant du provider
            $request->session()->put('state',Str::random(40));
            $data = Socialite::driver($request->provider)->user();
            $token = $data->token;
            $email =$data->getEmail();//email de l'utilisateur
            $nom = $data->getName();//nom  de l'utilisateur
            //on vérifie si l  utilisateur existe déja
            $user = User::where("email",$email)->first();
            if(isset($user)){
                //on met à jour les informations
                $user->nom  = $nom;
                $user->save();
            }else{
                $user = User::create(
                    [
                        "nom"=>$nom,
                        "email"=>$email,
                        "password"=>Hash::make("#123Tes?t@!")//on attribue un mot de passe
                    ]
                );
            }
            
            //on connecte l'utilisateur
            $credentials = $request->only($email, Hash::make("#123Tes?t@!"));
            if (Auth::attempt($credentials)) {
                //on le redirige sur l espace  candidats
                return redirect()->intended('candidats/dashboard');
            }
        
        }
    }
}
