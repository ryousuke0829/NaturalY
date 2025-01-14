@extends('layouts.farm.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Order Management</h1>

    @if ($orders->isEmpty())
        <p class="text-center text-muted fs-2">No orders received yet.</p>
    @else
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->shipping_name }}</td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        <td>
                            <form action="{{ route('farm.orders.updateStatus', $order->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="form-select" onchange="this.form.submit()">
                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
