<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTeacher;

class CourseTeacherController extends Controller
{
    public function index()
    {
        $course_teachers = CourseTeacher::all();
        return view('course_teacher.index', compact('course_teachers'));
    }
}
