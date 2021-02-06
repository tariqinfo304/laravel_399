<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\APISession as API;

class APISession
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
        $token = $request->input("token");
        
        if(empty($token))
        {
            return response()->json(["status" => "400","Message" => "Invalid Request"]);
        }
        $api = API::where("token",$token)->first();
        if(empty($api))
        {
           return response()->json(["status" => "400","Message" => "Token is Invalid"]); 
        }

        $date = date("Y-m-d H:i:s");

        if($date <= $api->expiry_date)
        {
             return $next($request);
        }
        else
        {
            return response()->json(["status" => "400","Message" => "Your token expired.Plz login again"]); 
        }

       
    }
}
