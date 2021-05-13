<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'HomeController@events')->name('events');
Route::get('/events/create', 'HomeController@new_event')->name('new_event');
Route::post('/events/create', 'HomeController@store_event')->name('store_event');
