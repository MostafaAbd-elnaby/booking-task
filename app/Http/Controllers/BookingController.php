<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
class BookingController extends Controller
{
    public function bookFlight(Flight $flight)
    {
        if($flight->is_overd){
            return redirect()->back()->with('error', 'Flight is not available');
        }
        return view('front.flight.book', compact('flight'));
    }

    public function doBookFlight(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $flight = Flight::find($request->flight_id);
        if($flight->is_overd){
            return redirect()->back()->with('error', 'Flight is not available');
        }
        $data = $request->all();
        $data['flight_id'] = $request->flight_id;

        Booking::create($data);

        return redirect()->route('home')->with('success', 'Flight booked successfully');
    }

}
