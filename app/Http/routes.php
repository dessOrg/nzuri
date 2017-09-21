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
    $name = Property::get();
    return view('welcome')->with('properties', $name);
});

$this->get('/properties', function () {
  $name = Property::get();
    return view('properties')->with('properties', $name);
});

$this->get('/property{id}', function($id){

    $name = Property::find($id);
    $images = Callery::where("property_id", "=",$id)->get();
    return view('property')->with('property', $name)->with('images', $images);
});

$this->auth();

$this->get('/home', 'HomeController@index');
$this->get('/add-form', 'HomeController@add');
$this->post('/add', 'HomeController@createhome');
$this->get('/image{id}', 'HomeController@loadimage');
$this->post('/image{id}', 'HomeController@addimage');
$this->get('/delimage{id}/{p_id}', 'HomeController@delimage');
$this->post('/category', 'HomeController@createcategory');
$this->get('/categories', 'HomeController@categories');
$this->get('/delCategory{id}', 'HomeController@delCategoy');
