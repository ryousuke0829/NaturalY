<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\CartItem;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
        ]);

        $user = Auth::user();

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('item_id', $request->item_id)
            ->first();

        if (!$cartItem) {
            CartItem::create([
                'cart_id' => $cart->id,
                'item_id' => $request->item_id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('consumer.showCart');
    }

    public function showCart()
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();
    
        if (!$cart) {
            $cartItems = collect(); 
            $totalPrice = 0;
        } else {
            $cartItems = $cart->cartItems()->with('item.user')->paginate(6); // ページネーション
            $totalPrice = $cartItems->sum(function ($cartItem) {
                return $cartItem->item->price * $cartItem->quantity;
            });
        }
    
        return view('consumer.cart', compact('cartItems', 'totalPrice'));
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:cart_items,item_id',
            'quantity' => 'required|integer|min:0',
            'redirect_to' => 'required|string|in:cart,order', 

        ]);
    
        $cartItem = CartItem::where('item_id', $request->item_id)->first();
    
        if ($cartItem) {
            if ($request->quantity == 0) {
                $cartItem->delete();
            } else {
                $cartItem->quantity = $request->quantity;
                $cartItem->save();
            }
        }
    
        if ($request->redirect_to === 'cart') {
            return redirect()->route('consumer.showCart')->with('success', 'Cart updated successfully.');
        } elseif ($request->redirect_to === 'order') {
            return redirect()->route('consumer.showOrder')->with('success', 'Cart updated successfully.');
        }
    
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }
    
    

    public function showOrder()
    {
        $user = Auth::user();
        $cart = Cart::with('cartItems.item')->where('user_id',$user->id)->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('consumer.showCart');
        }

        $cartItems = $cart->cartItems; 
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->item->price;
        });

        return view('consumer.order', compact('cartItems', 'totalPrice','user'));
    }
    
    public function showOrderConfirmation()
    {
        $user = Auth::user();
        $cart = Cart::with('cartItems.item')->where('user_id', $user->id)->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->route('consumer.showCart')->with('error', 'Your cart is empty.');
        }

        $cartItems = $cart->cartItems;
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->item->price;
        });

        return view('consumer.order-confirm', compact('cartItems', 'totalPrice', 'user'));
    }

}
