<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    

     public function sendFavorite(Request $request $id)
    {
        $title = $request->input('code ');
        $content = $request->input('content');
        $sender_email = $request->input('email');
        $sender_phone = $request->input('phone');
        $property_id =  $id;
        $name = $request->input('name');

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
