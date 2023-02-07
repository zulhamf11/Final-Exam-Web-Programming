<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

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
            'password' => ['required', 'confirmed', Password::min(8)->numbers()],
            'images' => ['required'],
            // 'images' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'] ,error
            'gender' => ['required'],
            'role' => ['required'],
        ]);

        if($request->file('images')){
            $validatedData = $request->file('images')->store('path-images');
        }

        // // $imageName = str_replace(' ', '-', $validatedData['name']);
        // $imagePath = $request->file('image')->store('/public/images/');
        // $imagePath = str_replace('public/', '',$imagePath);

        $validatedData['password'] = bcrypt($validatedData['password']);
       
        User::create($validatedData);
        
        
        $request->session()->flash('success', 'Registration Successfull!!');

        return redirect()->route('login');
    }
}
