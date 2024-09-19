@extends('front.home')

@section('flights')
@isset($flights)
@if ($flights->count() > 0)
<div class="container-fluid blog py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Our Flights</h1>
            <p class="mb-0">You Can Book Your Flight
            </p>
        </div>
        <div class="row g-4">
            @foreach ($flights as $flight)
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.{{$loop->iteration + 2}}s">
                <div class="blog-item">
                    <div class="blog-content p-4">
                        <div class="row mb-3">
                            <div class="col-md-6"><i class="fas fa-plane"></i> From : {{$flight->departure_city}}</div>
                            <div class="col-md-6"><i class="fas fa-location"></i>To : {{$flight->arrival_city}}</div>
                        </div>
                        <div class="blog-date mb-3"><i class="fas fa-clock"></i> Travel Date : {{$flight->travel_date->format('F d, Y')}}</div>
                        <div class="blog-date mb-3"> Price : <strong> ${{number_format($flight->price, 0, '.', ',')}}</strong></div>
                        <a href="{{route('book-flight', $flight->id)}}" class="btn btn-primary rounded-pill py-2 px-4 {{$flight->is_overd ? 'disabled' : ''}}"><i class="fa fa-book ms-1"></i> Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div class="container-fluid blog py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">No Flight Available Now</h1>
            <p class="mb-0">You Can Book Your Flight Later Or <a href="{{ route('all-flights') }}">Book Another Flight</a></p>
        </div>
    </div>
</div>
@endif
@endisset
@endsection