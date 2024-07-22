<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsSuperAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isSuperAdmin()) {
            return $next($request);
        }

        // If not admin, redirect or handle unauthorized access
        // return redirect()->route('/');
        abort(403, 'Unauthorized action.');
    }
}
