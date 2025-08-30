<?php

namespace App\Http\Controllers\Front;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        // Get or create cart for the authenticated user
        $cart = Cart::with('items.product')->firstOrCreate(['user_id' => Auth::id()]);

        return view('cart.index', compact('cart'));
    }

    public function add(Product $product, Request $request)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        $item = $cart->items()->where('product_id', $product->id)->first();
        if ($item) {
            $item->quantity += $request->input('quantity', 1);
            $item->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $request->input('quantity', 1),
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function update(CartItem $item, Request $request)
    {
        // Ensure the item belongs to the authenticated user's cart
        if ($item->cart->user_id !== Auth::id()) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized action.');
        }

        $item->update([
            'quantity' => $request->input('quantity', $item->quantity),
        ]);

        return redirect()->back()->with('success', 'Cart updated.');
    }

    public function remove(CartItem $item)
    {
        // Ensure the item belongs to the authenticated user's cart
        if ($item->cart->user_id !== Auth::id()) {
            return redirect()->route('cart.index')->with('error', 'Unauthorized action.');
        }

        $item->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }
}
