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
Route::get('/','BlogController@loadWelcome');

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/gallery','GalleryController@index');
Route::get('/gShow','GalleryController@showGallery')->name('gShow');
Route::post('/gShow','GalleryController@showGallery')->name('gShow');

Route::get('/messages', ['as' => 'messages', 'uses' => 'MessagesController@index']);
Route::get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('/messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('/messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::put('/messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('{id}/destroy', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

Route::get('/vendor/voyager/gravy','EventController@gravy');
Route::get('/blogs', 'BlogController@index');
Route::get('/blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);


Route::resource('/photos', 'PhotoController');
Route::resource('/files', 'FilesController');
Route::get('/loadEvents', 'EventController@loadEvents')->name('loadEvents');
Route::get('/addEvent', 'EventController@create')->name('addEvent');
Route::get('/eventsCalendar', 'EventController@eventsCalendar')->name('eventsCalendar');
Route::get('/events_calendar','EventController@eventsCalendarFE');
Route::get('/eventsIndex','EventController@eventsFE');


Route::get('/events/edit/{id}', 'EventController@edit')->name('editEvent');
Route::get('/events', 'EventController@index')->name('eventMenu');
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
