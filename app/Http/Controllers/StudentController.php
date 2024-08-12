<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all(); // Retrieve all students
        return view ('pages.students.index')->with('students',$students); // Display them in a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       $input_details = $request->all();
       Student::create($input_details);
       return redirect('students')->with('flash_message','Student Succsussfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $students = Student::find($id);
        return view('pages.students.display')->with('students',$students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $students = Student::find($id);
        return view('pages.students.edit')->with('students',$students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $students = Student::find($id);
        $input_details = $request->all();
        $students->update($input_details);
        return redirect('students')->with('flash_message','Student Succsussfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message','Student Succsussfully Deleted!');

    }
}
