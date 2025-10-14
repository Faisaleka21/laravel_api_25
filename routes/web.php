<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [WelcomeController::class, 'index']);