<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// GET
Route::get('/events', 'EventsController@getEvents');
Route::get('/events/{id}', 'EventsController@getEventById')->where('id','[0-9]+');

// POST
Route::post('/add', 'EventsController@addEvent');
