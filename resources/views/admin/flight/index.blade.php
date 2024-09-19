@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Flights</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-4">
            <a href="{{ route('flights.create') }}" class="btn btn-primary">Create Flight</a>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Flight Number</th>
                <th scope="col">Travel Date</th>
                <th scope="col">Departure City</th>
                <th scope="col">Arrival City</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($flights as $flight)
                <tr>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->travel_date->format('F d, Y') }}</td>
                    <td>{{ $flight->departure_city }}</td>
                    <td>{{ $flight->arrival_city }}</td>
                    <td>{{ number_format($flight->price, 0, '.', ',') }}</td>
                    <td>
                        <span class="badge {{ $flight->status ? 'bg-success' : 'bg-danger' }}">{{ $flight->status ? 'Active' : 'Inactive' }}</span>
                    </td>
                    <td>
                        <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('flights.show', $flight->id) }}" class="btn btn-secondary">Show</a>
                        <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this flight?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No flights found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection