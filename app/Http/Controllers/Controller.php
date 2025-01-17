<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CartItem;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function redirectBasedOnRole($user, $items, $farms)
    {   
        switch ($user->role_id) {
            case 1:
                return redirect()->route('admin.index');
            case 2:
                return view('home', compact('user', 'items', 'farms'));
            case 3:
                return redirect()->route('farm.index');
            default:
                return view('home', compact('items', 'farms'));
        }
    }
    public function getCartQuantity()
    {
        $user = Auth::user();

        return CartItem::where('cart_id', $user->cart->id)
            ->sum('quantity');
    }


}
