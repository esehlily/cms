<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if (!Auth::check()) {
    //         return redirect()->route('login');
    //     }

    //     // Use the isAdmin() method we just created
    //     if (Auth::user()->isAdmin()) {
    //         return $next($request);
    //     }

    //     abort(403, 'Unauthorized access');
    // }
}
