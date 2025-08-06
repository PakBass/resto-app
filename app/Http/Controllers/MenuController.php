<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $tableNumber = $request->query('meja');
        if ($tableNumber) {
            Session::put('tableNumber', $tableNumber);
        }

        //menampilkan semua item
        // $items = Item::all();
        $items = Item::where('is_active', 1)->orderBy('name', 'asc')->get();


        return view('customer.menu', compact('items', 'tableNumber'));
    }

    public function cart()
    {
        $cart = Session::get('cart', []);
        return view('customer.cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        
    }


}
