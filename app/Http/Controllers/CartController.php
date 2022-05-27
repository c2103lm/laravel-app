<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Cart $cart, $id)
    {
        $pro = Product::find($id);
        $quantity = request('quantity',1);
        $cart->add($pro, $quantity);
        return redirect()->route('cart.view');
    }

    public function update(Cart $cart, $id)
    {
        $quantity = request('quantity',1);
        $cart->updateItem($id, $quantity);
        
        return redirect()->route('cart.view');
    }

    public function delete(Cart $cart, $id)
    {
        $cart->removeItem($id);
        return redirect()->route('cart.view');
    }
    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }

    public function view()
    {
        return view('cart-view');
    }
}
