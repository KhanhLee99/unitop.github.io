<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\RedisHandler;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // if(Auth::check()){
            $user = Auth::user();
            if ($user->role->name == $role) return redirect('/') ;
        // }
        // else{
        //     return redirect('/');
        // }
        
        return $next($request);
    }
}
