<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('register');
});

Route::post('/register/create_account', [RegisterController::class, 'create_account']);