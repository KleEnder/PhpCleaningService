<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Acl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // z return pred kontorllerjem
        // brez return po kontrollerju
        /// logiko pisem pred izvedbo kontrolerja

        if (!Auth::guard($guard)->check() || Auth::user()->role_id > 1) {
            return redirect('/home');
        }

        return $next($request);

    }
}
