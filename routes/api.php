<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
|Di sini adalah tempat Anda dapat mendaftarkan rute API untuk aplikasi Anda.
|Rute-rute ini dimuat oleh RouteServiceProvider dan semuanya akan
|diberi middleware grup "api". Buatlah sesuatu yang hebat!
|
*/

Route::get('/welcome', function (){
    return 'Halo, Laravel';
});
