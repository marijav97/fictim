<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends OsnovniController
{
    public function index(){
        return view('pages.main.contact',$this->data);
    }
    public function sendEmail(Request $request){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|max:255',
            'content'=>'required'
        ]);
        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
        ];
        Mail::send('emails.contact.contact-form', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}

