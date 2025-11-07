<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && !$request->user()->isApproved() && !$request->user()->isAdmin()) {
            auth()->logout();

            return redirect()->route('login')->with('error', 'Your account is pending admin approval. You will receive an email once approved.');
        }

        return $next($request);
    }
}
