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

Auth::routes();

Route::get('/', 'AdvertController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/advert/create', 'AdvertController@create');
    Route::post('/advert/add', 'AdvertController@add');
});