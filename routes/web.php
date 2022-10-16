<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('groups', [GroupController::class, 'index'])->name('groups.index');
    Route::resource('groups', GroupController::class);

    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::resource('courses', CourseController::class);

    Route::get('lectures', [LectureController::class, 'index'])->name('lectures.index');
    Route::resource('lectures', LectureController::class);

    Route::get('files', [FileController::class, 'index'])->name('files.index');
    Route::resource('files', FileController::class);

    Route::get('/group/students/{user_id}',[GroupController::class, 'groupStudents'])
        ->name('group.students');

    Route::get('/group/lectures/{group_id}',[LectureController::class, 'groupLectures'])
        ->name('group.lectures');

    Route::get('/lecture/files/{lecture_id}',[FileController::class, 'lectureFiles'])
        ->name('lecture.files');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



