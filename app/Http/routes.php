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

Route::get('/properties', function () {
    return view('properties');
});

Route::get('/property', function () {
    return view('property');
});

$this::auth();

$this::get('/home', 'HomeController@index');
$this::get('/add-form', 'HomeController@add');
