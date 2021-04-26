<?php

namespace App\Http\Controllers;

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
        Mail::raw('it works',function ($message){
            $message->to(\request('email'))
            ->subject('hello there');
        });
        return redirect('/contact')->with('message','Email Sent');
    }
}
