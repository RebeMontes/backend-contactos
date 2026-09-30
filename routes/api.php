<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/contactos', [ContactoController::class, 'index']);
Route::post('/contactos', [ContactoController::class, 'store']);
