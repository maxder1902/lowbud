<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if ($user->user_id == 'admin') {
                return redirect('/form');
            } else {
                return redirect('/products');
            }
        }

        return $next($request);
    }
}