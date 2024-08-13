@extends('layouts.layout1')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-header">{{ $batches->name }}</h4>
            <div class="card-body">
                <h6 class="card-text">batch ID : {{ $batches->id }}</h6>
                <p class="card-text">Batch Name : {{ $batches->batch_name }}</p>
                <p class="card-text">Course code : {{ $batches->course_code }}</p>
                <p class="card-text"> Start Date : {{ $batches->start_date	 }}</p>
            </div>
        </div>

    </div>
@endsection
