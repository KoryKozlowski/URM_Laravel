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

// index.html
Route::get('/', function()
{
	return View::make('index');
});

// contact.html
Route::get('contact', function()
{
    return View::make('contact');
});

// register.html
Route::get('register', function()
{
    return View::make('register');
});

// sign-in.html
Route::get('login', function()
{
    return View::make('login');
});

// counselor.html
Route::get('counselor', function()
{
    return View::make('counselor');
});

// student.html
Route::get('student', function()
{
    return View::make('student');
});

// uni.html
Route::get('university', function()
{
    return View::make('university');
});

// terms.html
Route::get('terms', function()
{
    return View::make('terms');
});
