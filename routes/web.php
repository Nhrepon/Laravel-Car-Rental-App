<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('user.registration');
});

Route::get('/registration',[UserController::class,'userRegistration']);



Route::get('/dashboard',[UserController::class,'userRegistration']);