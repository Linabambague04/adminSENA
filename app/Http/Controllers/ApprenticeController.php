<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
    // public function index()
    // {
    //     $apprentices = Apprentice::all();
    //     return view('apprentice.index', compact('apprentices'));
    // }

    public function index(){
        $apprentices=Apprentice::included()->filter()->get();
        return response()->json($apprentices);
    }
}
