<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Mail\ContactMessageAdmin;

class ContactController extends Controller
{
     #send contact us message
     public function SendMessage(Request $request){

        try{
          
                $username=$request->name;
                $useremail=$request->email;
                $message=$request->message;
               
                #notify the user and other admins connected
                Mail::to($useremail)->send(new ContactMessage($username));
                Mail::to("info@therealtorscircle.com")->send(new ContactMessageAdmin($username,$useremail,$message));

                return response()->json(['message' => '100'], 200);
           
        }
        catch(\Throwable $g){

            return response()->json(['message' => $g->getMessage()], 200);
        }
         
    }

}
