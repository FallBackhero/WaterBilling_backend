<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangayPuroksController;
use App\Http\Controllers\ConsumersController;
use App\Http\Controllers\ReadingsController;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register',[AuthController::class,'register']);

//private routes
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::resource('/tasks', TasksController::class);
    Route::post('/logout',[AuthController::class,'logout']);
    Route::resource('/brgyprk',BarangayPuroksController::class);
    Route::resource('/consumer',ConsumersController::class);
    Route::resource('/reading',ReadingsController::class);
});

