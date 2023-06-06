<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::table('books')
                ->get();
                
        return view('admin.book.all-book', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Book;
        if($file=$request->file('file')){   
        $file = $request->file('file');
        $filename = time().$file->getClientOriginalExtension();
        $request->file->move('public/assets', $filename) ;
        }

        
    
        $data = array();
        $data['title'] = $request->title;
        $data['author'] = $request->author;
        $data['type'] = $request->type;
        $data['file'] = $request->file;
        $data['edition'] = $request->edition;
        $data['price'] = $request->price;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
       

        $insert = DB::table('books')->insert($data);
        if($insert){
           $notification=array(
             'message' => 'Successfully Book Inserted',
             'alert-type' => 'success'
           );
           return redirect()->route('book.index')->with($notification);
        }
        else{
            $notification=array(
                'message' => 'Something is wrong, please try again!',
                'alert-type' => 'error'
              );
              return redirect()->route('book.index')->with($notification);
        }
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $edit = Db::table('books')->where('id', $id)->first();
        return view('admin.book.edit-book', compact('edit'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['author'] = $request->author;
        $data['type'] = $request->type;
        $data['file'] = $request->file;
        $data['edition'] = $request->edition;
        $data['price'] = $request->price;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('books')
        ->where('id',$id)
        ->update($data);
        if($update){
            $notification=array(
              'message' => 'Successfully Book Updated',
              'alert-type' => 'success'
            );
            return redirect()->route('book.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('book.index')->with($notification);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = DB::table('books')->where('id',$id)->delete();
        if($delete){
            $notification=array(
              'message' => 'Successfully Book Deleted',
              'alert-type' => 'success'
            );
            return redirect()->route('book.index')->with($notification);
         }
         else{
             $notification=array(
                 'message' => 'Something is wrong, please try again!',
                 'alert-type' => 'error'
               );
               return redirect()->route('book.index')->with($notification);
         }
    }
}
