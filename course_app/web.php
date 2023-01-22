<?php

use Illuminate\Support\Facades\Route;
use CourseApp\Controllers\CourseController;
use CourseApp\ProtectionLayer\CheckCapacityOfCourse;

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::put('courses/{id}', [CourseController::class, 'update'])
    ->middleware(CheckCapacityOfCourse::class)
    ->name('courses.update');
