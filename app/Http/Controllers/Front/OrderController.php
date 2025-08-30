<?php

namespace App\Http\Controllers\Front;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = Cart::with('items.product')->where('user_id', Auth::id())->firstOrFail();
        $total = $cart->items->sum(fn($i) => $i->product->price * $i->quantity);
        return view('order.checkout', compact('cart', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $cart = Cart::with('items.product')->where('user_id', Auth::id())->firstOrFail();

        if ($cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Cart is empty.');
        }

        DB::transaction(function () use ($cart, $request) {
            $totalAmount = $cart->items->sum(fn($i) => $i->product->price * $i->quantity);

            $order = Order::create([
                'user_id' => Auth::id(),
                'shipping_address' => $request->input('shipping_address', Auth::user()->shipping_address),
                'total_amount' => $totalAmount,
                'payment_status' => 'Pending',
                'shipping_status' => 'Pending',
            ]);

            foreach ($cart->items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'unit_price' => $item->product->price,
                ]);
            }

            $cart->items()->delete();
        });

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    public function index()
    {
        $orders = Order::with('items.product')->where('user_id', Auth::id())->latest()->paginate(10);
        return view('order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        
        if ($order->user_id !== Auth::id()) {
            return redirect()->route('orders.index')->with('error', 'You do not have access to this order.');
        }
        $order->load('items.product');
        return view('order.show', compact('order'));
    }
}
