<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as DB;

class ContactUsController extends Controller
{
    

    public function create()
    {  
        return view('user.contact-us');
    }
    public function read()
    {  
        return view('user.mail.read-mail');
    }
    public function all(){

        return view('user.mail.mail-box');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        $insert = DB::table('contacts')->insert($data);
        if($insert){
           $notification=array(
             'message' => 'Successfully Send',
             'alert-type' => 'success'
           );
           return redirect()->route('home')->with($notification);
        }
        else{
            $notification=array(
                'message' => 'Something is wrong, please try again!',
                'alert-type' => 'error'
              );
              return redirect()->route('ContactUs')->with($notification);
        }
    }
}
