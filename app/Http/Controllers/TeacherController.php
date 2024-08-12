<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all(); // Retrieve all teachers
        return view ('pages.teachers.index')->with('teachers',$teachers); // Display them in a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       $input_details = $request->all();
       Teacher::create($input_details);
       return redirect('teachers')->with('flash_message','teacher Succsussfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $teachers = Teacher::find($id);
        return view('pages.teachers.display')->with('teachers',$teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $teachers = Teacher::find($id);
        return view('pages.teachers.edit')->with('teachers',$teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $teachers = Teacher::find($id);
        $input_details = $request->all();
        $teachers->update($input_details);
        return redirect('teachers')->with('flash_message','New teacher Succsussfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        teacher::destroy($id);
        return redirect('teachers')->with('flash_message','teacher Succsussfully Deleted!');

    }
}
