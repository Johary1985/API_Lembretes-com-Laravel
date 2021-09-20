<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* Enlace do Controller */

Route::resource('lembretes','App\Http\Controllers\LembreteController');

