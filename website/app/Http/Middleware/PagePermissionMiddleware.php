<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PagePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next , $page_id): Response
    {
        // return $next($request);
        if (auth()->check() && Auth::user()->userRoleCate->contains('category_id', $page_id)) {
            return $next($request);
        }

        // return redirect()->route('unauthorized'); 
        // return back();
        if (back()->getTargetUrl() == request()->url()) {
            return abort(403); // Authentication access denied
        } else {
            return back()->with('error', 'Access Denied. You do not have the necessary permissions to perform this action.');
        }
    }
}
