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

class EmailController extends Controller
{
    

     public function sendFavorite(Request $request, $id)
    {
        $title = Input::get('code ');
        $content = Input::get('content');
        $sender_email = Input::get('email');
        $sender_phone = Input::get('phone');
        $property_id =  $id;
        $name = Input::get('name');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from($sender_email, $name);

            $message->to('info@atlantichomez.com');

        });

        $favorite = new Favorite;
        $favorite->sender_name = $sender_name; 
        $favorite->sender_email = $sender_email;
        $favorite->sender_phone = $sender_phone;
        $favorite->property_id = $property_id;
        $favorite->code = $title;
        $favorite->content = $content;
        $favorite->save();

               // redirect ----------------------------------------
       // redirect our user back to the form so they can do it all over again
       return Redirect::to('/property'.$property_id);
    }
}
