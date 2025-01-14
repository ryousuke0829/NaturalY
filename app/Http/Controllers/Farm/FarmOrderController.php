<?php
namespace App\Http\Controllers\Farm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class FarmOrderController extends Controller
{

    public function orderMng()
    {
        $farmId = Auth::id();

        // 農家が出品した商品に関連する注文を取得
        $orders = Order::whereHas('orderItems.item', function ($query) use ($farmId) {
            $query->where('user_id', $farmId);
        })->with(['orderItems.item'])->get();

        return view('farm.order-mng', compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // ステータスのバリデーション
        $validated = $request->validate([
            'status' => 'required|string|in:pending,shipped',
        ]);

        $order->status = $validated['status'];
        $order->save();

        return redirect()->route('farm.orderMng')->with('success', 'Order status updated successfully.');
    }
}
