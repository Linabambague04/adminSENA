<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    // public function index()
    // {
    //     $areas = Area::all();
    //     return view('area.index', compact('areas'));
    // }

    public function index(){
        $areas=Area::included()->filter()->get();
        return response()->json($areas);
    }
}
