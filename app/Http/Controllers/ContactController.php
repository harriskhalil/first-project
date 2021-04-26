<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function show(){
        return view('contact');
    }
    function store(){
        \request()->validate([
            'email'=>'required|email'
        ]);
        //$email = \request('email');
//        Mail::raw('noice',function ($message){
//            $message->to(\request('email'))
//            ->subject('now i am getting it a bit');
//        });
        Mail::to(\request('email'))
        ->send(new ContactMe('HTML'));
        return redirect('/contact')->with('message','Email Sent');
    }
}
