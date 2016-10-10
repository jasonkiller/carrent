<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
	return view('admin.base.base');
});

// Route::get('', function () {
// 	return view('');
// });

Route::get('/abc', function () {
	return view('youhui');
});

Route::get('/login', function () {
	return view('admin.login.login');
});