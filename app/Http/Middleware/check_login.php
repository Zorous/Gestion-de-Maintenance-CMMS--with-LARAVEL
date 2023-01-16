<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check_login
{

    public function handle(Request $request, Closure $next)
    {
        echo "<script>alert('mymiddlleware');</script>";
        if(Auth::check()){
            if(Auth::user()->role == '1'){
                return $next($request);
            }
            else{
                return redirect('/welcome')->with('message',"Access Denied, you're not an Admin");
            }
        }
        else{
            return redirect('/login')->with('message','login to access the applicaion\'s features');
        }
        return $next($request);
    }
}
