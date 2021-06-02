<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function login(){
        return view("admin.login");
    }
    public function dashboard(){
        return view("admin.index");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     "email"=>"required|email|unique:users",
        //     "password"=>"required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/"
        // ]);
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = $request->only("email","password");
        if(!$request->email || !$request->password){
            return back()->with('fail','Le Mot de passe ou Adresse Email est requis');
        }else{
            if(Auth::attempt($credentials)){
                return redirect()->intended("/admin/dashboard");
            }else{
                return back()->with('fail','Mot de passe ou Adresse Email Invalide');
            }
        }


    }

        public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/auth');
    }
}
