<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Page routes
Route::get('/', function () {return view('user.registration');});
Route::get('/user-registration', function () {return view('user.registration');});
Route::get('/user-login', function (){return view('user.login');});
Route::get('/blog',function (){return view('page.blog');});
Route::get('/car',function (){return view('page.car');});
Route::get('/about',function (){return view('page.about');});
Route::get('/contact',function (){return view('page.contact');});


// Api routes
Route::post('/registration',[UserController::class,'userRegistration']);
Route::post('/login',[UserController::class,'userLogin']);







Route::get('/dashboard',function (){return view('dashboard');})->name('dashboard');
Route::get('/car',function (){return view('dashboard');})->name('car');
