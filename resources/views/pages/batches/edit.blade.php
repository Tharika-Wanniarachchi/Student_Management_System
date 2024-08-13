@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Edit batch Details
    </div>
    <div class="card-body">
        <form action="{{ url('/batches/' .$batches->id) }}" method="POST">
            {!!  csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $batchs->id }}">
            <label for="batch_name">Batch Name : </label>
            <input type="text" name="batch_name" id="batch_name" class="form-control" value="{{ $batches->batch_name }}">
            <label for="course_code">Course code : </label>
            <input type="text" name="course_code" id="course_code" class="form-control" value="{{ $batches->course_code }}">
            <label for="start_date">start Date	: </label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $batches->start_date }}">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
