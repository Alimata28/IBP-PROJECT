<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;

use Illuminate\Support\Facades\DB as DB;

class ProfileController extends Controller
{
    public function view($id)
    {
        $profile= User::find($id);
        return view('user.profile', compact('profile'));
    }

    public function edit($id)
    {
        $edit = Db::table('users')->where('id', $id)->first();;
        return view('user.profile-edit', compact('edit'));
    }

    public function update(Request $request,User $user)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->getPassword(),
            'updated_at' => now()
        ]);

        return $this->success('profile','Profile updated successfully!');
    }
}

