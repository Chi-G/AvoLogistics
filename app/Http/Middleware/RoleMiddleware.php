<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Debugging line
        \Log::info('User Role: ' . $user->role);
        
        // Check if user is authenticated and has one of the specified roles
        if (!$user || !in_array($user->role, $roles)) {
            return redirect('dashboard')->with('error', 'You do not have access to this resource');
        }

        return $next($request);
    }

    
}