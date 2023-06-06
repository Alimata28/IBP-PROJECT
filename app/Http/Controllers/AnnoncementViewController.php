<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annoncement;
use Illuminate\Support\Facades\DB as DB;
class AnnoncementViewController extends Controller
{
    public function view()
    {
        $all = DB::table('annoncements')->get();
        return view('user.annoncement.view-annoncement', compact('all'));
    }

    public function show($id)
    {
        $data = Annoncement::find($id);
        return view('user.annoncement.show-annoncement', compact('data'));
    }

}
