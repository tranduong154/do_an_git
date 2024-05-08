<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthentication
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
        if( Auth::check() ){
            if(Auth::user()->ma_quyen == 0 || Auth::user()->ma_quyen == 1 ){
                return $next($request);
            }
        }else{
            return redirect('frontend/account/login');
        }
    }
}
