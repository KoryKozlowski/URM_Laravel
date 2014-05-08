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
Route::get('student/dash', array('before' => 'auth|student', 'uses' => 'StudentsController@dash'));
Route::get('student/show', array('before' => 'auth|student', 'uses' => 'StudentsController@show'));
Route::get('student/edit', array('before' => 'auth|student', 'uses' => 'StudentsController@edit'));
Route::resource('student', 'StudentsController');


// User routes
Route::get('password', array('before' => 'auth', 'uses' => 'UsersController@password'));
Route::get('dashboard', array('before' => 'auth', 'uses' => 'UsersController@dashboard'));
// Authentication
Route::post('login', 'SessionsController@store');
Route::get('login', 'SessionsController@create');
Route::get('logout', array('before' => 'auth', 'uses' => 'SessionsController@destroy'));

// index.html
Route::get('/', function()
{
	return View::make('static.index');
});

Route::get('about', function()
{
  return View::make('static.about');
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
