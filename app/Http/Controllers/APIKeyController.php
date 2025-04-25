<?php
namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ApiKey;
use Illuminate\Support\Facades\Auth;

class ApiKeyController extends Controller
{
    public function showKey()
{
    $user = auth()->user();
    $apiKey = $user->api_key; // Assuming api_key is stored in users table

    return view('api-key', compact('apiKey'));
}

public function generate(Request $request)
{
    $user = auth()->user();
    $apiKey = Str::random(60); // generate random key

    $user->api_key = $apiKey;
    $user->save();

    return redirect()->route('api.key')->with('status', 'API Key generated!');
}


}

