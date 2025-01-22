<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $cart = Cart::with('cartItems.item')->where('user_id', $user->id)->first();
        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('consumer.showCart')->with('error', 'Your cart is empty.');
        }

        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'pending',
            'total_price' => $cart->cartItems->sum(fn ($cartItem) => $cartItem->quantity * $cartItem->item->price),
            'shipping_name' => $request->shipping_name,
            'shipping_zipcode' => $request->shipping_zipcode,
            'shipping_prefecture' => $request->shipping_prefecture,
            'shipping_address' => $request->shipping_address,
            'shipping_phone' => $request->shipping_phone,
        ]);

        foreach ($cart->cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'item_id' => $cartItem->item_id,
                'quantity' => $cartItem->quantity,
                'unit_price' => $cartItem->item->price,
            ]);
        }

        $cart->cartItems()->delete();

        return redirect()->route('consumer.orderComplete')->with('success', 'Your order has been placed!');
    }

    public function complete()
    {
        $user = Auth::user();
    
        $order = Order::with(['orderItems.item.user'])->where('user_id', $user->id)->latest()->first();

        session()->forget([
            'shipping_name',
            'shipping_zipcode',
            'shipping_prefecture',
            'shipping_address',
            'shipping_phone',
        ]);
    
        return view('consumer.order-complete', compact('user', 'order'));
    }
    
    public function saveShippingInfoToSession(Request $request)
    {
        $request->validate([
            'shipping_name' => 'required|string|max:255',
            'shipping_zipcode' => 'required|string|max:20',
            'shipping_prefecture' => 'required|string|max:100',
            'shipping_address' => 'required|string|max:255',
            'shipping_phone' => 'required|string|max:20',
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:0'
        ]);
    
        session([
            'shipping_name' => $request->input('shipping_name'),
            'shipping_zipcode' => $request->input('shipping_zipcode'),
            'shipping_prefecture' => $request->input('shipping_prefecture'),
            'shipping_address' => $request->input('shipping_address'),
            'shipping_phone' => $request->input('shipping_phone'),
        ]);
    
        foreach ($request->quantities as $itemId => $quantity) {
            $cartItem = CartItem::where('item_id', $itemId)->first();
            if ($cartItem) {
                if ($quantity == 0) {
                    $cartItem->delete();
                } else {
                    $cartItem->quantity = $quantity;
                    $cartItem->save();
                }
            }
        }
    
        return redirect()->route('consumer.showOrderConfirmation')->with('success', 'Order details updated successfully.');
    }
    
    public function purchaseHistory()
    {
        $user = Auth::user();
    
        $orders = Order::with([
            'orderItems.item' => function ($query) {
                $query->withTrashed(); 
            },
            'orderItems.item.user',
            'orderItems.review'
        ])
        ->where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->paginate(4);
    
        return view('consumer.purchase-history', compact('orders'));
    }

}
