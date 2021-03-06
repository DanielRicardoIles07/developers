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

Route::get('', function () {
    return view('welcome');
});


Route::get('/babbler/template', function () {
    return view('babbler_template');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('babblers/complete/information', 'DevelopersEditController');
Route::resource('developers/', 'DevelopersController');




