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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //profile
    Route::get('profile', 'ProfileController@index');

    Route::get('profile_edit/{id}', 'ProfileController@edit');
    Route::post('profile_edit/{id}', 'ProfileController@save');
    Route::get('profile_delete/{id}', 'ProfileController@delete');

    Route::get('profile_import_excel', 'ProfileController@import_excel');
    Route::post('profile_import_excel', 'ProfileController@import_excel');

    //student
    Route::get('student', 'StudentController@index');

    Route::get('student_edit/{id}', 'StudentController@edit');
    Route::post('student_edit/{id}', 'StudentController@save');
    Route::get('student_delete/{id}', 'StudentController@delete');

    //user
    Route::get('user', 'UserController@index');

    Route::get('user_edit/{id}', 'UserController@edit');
    Route::post('user_edit/{id}', 'UserController@save');
    Route::get('user_delete/{id}', 'UserController@delete');


    //department
    Route::get('department', 'DepartmentController@index');

    Route::get('department_edit/{id}', 'DepartmentController@edit');
    Route::post('department_edit/{id}', 'DepartmentController@save');
    Route::get('department_delete/{id}', 'DepartmentController@delete');

    //program
    Route::get('program', 'ProgramController@index');

    Route::get('program_edit/{id}', 'ProgramController@edit');
    Route::post('program_edit/{id}', 'ProgramController@save');
    Route::get('program_delete/{id}', 'ProgramController@delete');

    //major
    Route::get('major', 'MajorController@index');

    Route::get('major_edit/{id}', 'MajorController@edit');
    Route::post('major_edit/{id}', 'MajorController@save');
    Route::get('major_delete/{id}', 'MajorController@delete');

    //major
    Route::get('course', 'CourseController@index');

    Route::get('course_edit/{id}', 'CourseController@edit');
    // Only for dependent selection
    Route::get('year_to_major', 'CourseController@findMajor')->name('year_to_major');

    Route::post('course_edit/{id}', 'CourseController@save');
    Route::get('course_delete/{id}', 'CourseController@delete');


    //year
    Route::get('year', 'YearController@index');

    Route::get('year_edit/{id}', 'YearController@edit');
    Route::post('year_edit/{id}', 'YearController@save');
    Route::get('year_delete/{id}', 'YearController@delete');
});
