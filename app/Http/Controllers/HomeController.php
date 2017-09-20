<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Callery;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Mail;
use Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add()
    {
      return view('add');
    }

    protected function createhome(Request $request) {
     $rules = array(
             'category' => 'required|max:200',
             'type' => 'required|max:200',
             'price' => 'required|max:200',
             'description' => 'required|max:1000',
             'address' => 'required|max:100',
             'town' => 'required|max:200',
             'size' => 'required|max:100',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         );

         $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

       // get the error messages from the validator
       $messages = $validator->messages();

       // redirect our user back to the form with the errors from the validator
       return Redirect::to('/add-form')
           ->withErrors($validator);

    } else {
       // validation successful ---------------------------

       // report has passed all tests!
       // let him enter the database

       // create the data for report
       $property= new Property;
       $property->category     = Input::get('category');
       $property->type     = Input::get('type');
       $property->street     = Input::get('address');
       $property->town     = Input::get('town');
       $property->location     = Input::get('location');
       $property->price     = Input::get('price');
       $property->bed    = Input::get('bed');
       $property->bath     = Input::get('bath');
       $property->parking     = Input::get('parking');
       $property->size     = Input::get('size');
       $property->status     = 'pending';
       $property->description     = Input::get('description');
       $property->user_id     = Auth::user()->id;

              $image = $request->file('image');
               $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
               $s3 = \Storage::disk('s3');
               $filePath = '/nzuri/' . $imageName;
               $s3->put($filePath, file_get_contents($image), 'public');
        $property->image = $filePath;
        $property->save();


          $imag = new Callery();
          $imag->property_id = $property->id;
          $imag->image = $filePath;
          $imag->save();

       // save report


       // redirect ----------------------------------------
       // redirect our user back to the form so they can do it all over again
       return Redirect::to('/property');
     }

    }

  protected function property($id)
  {
    $name = Property::find($id);
    return view('property')->with('property', $name);
  }


  }
