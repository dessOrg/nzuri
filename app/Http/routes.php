<?php
namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Callery;
use App\Banner;
use App\Category;
use App\Inquiry;
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
    $name = Property::orderBy('created_at', 'desc')->limit(3)->get();
    $banner = Banner::where('name','=','about')->get();
    return view('welcome')->with('properties', $name)->with('banners', $banner);
});

$this->get('/properties', function () {
  $name = Property::get();
  $cat = Category::get();
    return view('properties')->with('properties', $name)->with('categories', $cat);
});

$this->get('/forsale', function () {
  $name = Property::where('type','=','Sale')->get();
  $cat = Category::get();
    return view('properties')->with('properties', $name)->with('categories', $cat);
});

$this->get('/forrent', function () {
  $name = Property::where('type','=','Rent')->get();
  $cat = Category::get();
    return view('properties')->with('properties', $name)->with('categories', $cat);
});

$this->post('/search', function () {
  $type = Input::get('type');
  $cat = Input::get('category');
  $categories = Category::get();
  $name = Property::where('type','=',$type)->where('category','=',$cat)->get();
    return view('properties')->with('properties', $name)->with('categories', $categories);
});

$this->get('/property{id}', function($id){

    $name = Property::find($id);
    $images = Callery::where("property_id", "=",$id)->get();
    return view('property')->with('property', $name)->with('images', $images);
});

$this->post('/sendFavorite{id}', 'EmailController@sendFavorite');

$this->auth();

$this->get('/home', 'HomeController@index');
$this->get('/users', 'HomeController@users');
$this->get('/makeadmin{id}', 'HomeController@makeadmin');
$this->get('/add-form', 'HomeController@add');
$this->post('/add', 'HomeController@createhome');
$this->get('/delHome{id}', 'HomeController@delHome');
$this->get('/update{id}', 'HomeController@loadhome');
$this->post('/update{id}', 'HomeController@updatehome');
$this->get('/image{id}', 'HomeController@loadimage');
$this->post('/image{id}', 'HomeController@addimage');
$this->get('/delimage{id}/{p_id}', 'HomeController@delimage');
$this->post('/category', 'HomeController@createcategory');
$this->get('/categories', 'HomeController@categories');
$this->get('/delCategory{id}', 'HomeController@delCategory');
$this->get('/loadbanner', 'HomeController@loadbanner');
$this->post('/createbanner', 'HomeController@createbanner');
$this->get('/delbanner{id}', 'HomeController@delbanner');
$this->get('/favorites', 'HomeController@favorites');
$this->get('/recFav{id}', 'HomeController@recFav');
$this->get('/delFav{id}', 'HomeController@delFav');
