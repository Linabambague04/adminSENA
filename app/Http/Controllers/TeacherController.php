<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // public function index()
    // {
    // $teachers = Teacher::all();
    // return view('teacher.index', compact('teachers'));
    // }

    public function index(){
        $teachers=Teacher::included()->filter()->get();
        return response()->json($teachers);
    }
}
