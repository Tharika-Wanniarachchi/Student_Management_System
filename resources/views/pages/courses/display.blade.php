@extends('layouts.layout1')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <h4 class="card-header">Course ID : {{ $courses->course_code}}</h4>
            <div class="card-body">
                <h6 class="card-text">Course Name :{{ $courses->name }}</h6>
                <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
                <p class="card-text">Mobile : {{ $courses->duration }}</p>
            </div>
        </div>

    </div>
@endsection
