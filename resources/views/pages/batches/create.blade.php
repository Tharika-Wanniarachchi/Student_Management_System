@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Add new batch
    </div>
    <div class="card-body">
        <form action="{{ url('/batches') }}" method="POST">
            {!!  csrf_field() !!}
            <label for="batch_name">Batch Name : </label>
            <input type="text" name="batch_name" id="batch_name" class="form-control">
            <label for="course_code">Course code : </label>
            <select class="form-control" id="course_code" name="course_code">
                @foreach($courses as $course)
                    <option> {{ $course->course_code }} </option>
                @endforeach
            </select>

            {{-- <input type="text" name="course_code" id="course_code" class="form-control"> --}}

            <label for="start_date">start Date	: </label>
            <input type="date" name="start_date" id="start_date" class="form-control">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
