<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; // Ensure you import the User model

class CheckApiKey
{
    public function handle($request, Closure $next)
    {
        // Get the API key from the request header
        $providedKey = $request->header('X-API-KEY');
        
        if (!$providedKey) {
            return response()->json(['message' => 'API key missing'], 401);
        }

        // Check if the raw API key exists in the user's table
        $user = User::where('api_key', $providedKey)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid API key'], 403);
        }

        // If the key is valid, continue the request
        return $next($request);
    }
}



