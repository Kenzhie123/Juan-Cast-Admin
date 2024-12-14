<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChangeEnvironment
{

   
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if($request->isMethod('post'))
        {
            session(['environment'=>$request['environment']]);
            return $next($request);
        }
        else
        {
            return $next($request);
        }
       
        
    }
}
