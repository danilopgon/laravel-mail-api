<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class TokenController
{
    public function generateToken(): JsonResponse
    {

        $token = Token::generateToken();

        $newToken = Token::create([
            'token' => $token,
            'expires_at' => now()->addMinutes(10)
        ]);

        if ($newToken) {
            return response()->json(['token' => $newToken->token], 200);
        } else {
            return response()->json(['error' => 'Failed to generate token'], 500);
        }
    }
}
