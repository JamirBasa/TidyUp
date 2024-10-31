<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsServiceProvider
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is a service provider
        if (Auth::check() && Auth::user()->is_service_provider) {
            return $next($request);
        }

        // Redirect if not a service provider
        return redirect()->route('index')->with('error', 'Access denied. You are not a service provider.');
    }
}
