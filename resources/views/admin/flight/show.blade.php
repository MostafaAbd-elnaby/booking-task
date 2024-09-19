@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wow fadeInUp" data-wow-delay="0.s">
        <div class="d-flex justify-content-center">
            <div class="blog-content p-4">
                <div class="row mb-3">
                    <div class="col-md-6">Flight Number : <strong>{{$flight->flight_number}}</strong></div>
                    <div class="col-md-6"><i class="fas fa-plane"></i> Departure City : {{$flight->departure_city}}</div>
                    <div class="col-md-6"><i class="fas fa-location"></i>Arrial City : {{$flight->arrival_city}}</div>
                </div>
                <div class="blog-date mb-3"><i class="fas fa-clock"></i> Travel Date : {{$flight->travel_date->format('F d, Y')}}</div>
                <div class="blog-date mb-3"> Price : <strong> ${{number_format($flight->price, 0, '.', ',')}}</strong></div>
            </div>
        </div>
        <div class="mb-4">
            <a href="{{ route('flights.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection