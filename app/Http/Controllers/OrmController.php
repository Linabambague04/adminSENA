<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas()
    {
        $apprenitce = Apprentice::find(1002);
        return $apprenitce->computer;

        $courses = Course::with('teachers')->get();
        return $courses;

        $courses = Course::find(101);
        return $courses->trainingCenter;

        return Apprentice::with([
            'course.area',
            'course.trainingCenter',
            'computer',
            'course.teachers.area',
            'course.teachers.trainingCenter'
        ])->get();

        return Course::with([
            'apprentices', 
            'area', 
            'trainingCenter', 
            'teachers'
        ])->get();

        return Teacher::with([
            'courses', 
            'area', 
            'trainingCenter'
        ])->get();

        return Area::with([
            'teachers', 
            'courses'
        ])->get();

        return TrainingCenter::with([
            'teachers', 
            'courses'
        ])->get();
    }
}