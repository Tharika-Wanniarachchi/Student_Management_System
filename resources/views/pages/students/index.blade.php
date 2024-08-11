@extends('layouts.layout1')

@section('content')

    <div class="card m-5">
        <div class="card-header">
            <h2>Student Details</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/students/create')}}" class="btn btn-success mb-3" title="button" >Add New Student </a>
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as  $student)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->mobile }}</td>
                                <td>
                                    <a href="{{ url('/student/'.$student->id) }}" title="view student" class="btn btn-secondary">View</a>
                                    <a href="{{ url('/student/'.$student->id.'/edit') }}" title="Edit student" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
