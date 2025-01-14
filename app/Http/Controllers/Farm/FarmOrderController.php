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
        $farmId = auth()->id();
    
        $sortOrder = $request->get('sort', 'desc'); 
        $status = $request->get('status');
    
        $ordersQuery = Order::whereHas('orderItems.item', function ($query) use ($farmId) {
            $query->where('user_id', $farmId);
        })->with(['orderItems.item']);
    
        if ($status) {
            $ordersQuery->where('status', $status === 'unshipped' ? 'pending' : $status);
        }
    
        $orders = $ordersQuery->orderBy('created_at', $sortOrder)->paginate(8); 
    
        return view('farm.order-mng', compact('orders'));
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
