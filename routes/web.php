<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

// Route::get('/student', function () {
//     return view('pages.students.index');
// });

//Route::get('/student', [StudentController::class, 'index']); // maps the '/student' URL to the index method in the 'StudentController' class.

Route::resource('/students', StudentController::class); //This single line creates multiple routes that map to the typical CRUD operations

// The Route::resource method automatically creates the following routes:

//     GET	        /students	            index	    Display a list of all students
//     GET	        /students/create	    create	    Show a form to create a new student
//     POST	        /students	            store	    Save a new student to the database
//     GET	        /students/{id}	        show	    Display a specific student
//     GET	        /students/{id}/edit	    edit	    Show a form to edit an existing student
//     PUT/PATCH	/students/{id}	        update	    Update a specific student in the database
//     DELETE	    /students/{id}	        destroy	    Delete a specific student

Route::resource('/teachers', TeacherController::class); //This single line creates multiple routes that map to the typical CRUD operations

Route::resource('/courses', CourseController::class);

Route::resource('/batches', BatchController::class);

