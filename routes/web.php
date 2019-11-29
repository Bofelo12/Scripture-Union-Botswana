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
Route::get('/loadMessages',function(){
    return view('messages.home');
});

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

Route::get('/messages', ['as' => 'messages', 'uses' => 'MessagesController@index']);
Route::get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('/messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('/messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::put('/messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('{id}/destroy', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

Route::get('/blogs', 'BlogController@index');
Route::get('/blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);


Route::resource('/photos', 'PhotoController');
Route::resource('/files', 'FilesController');
Route::get('/events', 'EventController@index')->name('events');
Route::get('/eventsCalendar', 'EventController@eventsCalendar')->name('eventsCalendar');
Route::get('/events/edit/{id}', 'EventController@edit')->name('editEvent');
Route::post('/events', 'EventController@index')->name('eventMenu');
Route::post('/eventCreate', 'EventController@create');
Route::resource('/event', 'EventController')->except(
    'index', 'create'
);



//tester
Route::get('/modal', function () {return view('modal');
});
    

Auth::routes();

Route::get('/lk', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
