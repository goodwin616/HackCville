<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home route
Route::get('/', function () {
    return view('home');
});

// About route
Route::get('/about', function () {
    return view('about');
});

// Events route
Route::get('/events', function () {
    return view('events');
});

// News route
Route::get('/news', function () {
    return view('news');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// Join route
Route::get('/join', function () {
    return view('join');
});

// Login route
Route::get('/login', function () {
    return view('login');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
