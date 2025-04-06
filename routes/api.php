<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;

// http://localhost:8000/api/
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:api')->get('/checkToken',[AuthController::class,'checktoken']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);

Route::post('/insert',[UserController::class,'add']);

Route::post('/edit',[UserController::class,'edit']);

Route::get('/retrieve',[UserController::class,'retrieve']);

Route::post('/delete',[UserController::class,'delete']);
