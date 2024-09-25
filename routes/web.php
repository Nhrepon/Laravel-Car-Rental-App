<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('user.registration');
});
Route::get('/create',function (){return view('user.registration');});

Route::post('/registration',[UserController::class,'userRegistration']);
Route::get('/login',function (){return view('user.login');});
Route::get('/blog',function (){return view('page.blog');});
Route::get('/car',function (){return view('page.car');});
Route::get('/about',function (){return view('page.about');});
Route::get('/contact',function (){return view('page.contact');});



Route::get('/dashboard',function (){
    return view('dashboard');
});
