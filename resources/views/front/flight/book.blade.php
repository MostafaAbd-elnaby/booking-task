@extends('front.home')

@section('flights')
<div class="container-fluid blog py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Fill Out Your Details</h1>
            <p class="mb-0">simple form for booking flight.
            </p>
            <p>
                <span class="text-capitalize"> from : <strong>{{$flight->departure_city}}</strong> to : <strong>{{$flight->arrival_city}}</strong></span>
            </p>
            <p>
                <span class="text-capitalize">at : <strong>{{$flight->travel_date->format('F d, Y')}}</strong></span>
            </p>
            <p>
                <span class="text-capitalize">price <strong>{{number_format($flight->price, 0, '.', ',')}}$</strong></span>
            </p>
        </div>
        <form action="{{ route('do-book-flight') }}" method="post" >
            @csrf
            <div class="row g-4 mb-4">
            <input type="hidden" name="flight_id" value="{{ $flight->id }}"/>
                <div class="col-md-4">
                    <x-form._input :hasLabel="false" name="name" type="text" id="name" value="{{ old('name') }}" placeholder="Your Name" />
                </div>
                <div class="col-md-4">
                    <x-form._input :hasLabel="false" name="email" type="email" id="email" value="{{ old('email') }}" placeholder="Your Email" />
                </div>
                <div class="col-md-4">
                    <x-form._input :hasLabel="false" name="phone" type="text" id="phone" value="{{ old('phone') }}" placeholder="Your Phone" />
                </div>  
            </div>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100 py-2">Book Now</button>
                </div>
            </div>       
        </form>

    </div>
</div>

@endsection