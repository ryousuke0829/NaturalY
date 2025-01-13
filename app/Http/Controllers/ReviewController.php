<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderItem;
use App\Models\Review;
use App\Models\User;

class ReviewController extends Controller
{
    public function create($orderItemId)
    {
        $orderItem = OrderItem::with('item')->findOrFail($orderItemId);
    
        return view('consumer.review', compact('orderItem'));
    }

    public function storeReview(Request $request, $orderItemId)
    {
        $user = Auth::user();

        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
    
        $orderItem = OrderItem::findOrFail($orderItemId);
    
        Review::create([
            'order_item_id' => $orderItemId,
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);
    
        return redirect()->route('consumer.purchaseHistory');
    }
    
}
