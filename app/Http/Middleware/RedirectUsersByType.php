<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectUsersByType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Logged in a super admin or admin
        if (Auth::check() && Auth::user()->type != 3)
            return redirect()->route('user', Auth::id());

        // Logged in a regular user
        elseif (Auth::check())
            return redirect()->route('profile', Auth::id());

        return $next($request);
    }
}
