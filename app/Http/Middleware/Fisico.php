<?php

namespace App\Http\Middleware;

use Closure;

class Fisico extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('Fisico')){
            return $next($request);
        }
        return redirect()->back();
    }
}
