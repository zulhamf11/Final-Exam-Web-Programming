<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function insertdata(Request $request)
    {
        //
       
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'image' => ['required'],
            'gender' => ['required'],
            'role' => ['required'],
        ]);

        if($request->file('image')){
            $validatedData = $request->file('image')->store('post-images');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);
       
        User::create($validatedData);
        
        
        $request->session()->flash('success', 'Registration Successfull!!');

        return redirect()->route('login');
    }
}
