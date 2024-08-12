@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Edit student Details
    </div>
    <div class="card-body">
        <form action="{{ url('/students/' .$students->id) }}" method="POST">
            {!!  csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $students->id }}">
            <label for="name">Student Name : </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $students->name }}">
            <label for="address">Address : </label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $students->address }}">
            <label for="mobile">Mobile Number: </label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $students->mobile }}">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
