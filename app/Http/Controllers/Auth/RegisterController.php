<?php

namespace App\Http\Controllers\Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'nom' => 'required|string|max:100',
            'prenoms' => 'required|string|max:200',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            // 'contact',
            // 'lieu_habitation',
            // 'domaine_emploi_id',
            // 'cv',
            // 'motivation',
            // 'metier_id'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $memberRole = Role::where('nom','MEMBER')->first();
        $member = User::create([
            'nom' => $data['nom'],
            'prenoms' => $data['prenoms'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nom_entreprise' => $data['nom_entreprise'],
        ]);
        $member->roles()->attach($memberRole);
        return $member;
    }
}
