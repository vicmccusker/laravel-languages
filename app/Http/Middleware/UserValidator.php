<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email:rfc,dns',
            'password' => ['required', 'regex:/[a-z]|[@$!%*#?&]|[A-Z]/'],
        ]);

        return $next($request);
    }
}
