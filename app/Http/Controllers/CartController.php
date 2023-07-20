<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        return view('template0_pages/cartpage');
    }

    public function store(Request $request)
    {
        // dd($request);

        $product = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            ['cart_quantity' => DB::raw('cart_quantity + '.$request->cart_quantity)]
        );

        return redirect('/cart')->with('message', 'Product modified in cart');
    }

    public function update(Request $request)
    {
        $product = Cart::find($request->cart_id);

        $product->cart_quantity = $request->cart_quantity;

        $product->save();

        return redirect('/cart')->with('message', 'Product updated in cart');
    }

    public function destroy(Request $request)
    {
        Cart::where('id', $request->cart_id)
        ->where('user_id', Auth::id())
        ->delete();

        return redirect('/cart')->with('message', 'Product removed from cart');
    }
}
