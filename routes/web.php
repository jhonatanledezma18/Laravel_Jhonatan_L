<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludo',[ProductController::class,'saludo']);
Route::get('/suma/{num1}/{num2}',[OperacionesController::class,'sumar']);
Route::get('/resta/{num1}/{num2}',[OperacionesController::class,'restar']);
Route::get('/multiplicacion/{num1}/{num2}',[OperacionesController::class,'multiplicar']);
Route::get('/dividir/{num1}/{num2}',[OperacionesController::class,'division']);