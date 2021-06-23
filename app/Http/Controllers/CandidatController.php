<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\Candidature;
use App\Models\CandidatureRendezVous;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DomaineEmploi;
use App\Models\Offre;
use App\Models\PasswordSecurity;
use App\Models\RendezVous;
use App\Notifications\MessagesNotification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::orderBy('id','desc')->limit(5)->get();
        $totalOffre =  Offre::count();
        //$this->CandidatureStat();
        $totalRendezVous = RendezVous::whereIn("id", $this->RendezVousDataId())->count();
        $totalCandidature = Candidature::where('user_id',Auth::id())->count();
        return view("frontend.candidats.dashboard",compact('totalCandidature','offres','totalOffre','totalRendezVous'));
    }
    public function clients(){
        return view("auth.clients");
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
        //$this->RendezVousDataId();
        $rendezvous = RendezVous::whereIn("id",$this->RendezVousDataId())
        ->orderBy('id','desc')->paginate(10);
        return view("frontend.candidats.rendez-vous",compact('rendezvous'));
    }

    public function candidatures()
    {

        $candidatures = Candidature::where("user_id",Auth::id())->get();
        $idOffre = array();
        foreach ($candidatures as $key => $value) {
            array_push($idOffre,$value->offre_id);
        }
        $offres = Offre::whereIn("id",$idOffre)->orderBy('id','desc')->paginate(10);
        return view("frontend.candidats.subscribes",compact('offres'));
    }
    public function offers()
    {
        $offres = Offre::paginate(10);
        return view("frontend.candidats.offers",compact('offres'));
    }
    public function changeParameters(Request $request,$user){
        // $request->validate([
        //     "nom"=>"required|string",
        //     "prenoms"=>"required|string",
        //     "motivation"=>"required|string",
        //     "telephone"=>"required|string",
        //     "lieu_habitation"=>"required|string",
        //     "domaine"=>"required|integer"
        // ]);
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
        User::where("id",$user)->update($userData);
        return back()->with("success","Information a été modifiée");
    }

    public function detailOffre($slug){

        $offre = Offre::where("slug",$slug)->first();
        return view("frontend.candidats.detail-offre",compact('offre'));
    }
    public function RendezVousDataId(){
        $candidature = CandidatureRendezVous::where("candidature_id",Auth::id())->get();
        $rendezVousIds = [];
        foreach ($candidature as $key => $value) {
            array_push($rendezVousIds,$value->rendez_vous_id);
        }
        return $rendezVousIds;
    }
    public  function saveCandidateClient(Request $request){
        $request->validate([

            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'nom_entreprise' => 'required|string|max:100'
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->nom_entreprise = $request->nom_entreprise;
        $user->save();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('candidats/dashboard');
        }

    }
    public function showPasswordForm(){
        return view("auth.passwords.candidat-password");
    }
    public function sendPasswordLink(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $isUserExist = User::where('email',$request->email)->first();
        if($isUserExist){
            $data = [
                "token"=>Str::random(60),
                "nom"=>$isUserExist->nom,
                "prenoms"=>$isUserExist->prenoms,
                "entreprise"=>$isUserExist->nom_entreprise
            ];
            User::where('email',$request->email)->update(["remember_token"=>$data['token']]);
            PasswordSecurity::create([
                'user_id' =>$isUserExist->id,
                'password_expiry_days' => 1,
                'password_updated_at' => Carbon::now(),
            ]);
            Mail::to($isUserExist->email)->send(new ResetPassword($data));
            return back()->with('success','Le lien de réinitialisation a été envoyé à cette adresse');

        }else{

            return back()->with('success','Cet adresse Email est inexistante');
        }
    }

    public  function resetPasswordForm($token){

        $tokenStatus = $this->verifyIfTokenIsValid($token);
        if($tokenStatus){
            return view("auth.passwords.reset-password-candidat",compact('token'));
        }else{
            abort(403,"Le lien a expiré");
        }

    }

    public function verifyIfTokenIsValid($token){

        $tokenIsExist = User::where("remember_token",$token)->first();
        if(is_null($tokenIsExist)){
            abort(403,"Ce token a expiré ou n existe pas");
        }else{
            $tokenData = PasswordSecurity::where('user_id',$tokenIsExist->id)->orderBy('id','desc')->first();
            $expiration_date_token = Carbon::parse($tokenData->password_updated_at)->addDays($tokenData->password_expiry_days);
            if($expiration_date_token->lessThan(Carbon::now())){
                return false;
            }else{
                return true;
            }
        }
    }

    public function updatePassword(Request $request,$token){

        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);
        $tokenIsExist = User::where("remember_token",$token)->first();

        if($tokenIsExist){
            User::where("remember_token",$token)->update(['password'=>Hash::make($request->password)]);
            return redirect('login')->with('success','Votre mot de passe a été réinitialisé !');
        }
    }
}
