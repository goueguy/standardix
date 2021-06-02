<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
use App\Http\Response;
class isConnected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userData = Inscription::where('id','=', session('LogIn'))->first();
        if($userData){
            return $next($request);
        }else{
            return redirect("connexion");
        }

    }
}
