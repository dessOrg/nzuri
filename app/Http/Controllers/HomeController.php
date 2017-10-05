<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Callery;
use App\Category;
use App\Banner;
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

    public function users()
    {
      $name = User::get();
      return view('users')->with('users', $name);
    }

     protected function makeadmin($id) {

       $user_obj = new User();
       $user_obj->id = $id;
       $user = User::find($user_obj->id); // Eloquent Model
       if($user->role == 'Admin'){
         $user->update(['role' => "normal" ]);
       }
       elseif($user->role == 'normal'){

         $user->update(['role' => "Admin" ]);
       }      

       return Redirect::to('/users');
     }

    public function add()
    {
      $name = Category::get();
      return view('add')->with('categories', $name);
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
       $cod_s = str_random(3);
       $cod_m = str_random(3);
       $cod_e = str_random(4);
       $code = $cod_s.$cod_m.$cod_e;
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
       $property->code     = $code;

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
       return Redirect::to('/property'.$property->id);
     }

    }

  public function loadhome($id)
  {

    $post = Property::find($id);
    $name = Category::get();
    return view('/update')->with('property', $post)->with('categories', $name);
  }

protected function updatehome(Request $request, $id) {
 $rules = array(

         'price' => 'required|max:200',
         'description' => 'required|max:300',
         'address' => 'required|max:100',
         'town' => 'required|max:200',
         'size' => 'required|max:100',
     );

     $validator = Validator::make(Input::all(), $rules);

// check if the validator failed -----------------------
if ($validator->fails()) {

   // get the error messages from the validator
   $messages = $validator->messages();

   // redirect our user back to the form with the errors from the validator
   return Redirect::to('/update'.$id)
       ->withErrors($validator);

} else {
   // validation successful ---------------------------

   // report has passed all tests!
   // let him enter the database

   // create the data for report

   $street     = Input::get('address');
   $bed     = Input::get('bed');
   $bath     = Input::get('bath');
   $parking     = Input::get('parking');;
   $town     = Input::get('town');
   $location     = Input::get('location');
   $price     = Input::get('price');
   $size     = Input::get('size');
   $category     = Input::get('category');
   $type    = Input::get('type');
   $description     = Input::get('description');

      $prop_obj = new Property();
      $prop_obj->id = $id;
      $prop = Property::find($prop_obj->id); // Eloquent Model
      $prop->update(['street' => $street, 'bed' => $bed, 'bath' => $bath, 'parking' => $parking, 'town' => $town, 'location' => $location, 'price' => $price, 'size' => $size, 'description' => $description, 'type' => $type, 'category' => $category ]);

   // save report


   // redirect ----------------------------------------
   // redirect our user back to the form so they can do it all over again
   return Redirect::to('/property'.$id);
 }

}

  public function loadimage($id)
  {

    $hit = Property::find($id);
    $post = Callery::where('property_id','=',$id)->get();
    return view('/image')->with('images', $post)->with('property', $hit);
  }


 protected function addimage(Request $request, $id) {
  $rules = array(
'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      );

      $validator = Validator::make(Input::all(), $rules);

 // check if the validator failed -----------------------
 if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('/image'.$id)
        ->withErrors($validator);

 } else {
    // validation successful ---------------------------

    // report has passed all tests!
    // let him enter the database

    // create the data for report
    $imag= new Callery;
    $imag->property_id = $id;

    $image = $request->file('file');
     $imageName = time().'.'.$request->file('file')->getClientOriginalExtension();
     $s3 = \Storage::disk('s3');
     $filePath = '/nzuri/' . $imageName;
     $s3->put($filePath, file_get_contents($image), 'public');

     $imag->image     = $filePath;
     $imag->save();

    // save report


    // redirect ----------------------------------------
    // redirect our user back to the form so they can do it all over again
    return Redirect::to('/image'.$id);
  }

 }

  protected function delimage($id, $p_id) {

    $hit = Callery::find($id);
    $hit->delete();
    return Redirect::to('/image'.$p_id);
  }

  public function categories()
  {
    $name = Category::get();
    return view('categories')->with('categories', $name);
  }

  protected function createcategory(Request $request)
     {

      $rules = array(
              'title' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/categories')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $category = new Category;
        $category->title     = Input::get('title');

        // save report
        $category->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/categories');

     }
   }

    protected function delCategory($id) {

      $hit = Category::find($id);
      $hit->delete();
      return Redirect::to('/categories');
    }

    public function loadbanner()
    {
      $name = Banner::get();
      return view('banners.create')->with('banners', $name);
    }

    protected function createbanner(Request $request)
       {

        $rules = array(
                'title' => 'required|max:100',
                'content' => 'required|min:10|max:2000',
                'name' => 'required|max:100|unique:banners'
            );

            $validator = Validator::make(Input::all(), $rules);

      // check if the validator failed -----------------------
      if ($validator->fails()) {

          // get the error messages from the validator
          $messages = $validator->messages();

          // redirect our user back to the form with the errors from the validator
          return Redirect::to('/loadbanner')
              ->withErrors($validator);

      } else {
          // validation successful ---------------------------

          // report has passed all tests!
          // let him enter the database

          // create the data for report
          $banner = new Banner;
          $banner->title     = Input::get('title');
          $banner->name     = Input::get('name');
          $banner->content     = Input::get('content');

          // save report
          $banner->save();

          // redirect ----------------------------------------
          // redirect our user back to the form so they can do it all over again
          return Redirect::to('/loadbanner');

       }
     }

      protected function delbanner($id) {

        $hit = Banner::find($id);
        $hit->delete();
        return Redirect::to('/loadbanner');
      }






  }
