<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index() {
        $data = Products::paginate(10);
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ], compact('data'));
    }
}
