<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "<script>alert('mymiddlleware');</script>";
        if(auth->user()->status != "admin" || auth->user()->status != "user"){
            // auth::logout();
            return redirect("/login");
        }
        return $next($request);
    }
}
