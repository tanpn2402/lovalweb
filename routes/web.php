<?php

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
    return View::make('layout.main');
});


Route::get('home', function () {
    return View::make('layout.home');
});

Route::get('project', function(){
	return View::make('layout.project');
});

Route::get('signin', function(){
	return View::make('function.signin');
});

Route::get('signup', function(){
	return View::make('function.signup');
});

