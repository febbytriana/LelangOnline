<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    
    public function handle($request, Closure $next, $rolename)
    {
        $user = Auth::user();
        if($user->id_level == $rolename) {
            return $next($request);
        }
        return redirect('home');
    }
}
