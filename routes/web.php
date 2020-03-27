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
    return view('welcome');
});

Route::get('sintomas', function () {
    return view('sintomas');
});

Route::get('prevencion', function () {
    return view('prevencion');
});

Route::get('tipos', function () {
    return view('tipos');
});

Route::get('informacion', function () {
    return view('informacion');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
