<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClientApiController;

use App\Http\Middleware\CheckApiKey;

Route::middleware([CheckApiKey::class])->get('/client/{id}', [ClientApiController::class, 'show']);


// Public route for retrieving client by ID
Route::get('clients/{id}', [ClientApiController::class, 'show']);

// Protected route with Sanctum (requires API token)
Route::middleware('auth:sanctum')->get('/client/{id}', [ClientApiController::class, 'secureShow']);
Route::middleware('check.api.key')->get('/client/{id}', [ClientApiController::class, 'show']);



// For testing authenticated user details
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
