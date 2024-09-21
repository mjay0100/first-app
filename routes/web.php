<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
