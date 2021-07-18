<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('findRuleWithCategoryId/{id}','ScoreController@findRuleWithCategoryId');
    Route::resource('events', EventController::class);
    Route::resource('score', ScoreController::class);
});


