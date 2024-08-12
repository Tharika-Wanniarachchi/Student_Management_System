@extends('layouts.layout1')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-header">{{ $students->name }}</h4>
        </div>
        <div class="card-body">
            <h6 class="card-text">Student ID : {{ $students->id }}</h6>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Mobile : {{ $students->mobile }}</p>
        </div>
    </div>
@endsection
