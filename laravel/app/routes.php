<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// The student resource run ./artisan routes to see what 
// routes this makes.
Route::resource('student', 'StudentsController');
Route::get('student/dash', 'StudentsController@dash');

// index.html
Route::get('/', function()
{
	return View::make('static.index');
});

// contact.html
Route::get('contact', function()
{
    return View::make('static.contact');
});

// register.html
Route::get('register', function()
{
    return Redirect::to('student/create');
});

// sign-in.html
Route::get('login', function()
{
    return View::make('static.login');
});

// counselor.html
Route::get('counselor', function()
{
    return View::make('static.counselor');
});

// student.html
Route::get('student', function()
{
    return View::make('static.student');
});

// uni.html
Route::get('university', function()
{
    return View::make('static.university');
});

// terms.html
Route::get('terms', function()
{
    return View::make('static.terms');
});
