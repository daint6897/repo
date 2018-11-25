<?php

namespace App\Http\Middleware\admin;

use Closure;
use Illuminate\Support\Facades\Auth;
class login
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
        if (Auth::check()) {
            // Authentication passed...
             return $next($request);
        }else{
            return redirect()->route('login');
        }
       
    }
}
