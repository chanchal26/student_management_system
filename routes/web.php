<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-student', [App\Http\Controllers\StudentController::class, 'createStudent'])->name('create_student');
Route::post('/store-student', [App\Http\Controllers\StudentController::class, 'storeStudent'])->name('store_student');
Route::get('/student-list', [App\Http\Controllers\StudentController::class, 'studentList'])->name('student_list');
Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'deleteStudent'])->name('delete_student');
Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'editStudent'])->name('edit_student');
Route::post('/update-student/{id}', [App\Http\Controllers\StudentController::class, 'updateStudent'])->name('update_student');
Route::get('/add-edu/{id}',[App\Http\Controllers\EducationController::class, 'EducationForm'])->name('add_edu');
Route::post('add-edu/store-edu',[App\Http\Controllers\EducationController::class, 'StoreEducation'])->name('store_edu');
Route::get('add-edu/edu-edit/{id}',[App\Http\Controllers\EducationController::class, 'EditEducation'])->name('edit_edu');
Route::get('add-edu/edu-delete/{id}',[App\Http\Controllers\EducationController::class, 'DeleteEducation'])->name('delete_edu');
Route::post('store-updated-edu/{id}',[App\Http\Controllers\EducationController::class, 'StoreUpdatedEducation'])->name('store_updated_edu');

