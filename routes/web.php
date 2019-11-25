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


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/events', function () {
    return view('holiday&events');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/who', function () {
    return view('who');
});


Route::resource('/photos', 'PhotoController');
Route::resource('/videos', 'VideoController');

//tester
Route::get('/modal', function () {return view('modal');
});
    

Auth::routes();

Route::get('/lk', 'HomeController@index')->name('home');
