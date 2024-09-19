@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit On Flight Number {{ $flight->flight_number }}</h1>
        </div>
    </div>
    <form action="{{ route('flights.update', $flight->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.flight._form')
    </form>
</div>
@endsection