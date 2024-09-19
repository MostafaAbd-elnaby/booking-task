<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        return view('admin.flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightRequest $request)
    {
        $data = $request->all();
        $data['status'] = $request->status == '1' ? 1 : 0;
        Flight::create($data);
        return redirect()->route('flights.index')->with('success', 'Flight created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return view('admin.flight.show', compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        return view('admin.flight.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlightRequest $request, $id)
    {
        $data = $request->all();
        $data['status'] = $request->status == '1' ? 1 : 0;
        Flight::find($id)->update($data);
        return redirect()->route('flights.index')->with('success', 'Flight updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully');
    }
}
