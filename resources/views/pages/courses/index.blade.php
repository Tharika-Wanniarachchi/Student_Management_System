@extends('layouts.layout1')

@section('content')

    <div class="card m-5">
        <div class="card-header">
            <h2>Course Details</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/courses/create')}}" class="btn btn-success mb-3" title="button" >Add New course </a>
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th scope="col">Course code</th>
                        <th scope="col">Name</th>
                        <th scope="col">syllabus</th>
                        <th scope="col">duration</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as  $course)
                            <tr>
                                <td>{{ $course->course_code }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->syllabus }}</td>
                                <td>{{ $course->duration }}</td>
                                <td>
                                    <a href="{{ url('/courses/'.$course->course_code) }}" title="view course" class="btn btn-info">View</a>
                                    <a href="{{ url('/courses/'.$course->course_code.'/edit') }}" title="Edit course" class="btn btn-warning"
                                        onclick="return confirm('Are you sure you want to edit this course?');">Edit</a>
                                    <form action="{{ url('/courses/' . $course->course_code) }}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this course?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete course">Delete</button>
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
