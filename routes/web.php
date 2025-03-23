<?php

use App\Http\Controllers\duongController;
use App\Http\Controllers\Tincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Tincontroller::class,'index']);
Route::get('/ct/{id}', [Tincontroller::class,'lay1tin']);
Route::get('/cat/{id}', [Tincontroller::class,'tintronloai']);
Route::get('/thongtinsv', [duongController::class,'information']);


