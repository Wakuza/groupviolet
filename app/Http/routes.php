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

Route::get('/', function () {
    return view('index');
});

// Catch all undefined routes. Always gotta stay at the bottom since order of routes matters.
Route::any('{undefinedRoute}', function ($undefinedRoute) {
    return view('index');
})->where('undefinedRoute', '([A-z\d-\/_.]+)?');