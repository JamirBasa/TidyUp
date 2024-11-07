<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsNotServiceProvider
{
    public function handle(Request $request, Closure $next)
    {
        // Allow access only if the user is NOT a service provider
        if (Auth::check() && !Auth::user()->is_service_provider) {
            return $next($request);
        }

        // Redirect if they are a service provider
        return redirect()->route('shop.index')->with('error', 'Service providers cannot access the registration form.');
    }
}
