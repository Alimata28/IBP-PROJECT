<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use File;
use Response;

class BookViewController extends Controller
{
    public function show($id){
      $data=Book::find($id) ;
      return view('user.library.show-book', compact('data')) ;
     
   }
    public function download( $file){
        return response()->download(public_path('public/assets/'.$file));
    }
    public function view(){
    
        $books= Book::all();
        return view('user.library.library', compact('books'));
    }
}
