@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Create New Flight</h1>
        </div>
    </div>
    <form action="{{ route('flights.store') }}" method="POST">
        @csrf
        @include('admin.flight._form')
    </form>
</div>
@endsection