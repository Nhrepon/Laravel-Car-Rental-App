<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('frontend.car.index', compact('cars'));
    }
    public function show(Car $car)
    {
        return view('frontend.car.show', compact('car'));
    }
}
