<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// Route for 'Course'
Route::resource('course', CourseController::class);

// Route for 'Students'
Route::resource('student', StudentController::class);

Route::get('student/filter/{id}', [StudentController::class, 'getCourses'])->name('getCourses');
