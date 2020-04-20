<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Client;
use App\Mail\ClientContacted;

class ClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate
            ([
                'name'=>'required|string|min:4',
                'email'=>'required|email',
                'subject'=>'required|string|min:8|max:100',
                'message'=>'required|string|min:10|max:2000'
            ]);
        $client = new Client;
        $client->name = request('name');
        $client->email = request('email');
        $client->subject = request('subject');
        $client->message = request('message');

        Mail::to([
            'email1@example.com',
            'email2@example.com'
        ])->send(new ClientContacted($client));

        return response()->json("Message sent ! We'll contact you soon.");
    }
}
