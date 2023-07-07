<?php

use App\Http\Controllers\Hbv2UserController;
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
Route::get('/users/{id}', [Hbv2UserController::class, 'getUser']);
Route::post('/users', [Hbv2UserController::class, 'createUser']);
Route::patch('/users/{id}', [Hbv2UserController::class, 'updateUser']);
Route::delete('/users/{id}', [Hbv2UserController::class, 'deleteUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
