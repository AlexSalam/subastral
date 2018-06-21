<?php

namespace App\Http\Middleware\Auth;

use Closure;

class Verified
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
        if ($request->user()->verified === 1) {
            return $next($request);
        } else {
            return redirect('/');
        }

    }
}
