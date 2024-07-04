<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request, Product $product)
    {
        $cartItem = Cart::updateOrCreate(
            ['product_id' => $product->id],
            ['quantity' => \DB::raw('quantity + 1')]
        );
        return redirect()->route('cart.index');
    }

    public function remove(Cart $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('cart.index'); //route
    }
}
