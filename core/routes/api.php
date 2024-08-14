<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\API\AssetController;
>>>>>>> 8f4ec1b379dbe2b72cd0748f8cbed691fb6a3402
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::get('assets', [AssetController::class, 'index']); // List all resources
    Route::post('assets', [AssetController::class, 'store']); // Create a new resource
    Route::get('assets/{id}', [AssetController::class, 'show']); // Get a specific resource
    Route::put('assets/{id}', [AssetController::class, 'update']); // Update a specific resource
    Route::delete('assets/{id}', [AssetController::class, 'destroy']); // Delete a specific resource
});
