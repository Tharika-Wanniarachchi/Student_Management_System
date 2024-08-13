@extends('layouts.layout1')

@section('content')

    <div class="card m-5">
        <div class="card-header">
            <h2>batch Details</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/batches/create')}}" class="btn btn-success mb-3" title="button" >Add New batch </a>
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th scope="col">Batch ID</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($batches as  $batch)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $batch->batch_name }}</td>
                                <td>{{ $batch->course_code }}</td>
                                <td>{{ $batch->start_date }}</td>
                                <td>
                                    <a href="{{ url('/batches/'.$batch->id) }}" title="view batch" class="btn btn-info">View</a>
                                    <a href="{{ url('/batches/'.$batch->id.'/edit') }}" title="Edit batch" class="btn btn-warning"
                                        onclick="return confirm('Are you sure you want to edit this batch?');">Edit</a>
                                    <form action="{{ url('/batches/' . $batch->id) }}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this batch?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete batch">Delete</button>
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
