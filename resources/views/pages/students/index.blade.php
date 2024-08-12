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
                                    <a href="{{ url('/students/'.$student->id) }}" title="view student" class="btn btn-info">View</a>
                                    <a href="{{ url('/students/'.$student->id.'/edit') }}" title="Edit student" class="btn btn-warning"
                                        onclick="return confirm('Are you sure you want to edit this student?');">Edit</a>
                                    <form action="{{ url('/students/' . $student->id) }}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete student">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
