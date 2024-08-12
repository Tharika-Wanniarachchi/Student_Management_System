@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Edit teacher Details
    </div>
    <div class="card-body">
        <form action="{{ url('/teachers/' .$teachers->id) }}" method="POST">
            {!!  csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $teachers->id }}">
            <label for="name">Teacher Name : </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $teachers->name }}">
            <label for="address">Address : </label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $teachers->address }}">
            <label for="mobile">Mobile Number: </label>
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $teachers->mobile }}">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
