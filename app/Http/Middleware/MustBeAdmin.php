<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedUsernames = ['Eduardo', 'Anastasiia', 'Laura', 'Antonio'];
    
    if (!in_array(auth()->user()?->username, $allowedUsernames)) {
        abort(403);
    }
        return $next($request);
    }
}
