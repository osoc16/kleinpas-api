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

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');

Route::get('/', function () { return view('welcome'); });

// Overview
Route::get('/overview', function() { return view('overview'); });

// GET
Route::get('/events', 'EventsController@getEvents');
Route::get('/events/{id}', 'EventsController@getEventById')->where('id','[0-9]+');

// POST
Route::post('/add', 'EventsController@addEvent');
