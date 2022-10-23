<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        return view('site.pages.contact');
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'nullable',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'nullable',
        ]);
        Contact::create($attributes);


        //  Send mail to admin
//        Mail::send('mail', $attributes, function($message) use ($attributes) {
//            $message->from($attributes['email']);
//            $message->to('robertnicjoo@outlook.com');
//            $message->subject($attributes['product']);
//        });



        return back()->with('message','your message sent');
    }
}
