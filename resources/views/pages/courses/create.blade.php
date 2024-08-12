@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Add new Course
    </div>
    <div class="card-body">
        <form action="{{ url('/courses') }}" method="POST">
            {!!  csrf_field() !!}
            <label for="name">Course Name : </label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="syllabus">Syllabus : </label>
            <input type="text" name="syllabus" id="syllabus" class="form-control">
            <label for="duration">Duration: </label>
            <input type="text" name="duration" id="duration" class="form-control">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
