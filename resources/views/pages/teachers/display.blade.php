@extends('layouts.layout1')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-header">{{ $teachers->name }}</h4>
            <div class="card-body">
                <h6 class="card-text">Teacher ID : {{ $teachers->id }}</h6>
                <p class="card-text">Address : {{ $teachers->address }}</p>
                <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
            </div>
        </div>

    </div>
@endsection
