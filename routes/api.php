<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\GameController;


// Teams
Route::get('/teams', [TeamController::class,'index']);

Route::get('/team/{id}', [TeamController::class,'show']);

Route::post('/teams',[TeamController::class,'create']);

Route::put('/team/{id}',[TeamController::class,'edit']);

Route::delete('/team/{id}', [TeamController::class,'delete']);

// Players
Route::get('/players', [PlayersController::class,'index']);

Route::get('/player/{id}', [PlayersController::class,'show']);

Route::post('/players',[PlayersController::class,'create']);

Route::put('/player/{id}',[PlayersController::class,'edit']);

Route::delete('/player/{id}', [PlayersController::class,'delete']);

//Games
Route::get('/games',[GameController::class,'index']);

Route::post('/games',[GameController::class,'create']);

Route::get('/game/{id}',[GameController::class,'show']);

Route::put('/game/{id}',[GameController::class,'edit']);

Route::delete('/game/{id}', [GameController::class,'delete']);

//Blog
Route::get('/blog',[BlogController::class,'index']);

Route::post('/blog',[BlogController::class,'create']);

Route::get('/blog/{id}',[BlogController::class,'show']);

Route::put('/blog/{id}',[BlogController::class,'edit']);

Route::delete('/blog/{id}',[BlogController::class,'delete']);

//Auth requests
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
