<?php

use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\YouTubeController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('affiliations', AffiliationController::class);
Route::apiResource('branches', BranchController::class);
Route::apiResource('generations', GenerationController::class);
Route::apiResource('talent', TalentController::class);
Route::apiResource('youtube', YouTubeController::class);
