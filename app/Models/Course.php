<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey = 'course_code'; // This will make 'course_code' the primary key
    public $incrementing = false; // Since course_code is a string, disable auto-increment
    protected $keyType = 'string'; // Set the primary key type to string

    protected $fillable = ['course_code', 'name', 'syllabus', 'duration'];

     // Boot method to handle course code generation
     protected static function boot()
     {
         parent::boot();

         static::creating(function ($course) {
             $latestCourse = static::orderBy('course_code', 'desc')->first();

             if (!$latestCourse) {
                 $course->course_code = 'C001';
             } else {
                 $lastNumber = (int)substr($latestCourse->course_code, 1);
                 $course->course_code = 'C' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
             }
         });
     }

}
