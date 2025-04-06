<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FAQController;


// http://localhost:8000/api/
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:api')->get('/checkToken',[AuthController::class,'checktoken']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);


Route::prefix('faq')->group(function () {
    Route::post('/insert',[FAQController::class,'insert']);

    Route::patch('/update/{faq}',[FAQController::class,'update']);
    
    Route::get('/retrieve',[FAQController::class,'retrieve']);
    
    Route::delete('/delete/{faq}',[FAQController::class,'delete']);
      
});
