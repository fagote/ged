<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(!Auth::check()){
            return redirect()->route('login')->with('error','Acesso negado!');
        }

        $user = Auth::user();
        if($user->id_permission != 1){
            return redirect()->route('dashboard')->with('erros','Acesso negado!');
        }
        return $next($request);
    }
}
