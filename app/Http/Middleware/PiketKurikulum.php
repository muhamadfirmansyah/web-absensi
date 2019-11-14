<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class PiketKurikulum
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
        if (Auth::check() == true) {
            if (Auth::user()->action_id != 1) {
                return abort(404);
            }
        } else{
            return abort(404);
        }

        return $next($request);
    }
}
