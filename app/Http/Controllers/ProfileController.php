<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        $data = User::all();
        return view('profile', [
            'title' => 'Profile',
        ], compact('data'));
    }

    public function updateprofile(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('profile')->with('success', 'success update!');
    }
}

