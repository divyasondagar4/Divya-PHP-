<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Home Page
Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::resource('teachers', TeacherController::class);

Route::resource('clubs', ClubController::class);

Route::resource('books', BookController::class);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::post('/students/ajax-store', [StudentController::class, 'ajaxStore'])->name('students.ajaxStore');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::resource('teachers', TeacherController::class);
Route::resource('clubs', ClubController::class);
Route::resource('books', BookController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('/students/ajax-store', [StudentController::class, 'ajaxStore'])->name('students.ajaxStore');
Route::post('/students/ajax-store', [StudentController::class, 'ajaxStore'])->name('students.ajaxStore');
