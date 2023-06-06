<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use Mail;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::table('contacts')
        ->get();
        return view('admin.contact.all-contact', compact('all'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = DB::table('contacts')->where('id',$id)->delete();
        if($delete){
            $notification=array(
              'message' => 'Successfully Contact Deleted',
              'alert-type' => 'success'
            );
            return redirect()->route('contact.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('contact.index')->with($notification);
         }
    }
}
