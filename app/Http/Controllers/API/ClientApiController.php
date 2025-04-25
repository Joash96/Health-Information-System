<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientApiController extends Controller
{
    public function show($id)
    {
        // Fetch the client from the database using the provided ID
        $client = Client::find($id);

        // Check if the client exists
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        // Return the client data as JSON
        return response()->json([
            'client' => $client
        ], 200);
    }
    
}
