<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isadmin
{
    

    public function handle(Request $request, Closure $next)
    {


        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        // return redirect(‘home’)->with(‘error’,"You don't have admin access.");
        // return $next($request);
    }
      
    
}
