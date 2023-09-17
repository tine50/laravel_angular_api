<?php

use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\ClassesController;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function() {
});

Route::apiResource('classes', ClassesController::class);
Route::apiResource('apprenants', ApprenantsController::class);

// Route::get('/classes', [ClassesController::class, 'index']);
// Route::get('/classes/{classe}', [ClassesController::class, 'show']);
// Route::post('classes', [ClassesController::class, 'store']);
// Route::put('classes/{classe}', [ClassesController::class, 'update']);
