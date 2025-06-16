<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('apprentices', [ApprenticeController::class,'index'])->name('api.v1.apprentices.index');
Route::get('areas', [AreaController::class,'index'])->name('api.v1.areas.index');
Route::get('computers', [ComputerController::class,'index'])->name('api.v1.computers.index');
Route::get('courses', [CourseController::class,'index'])->name('api.v1.courses.index');
Route::get('teachers', [TeacherController::class,'index'])->name('api.v1.teachers.index');
Route::get('training_centers', [TrainingCenterController::class,'index'])->name('api.v1.training_centers.index');
