<?php
namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Callery;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Storage;
use Searchy;
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

$this->get('/', function () {
    return view('welcome');
});

$this->get('/properties', function () {
  $name = Property::get();
    return view('properties')->with('properties', $name);
});

$this->get('/property', function () {
    return view('property');
});

$this->auth();

$this->get('/home', 'HomeController@index');
$this->get('/add-form', 'HomeController@add');
$this->post('/add', 'HomeController@createhome');
