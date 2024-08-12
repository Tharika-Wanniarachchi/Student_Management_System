<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Course::all(); // Retrieve all courses
        return view ('pages.courses.index')->with('courses',$courses); // Display them in a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       $input_details = $request->all();
       Course::create($input_details);
       return redirect('courses')->with('flash_message','course Succsussfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $course_code):View
    {
        $courses = Course::find($course_code);
        return view('pages.courses.display')->with('courses',$courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $course_code):View
    {
        $courses = course::find($course_code);
        return view('pages.courses.edit')->with('courses',$courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $course_code):RedirectResponse
    {
        $courses = Course::find($course_code);
        $input_details = $request->all();
        $courses->update($input_details);
        return redirect('courses')->with('flash_message','course Succsussfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $course_code):RedirectResponse
    {
        course::destroy($course_code);
        return redirect('courses')->with('flash_message','course Succsussfully Deleted!');

    }
}
