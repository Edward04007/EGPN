<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Session
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
        if(!session()->has('UsuarioLogado')){
            return redirect()->route('inicio');
        }
        return $next($request);
    }
}
