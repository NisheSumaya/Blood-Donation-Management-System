<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Userauth 
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
        if (! auth()->check()) {
            return redirect()->route('login.user.form');
        }
        return $next($request);
    }
}
