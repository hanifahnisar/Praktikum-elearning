<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampilkan halaman student
Route::get('admin/student', [StudentController::class, 'index']);

// Route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'index']);
// Route untuk menampilkan halaman courses
Route::get('admin/courses', [CoursesController::class, 'index'] );


Route::get('/profile', function(){
    return view('profile');
});

