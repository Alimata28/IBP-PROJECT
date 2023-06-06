<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::table('users')
                ->get();
                
        return view('admin.user.all-user', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('users')->insert($data);
        if($insert){
           $notification=array(
             'message' => 'Successfully User Inserted',
             'alert-type' => 'success'
           );
           return redirect()->route('user.index')->with($notification);
        }
        else{
            $notification=array(
                'message' => 'Something is wrong, please try again!',
                'alert-type' => 'error'
              );
              return redirect()->route('user.index')->with($notification);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = DB::table('users')->where('id', $id)->first();
        return view('admin.user.edit-user', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('users')
        ->where('id',$id)
        ->update($data);
        if($update){
            $notification=array(
              'message' => 'Successfully User Updated',
              'alert-type' => 'success'
            );
            return redirect()->route('user.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('user.index')->with($notification);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = DB::table('users')->where('id',$id)->delete();
        if($delete){
            $notification=array(
              'message' => 'Successfully User Deleted',
              'alert-type' => 'success'
            );
            return redirect()->route('user.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('user.index')->with($notification);
         }
    }
}
