<?php


namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Batch;
use App\Models\Course;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batch::all(); // Retrieve all batches
        return view ('pages.batches.index')->with('batches',$batches); // Display them in a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $courses = Course::all(); // Retrieve all courses
        return view('pages.batches.create')->with('courses',$courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       $input_details = $request->all();
       Batch::create($input_details);
       return redirect('batches')->with('flash_message','batch Succsussfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $batches = Batch::find($id);
        return view('pages.batches.display')->with('batches',$batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $batches = Batch::find($id);
        return view('pages.batches.edit')->with('batches',$batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $batches = Batch::find($id);
        $input_details = $request->all();
        $batches->update($input_details);
        return redirect('batches')->with('flash_message','batch deatils Succsussfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message','batch Succsussfully Deleted!');

    }
}
