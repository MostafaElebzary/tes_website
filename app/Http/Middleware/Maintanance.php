<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Maintanance
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        || $request->is('maintanance')

        if (env('MAINTANANCE') == false  ) {
            return $next($request);
        } else {
            return redirect()->route('maintanance_route');
        }
    }
}
