<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class isAdmin
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
        if(Auth::id() && Auth::user()->niveau_acces==1 || Auth::user()->niveau_acces==2){
            return $next($request);
        }else{
            return redirect()->route("candidats.dashboard");
        }

    }
}
