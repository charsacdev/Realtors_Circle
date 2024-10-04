<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaitlistRealtorCircle;
use Spatie\Newsletter\Facades\Newsletter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use MailchimpMarketing\ApiClient;

class JoinWaitListController extends Controller
{
    
    public function submitForm(Request $request)
    {
        try{

             // Validate the form inputs
                $request->validate([
                    'fname' => 'required|string|max:255',
                    'lname' => 'required|string|max:255',
                    'email' => 'required|email',
                    'phone' => 'required|string|max:15',
                    'type'=>'required',
                    'challenges' => 'required|string',
                    'expectation' => 'required|string',
                ]);

                // Create a new record in the database
                WaitlistRealtorCircle::create([
                    'first_name' => $request->fname,
                    'last_name' => $request->lname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'type'=>$request->type,
                    'challenges' => $request->challenges,
                    'expectation' => $request->expectation,
                ]);

                $apiKey = env('NEWSLETTER_API_KEY');
                $client = new ApiClient();
                $client->setConfig([
                'apiKey' => $apiKey,
                'server' => 'us10', 
                ]);
           

                $listId = env('NEWSLETTER_LIST_ID');
                $subscriber_hash = md5(strtolower($request->email));

                try {
                        $response = $client->lists->setListMember($listId,$subscriber_hash, [
                            "email_address" => $request->email,
                            "status_if_new" => "subscribed",
                        ]);
                        
                        $response = $client->lists->updateListMemberTags($listId,$subscriber_hash, [
                            "tags" => [
                                ["name" => "Waitlist", "status" => "active"],
                            ],
                        ]);

                    } 
                    catch (MailchimpMarketing\ApiException $e) {
                        #echo $e->getMessage();
                    }

            // Redirect or return a response
            return response()->json(['message' => '100'], 200);
        }
        catch(\Throwable $g){

            return response()->json(['message' => '500'], 200);
        }
       
    }
}
