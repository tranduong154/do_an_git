<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerAuthentication
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
        if( Auth::check() ) {
            if(Auth::user()->ma_quyen == 2 || Auth::user()->ma_quyen == 1 || Auth::user()->ma_quyen == 0){
                return $next($request);
            }
        }else{
            return redirect('frontend/account/login');
        }
    }
}
