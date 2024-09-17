<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalController extends Controller
{

    public function store(Request $request, Car $car)
    {
        $request->validate([
            'car_id' => ['required', 'exists:cars,id'],
            'start_date' => ['required', 'date', 'after:today'],
            'end_date' => ['required', 'date', 'after:start_date'],
        ]);
        if(!$car -> isAvailableBetweenDates($request->start_date, $request->end_date)) {
            return redirect()->back()->with('error', 'Car is not available between selected dates.');
        }
        $totalCost = $car->daily_rental_price * ($request->end_date->diffInDays($request->start_date) + 1);
        $rental = new Rental();
        $rental->user_id = auth()->user()->id;
        $rental->car_id = $request->car_id;
        $rental->start_date = $request->start_date;
        $rental->end_date = $request->end_date;
        $rental->total_cost = $totalCost;
        $rental->save();
        return redirect()->route('rental.index')->with('success', 'Rental created successfully.');
}




}