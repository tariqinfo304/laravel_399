<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GlobalTestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // echo "Call";
       // die();
        return $next($request);
    }
}
