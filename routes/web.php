<?php

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
    return 'login';
});

Route::get('/listStudents', 'StudentController@listStudentsByID');

Route::get('/createCourse', 'CourseController@createCourse');

Route::get('/editCourse', 'CourseController@editCourse');

Route::get('/deleteCourse', 'CourseController@deleteCourse');

Route::get('/createStudent', 'StudentController@createStudent');

Route::get('/editStudent', 'StudentController@editStudent');

Route::get('/deleteStudent', 'StudentController@deleteStudent');

Route::get('/importCourse', 'ImportCourseController@importCourse');
