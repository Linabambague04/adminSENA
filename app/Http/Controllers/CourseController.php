<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // public function index()
    // {
    //     $courses = Course::all();
    //     return view('course.index', compact('courses'));
    // }

    public function index(){
        $courses=Course::included()->filter()->get();
        return response()->json($courses);
    }
}
