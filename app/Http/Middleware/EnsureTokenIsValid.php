<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $privateToken = env('API_PRIVATE_TOKEN');
        $authHeader = $request->header('Authorization');
    
        // Split the header into "Bearer" and the token
        $parts = explode(' ', $authHeader);
    
        // If there are not exactly 2 parts, or the token does not match, return Unauthorized
        if (count($parts) !== 2 || $parts[1] !== $privateToken) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        return $next($request);
    }
}
