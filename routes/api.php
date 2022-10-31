<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;


Route::get('/teams', [TeamController::class,'index']);

Route::get('/team/{id}', [TeamController::class,'show']);

Route::post('/teams',[TeamController::class,'create']);

Route::put('/team/{id}',[TeamController::class,'edit']);

Route::delete('/team/{id}', [TeamController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
