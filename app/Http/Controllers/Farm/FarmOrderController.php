<?php

namespace App\Http\Controllers\Farm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class FarmOrderController extends Controller
{

    public function orderMng(Request $request)
    {
        $userId = auth()->id();
    
        $query = \App\Models\OrderItem::whereHas('item', function ($q) use ($userId) {
            $q->where('user_id', $userId)->withTrashed(); 
        })->with(['order', 'item' => function ($q) {
            $q->withTrashed(); 
        }]);
    
        // Filter by status
        if ($request->filled('status')) {
            $query->whereHas('order', function ($q) use ($request) {
                $q->where('status', $request->status);
            });
        }
    
        // Sort by created_at
        if ($request->filled('sort') && in_array($request->sort, ['asc', 'desc'])) {
            $query->orderBy('created_at', $request->sort);
        } else {
            $query->orderBy('created_at', 'desc'); 
        }
    
        // Paginate the results
        $orderItems = $query->paginate(10);
    
        return view('farm.order-mng', compact('orderItems'));
    }
    


    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|string|in:pending,shipped',
        ]);

        $order->status = $validated['status'];
        $order->save();

        return redirect()->route('farm.orderMng')->with('success', 'Order status updated successfully.');
    }
}
