<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
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
      if (Auth::guard($guard)->check() && !Auth::user()->isAdm) {
        return $next($request);
      }else{
        return redirect()->route('login.index');
      }
    }
}
