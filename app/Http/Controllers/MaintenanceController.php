<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaintenanceController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        return view('maintenance',[
            'title' => 'Maintenance Account',
        ], compact('data'));
    }

    public function showdata($id){
        $data = User::find($id);
        return view('showdata', [
            'title' => 'Show Data',
        ], compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('maintenance')->with('success', 'success update!');
    }

    public function deletedata($id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('maintenance')->with('success', 'success delete!');
    }
}
