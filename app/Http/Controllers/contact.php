<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class contact extends Controller
{
    public function send (Request $request){
        
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',
                'subject'=>'required'
            ]
            );
            $contact = [
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
                'subject'=>$request->subject
            ];
           // Mail::to($email)->send(new contactMail)
         Mail::to('maramdrira13@gmail.com')->send(new contactMail($contact));
          //  Mail::to('chema@gmail.com')->send(new contactMail ($request))->subject('Rendez vous dr Chema');
             return redirect()->to('/#contactForm');
    }
    } 
}
