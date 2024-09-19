@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('front/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container align-items-center py-4">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                            style="animation-delay: 1s;">
                            <div class="text-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Booking</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">The Easist Booking System</h1>
                                <p class="mb-4 fs-5">Thi is a simple booking system for test skills as a task.
                                </p>

                            </div>
                        </div>
                        <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s"
                            style="animation-delay: 1s;">
                            <div class="ticket-form p-5">
                                <h2 class="text-dark text-uppercase mb-4">Search For Your next Flight</h2>
                                <form action="{{ route('search-flights') }}" method="get">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <x-form._input class="border-0 py-2" label="Travel Date" name="date" type="date" id="travel_date" value="{{ old('date') }}" placeholder="Travel Date" />
                                        </div>
                                        <div class="col-6">
                                            <x-form._input class="border-0 py-2" :hasLabel="false" name="from" type="text" id="from" value="{{ old('from') }}" placeholder="Departure City" />
                                        </div>
                                        <div class="col-6">
                                            <x-form._input class="border-0 py-2" :hasLabel="false" name="to" type="text" id="to" value="{{ old('to') }}" placeholder="Arrival City" />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100 py-2 px-5">Search For
                                                Available</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('flights')
@endsection
