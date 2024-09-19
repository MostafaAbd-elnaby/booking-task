<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'date' => 'required|date',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $flights = Flight::isAvailable()
        ->where('departure_city', $request->from)
        ->where('arrival_city', $request->to)
        ->whereDate('travel_date', $request->date)
        ->get();
        return view('front.flight.flights', compact('flights'));
    }

    public function getAllFlights()
    {
        $flights = Flight::isAvailable()->orderBy('created_at', 'desc')->get();
        return view('front.flight.flights', compact('flights'));
    }
}
