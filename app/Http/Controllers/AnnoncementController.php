<?php

namespace App\Http\Controllers;

use App\Models\Annoncement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class AnnoncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::table('annoncements')->get();
        return view('admin.annoncement.all-annoncement', compact('all'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.annoncement.add-annoncement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $data['content'] = $request->content;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        $insert = DB::table('annoncements')->insert($data);
        if($insert){
           $notification=array(
             'message' => 'Successfully Annoncement Inserted',
             'alert-type' => 'success'
           );
           return redirect()->route('annoncement.index')->with($notification);
        }
        else{
            $notification=array(
                'message' => 'Something is wrong, please try again!',
                'alert-type' => 'error'
              );
              return redirect()->route('annoncement.index')->with($notification);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Db::table('annoncements')->where('id', $id)->first();

        return view('admin.annoncement.edit-annoncement', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $data['content'] = $request->content;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('annoncements')
        ->where('id',$id)
        ->update($data);
        if($update){
            $notification=array(
              'message' => 'Successfully Annoncement Updated',
              'alert-type' => 'success'
            );
            return redirect()->route('annoncement.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('annoncement.index')->with($notification);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = DB::table('annoncements')->where('id',$id)->delete();
        if($delete){
            $notification=array(
              'message' => 'Successfully Annoncement Deleted',
              'alert-type' => 'success'
            );
            return redirect()->route('annoncement.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('annoncement.index')->with($notification);
         }
    }
}
