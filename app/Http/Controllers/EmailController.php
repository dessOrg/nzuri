<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Property;
use App\Callery;
use App\Category;
use App\Banner;
use App\Favorite;
use Mail;
use Storage;
use Searchy;

class EmailController extends Controller
{


     public function sendFavorite(Request $request, $id)
    {
        $title = Input::get('code ');
        $content = Input::get('content');
        $sender_name = Input::get('name');
        $sender_email = Input::get('email');
        $sender_phone = Input::get('phone');
        $property_id =  $id;
        $name = Input::get('name');
        $status = "pending";

        // Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) use ($sender_email, $name)
        // {
        //
        //     $message->from($sender_email, $name);
        //
        //     $message->to('info@atlantichomez.com');
        //
        // });

        $favorite = new Favorite;
        $favorite->sender_name = $sender_name;
        $favorite->sender_email = $sender_email;
        $favorite->sender_phone = $sender_phone;
        $favorite->property_id = $property_id;
        $favorite->code = $title;
        $favorite->content = $content;
        $favorite->status = $status;
        $favorite->save();

               // redirect ----------------------------------------
       // redirect our user back to the form so they can do it all over again
       return Redirect::to('/property'.$property_id);
    }
}
