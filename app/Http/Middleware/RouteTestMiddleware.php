<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RouteTestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role=NULL)
    {
        if($role == "student")
        {
            //echo "Route student Test Middleware : " . $role;
            return redirect("product");
        }
        else
        {
            echo "Route teacher Test Middleware : " . $role;
        }
        
        return $next($request);
    }
}
