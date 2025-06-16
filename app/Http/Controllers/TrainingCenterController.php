<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    // public function index()
    // {
    //     $training_centers = TrainingCenter::all();
    //     return view('training_center.index', compact('training_centers'));
    // }

    public function index(){
        $training_centers=TrainingCenter::included()->filter()->get();
        return response()->json($training_centers);
    }
}
