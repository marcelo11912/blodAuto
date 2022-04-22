<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        //return $next($request);
        if (auth()->user()-> email == "marcelo15052000@gmail.com") {
            return $next($request);
        }else{
            return redirect("no-autorizado");
        }
    }
}
