<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail as Mail;

class MailController extends Controller
{
    public function index(){

        return view('admin.contact.reply-contact');
    }

    public function store(Request $request)
    {
        $mailData = [
            'greeting' => 'required',
            'body' => 'required',
            'endtext' => 'required',
        ];
        $data = new sendMail($mailData);
        $send = Mail::to(auth()->user()->email)->send($data);
        if($send){
            $notification=array(
                'message' => 'Successfully Answer',
                'alert-type' => 'success'
            );
              return redirect()->route('home')->with($notification);
        }
        else{
               $notification=array(
                   'message' => 'Something is wrong, please try again!',
                   'alert-type' => 'error'
                 );
                 return redirect()->route('mail.index')->with($notification);
        }
    }
}
