@extends('layouts.layout1')

@section('content')

    <div class="card m-5">
        <div class="card-header">
            <h2>Teacher Details</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/teachers/create')}}" class="btn btn-success mb-3" title="button" >Add New teacher </a>
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
                        @foreach ($teachers as  $teacher)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td>
                                    <a href="{{ url('/teachers/'.$teacher->id) }}" title="view teacher" class="btn btn-info">View</a>
                                    <a href="{{ url('/teachers/'.$teacher->id.'/edit') }}" title="Edit teacher" class="btn btn-warning"
                                        onclick="return confirm('Are you sure you want to edit this teacher?');">Edit</a>
                                    <form action="{{ url('/teachers/' . $teacher->id) }}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this teacher?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete teacher">Delete</button>
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
