@extends('layouts.layout1')

@section('content')

<div class="card m-5">
    <div class="card-header">
        Add new Student
    </div>
    <div class="card-body">
        <form action="{{ url('/students') }}" method="POST">
            {!!  csrf_field() !!}
            <label for="name">Student Name : </label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="address">Address : </label>
            <input type="text" name="address" id="address" class="form-control">
            <label for="mobile">Mobile Number: </label>
            <input type="text" name="mobile" id="mobile" class="form-control">
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
