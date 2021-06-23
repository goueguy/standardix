<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        //dd(Auth::user()->roles->pluck('nom'));
        if(Auth::check()){
            if(Auth::user()->roles->pluck('nom')->contains("SUPERADMIN") || Auth::user()->roles->pluck('nom')->contains("ADMIN")){
                return $next($request);
            }else{
                return redirect()->route('candidats.dashboard')->with('danger','Attention vous n\'avez pas accès à ce menu');
            }
        }else{
            return redirect("/")->with('danger','Attention vous n\'avez pas accès à ce menu');
        }
    }
}
