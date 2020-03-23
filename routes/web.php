<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Registrations
Route::get('/registration', 'RegistrationController@index');
Route::get('/registration/show/{id}', 'RegistrationController@show');
Route::get('/registration/create', 'RegistrationController@create');
Route::post('/registration/create', 'RegistrationController@store');
Route::get('/registration/edit/{id}', 'RegistrationController@edit');
Route::post('/registration/update/{id}', 'RegistrationController@update');
Route::post('/registration/remove/{id}', 'RegistrationController@destroy');

// Students
Route::get('/student', 'StudentController@index');
Route::get('/student/show/{id}', 'StudentController@show');
Route::get('/student/create', 'StudentController@create');
Route::post('/student/create', 'StudentController@store');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::post('/student/update/{id}', 'StudentController@update');
Route::post('/student/remove/{id}', 'StudentController@destroy');

// Curse 
Route::get('/curse', 'CurseController@index');
Route::get('/curse/show/{id}', 'CurseController@show');
Route::get('/curse/create', 'CurseController@create');
Route::post('/curse/create', 'CurseController@store');
Route::get('/curse/edit/{id}', 'CurseController@edit');
Route::post('/curse/update/{id}', 'CurseController@update');
Route::post('/curse/remove/{id}', 'CurseController@destroy');

// Instructors
Route::get('/instructor', 'InstructorController@index');
Route::get('/instructor/show/{id}', 'InstructorController@show');
Route::get('/instructor/create', 'InstructorController@create');
Route::post('/instructor/create', 'InstructorController@store');
Route::get('/instructor/edit/{id}', 'InstructorController@edit');
Route::post('/instructor/update/{id}', 'InstructorController@update');
Route::post('/instructor/remove/{id}', 'InstructorController@destroy');


