<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageValidator
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
            'description' => 'required|string',
            'spoken_by' => 'required|integer',
            'difficulty_id' => 'required|integer|exists:difficulties,id',
            'continent_id' => 'required|integer|exists:continents,id',
            'friends_ids' => 'array',
            'friends_ids.*' => 'integer|exists:friends,id',
        ]);

        return $next($request);
    }
}
