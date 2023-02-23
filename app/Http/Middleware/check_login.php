<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class check_login
{

    public function handle(Request $request, Closure $next)
    {
        // echo "<script>alert('Welcome Mistre Admin');</script>";
        if(Auth::check()){
            if(Auth::user()->status == '1'){
                return $next($request);
            }
            else{
                return redirect('/home')->with('message',"Access Denied, you're not an Admin");
            }
        }
        else{
            return redirect('/login')->with('message','login to access the applicaion\'s features');
        }
        // return $next($request);
    }
}
