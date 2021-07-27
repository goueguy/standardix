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

    
    public function redirect(Request $request,$action){
        $provider = $request->provider;
        dd($action);
        // On vérifie si le provider est autorisé
        if(in_array($provider,$this->providers)){
            //dd('ok');
            return Socialite::driver($provider)->redirect();//// On redirige vers le provider
        }
        abort(404);//si le provider n'est pas autorisé on retourne erreur 404 
    }
    public function callback(Request $request){
        try {
            $provider = $request->provider;

            if(in_array($provider,$this->providers)){
                //on récupère les informations provenant du provider
        
                $user = Socialite::driver($request->provider)->user();
                //dd($user->getId());
                $token = $user->token;
                $refreshToken = $user->refreshToken;
                $expiresIn = $user->expiresIn;

                // OAuth 1.0 providers...
                $token = $user->token;

                $email =$user->getEmail();//email de l'utilisateur
                $nom = $user->getName();//nom  de l'utilisateur
                //dd($user->name);
                $findUser = User::where("google_id",$user->getId())->first();
                //dd($findUser);
                if(isset($findUser)){

                    Auth::login($findUser);
                    return redirect()->intended('candidats/dashboard');
                }else{
                    $newUser = User::create(
                        [
                            "email"=>$user->email,
                            "google_id"=>$user->getId(),
                            "password"=>Hash::make("#123Tes?t@!")//on attribue un mot de passe
                        ]
                    );
                }
                    Auth::login($newUser);
                    return redirect()->intended('candidats/dashboard');
                }
            
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    
    }
}
