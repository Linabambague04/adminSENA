<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseTeacherController;

Route::get('ormconsultas',[OrmController::class,'consultas']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('teacher', [TeacherController::class, 'index']);
Route::get('course', [CourseController::class, 'index']);
Route::get('apprentice', [ApprenticeController::class, 'index']);
Route::get('area', [AreaController::class, 'index']);
Route::get('computer', [ComputerController::class, 'index']);
Route::get('training_center', [TrainingCenterController::class, 'index']);
Route::get('course_teacher', [CourseTeacherController::class, 'index']);

Route::get('computer', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{id}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');
