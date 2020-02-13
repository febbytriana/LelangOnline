<?php

namespace App\Http\Middleware;

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
    public function handle($request, Closure $next)
    {
        $user = \App\User::where('email', $request->email)->first();
        if ($user->id_level == '1') {
            return redirect('admins/home');
        } elseif ($user->id_level == '2') {
            return redirect('petugas/home');
        }

        return $next($request);
    }
}
