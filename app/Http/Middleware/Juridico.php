<?php

namespace App\Http\Middleware;

use Closure;

class Juridico
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
        if(session()->has('Juridico')){
            return $next($request);
        }
        return redirect('/SignIn');
    }
}
