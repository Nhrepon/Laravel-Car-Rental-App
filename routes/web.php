<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('user.registration');
});

Route::post('/registration',[UserController::class,'userRegistration']);
Route::get('/userRegistration',function (){return view('user.registration');});



Route::get('/dashboard',function (){
    return view('dashboard');
});
