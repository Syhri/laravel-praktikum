<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// majors

Route::resource('majors', MajorController::class);
// Route::get('/majors', [MajorController::class, 'index'])->name('majors.index'); 
// Route::get('/majors/create', [MajorController::class, 'create'])->name('majors.create');
// Route::get('/majors/{id}', [MajorController::class, 'show'])->name('majors.show');
// Route::get('/majors/{id}/edit', [MajorController::class, 'edit'])->name('majors.edit');