<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check())
      {
        if(is_null(Auth::user())){
        return redirect('/');    
        }elseif (Auth::user()->id=='1') {
            return redirect('admin');
        }
        


      }  

            // return redirect('/');
        return $next($request);

}

}

// return view('usuario.indexusuario');
// return redirect(RouteServiceProvider::HOME);