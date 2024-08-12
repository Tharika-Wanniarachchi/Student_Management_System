@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Edit course Details
    </div>
    <div class="card-body">
        <form action="{{ url('/courses/' .$courses->course_code) }}" method="POST">
            {!!  csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $courses->id }}">
            <label for="course_code">Course code : </label>
            <input type="text" name="course_code" id="course_code" class="form-control" value="{{ $courses->course_code }}">
            <label for="name">Course Name : </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name }}">
            <label for="syllabus">Syllabus : </label>
            <input type="text" name="syllabus" id="syllabus" class="form-control" value="{{ $courses->syllabus }}">
            <label for="duration">Duration: </label>
            <input type="text" name="duration" id="duration" class="form-control" value="{{ $courses->duration }}">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
