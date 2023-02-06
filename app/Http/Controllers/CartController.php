<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    public function cart() {
        $data = OrderDetail::all();
        return view('cart', [
            'title' => 'Cart'
        ],compact('data'));
    }

    public function deletecart($id) {
        $data = OrderDetail::find($id);
        $data->delete();
        return redirect()->route('cart')->with('success', 'success delete from cart');
    }

    public function checkout(){
        return redirect('dashboard')->with('success', 'Success, We will contact you 1x24 hours.');
    }
}
