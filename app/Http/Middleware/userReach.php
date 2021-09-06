<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userReach
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
        if((session()->get('user')['auth']=='user') || (session()->get('user')['auth']=='admin')){
            return $next($request);
        }
        return redirect("login");
    }
}
