@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5 px-5">
            <!-- Title -->
            <p class="title text-start text-dark mb-5 text-shadow text-center">
                <i class="fa-solid fa-truck-fast"></i>
                ORDER MANAGEMENT
                <i class="fa-solid fa-truck-fast"></i>
            </p>

        <!-- Sort Section -->
        <div class="mb-4">
            <div class="d-flex flex-wrap align-items-center gap-3">
                <!-- Status Filter -->
                <div class="d-flex align-items-center gap-2">
                    <span>Filter by:</span>
                    <a href="{{ route('farm.orderMng', ['status' => 'shipped', 'sort' => request('sort')]) }}" 
                    class="btn btn-sm btn-outline-success {{ request('status') === 'shipped' ? 'active' : '' }}">
                        Shipped
                    </a>
                    <a href="{{ route('farm.orderMng', ['status' => 'unshipped', 'sort' => request('sort')]) }}" 
                    class="btn btn-sm btn-outline-danger {{ request('status') === 'unshipped' ? 'active' : '' }}">
                        Unshipped
                    </a>
                    <a href="{{ route('farm.orderMng', ['sort' => request('sort')]) }}" 
                    class="btn btn-sm btn-outline-secondary {{ !request('status') ? 'active' : '' }}">
                        All Orders
                    </a>
                </div>

                <!-- Sort Order -->
                <div class="d-flex align-items-center gap-2">
                    <span>Sort by:</span>
                    <a href="{{ route('farm.orderMng', ['sort' => 'asc', 'status' => request('status')]) }}" 
                    class="btn btn-sm btn-outline-primary {{ request('sort') === 'asc' ? 'active' : '' }}">
                        Oldest First
                    </a>
                    <a href="{{ route('farm.orderMng', ['sort' => 'desc', 'status' => request('status')]) }}" 
                    class="btn btn-sm btn-outline-primary {{ request('sort') === 'desc' || !request('sort') ? 'active' : '' }}">
                        Newest First
                    </a>
                </div>
            </div>
        </div>

            
            @if($orders->isEmpty())
                <p class="text-muted text-center fs-4">No orders available.</p>
            @else
                @foreach($orders as $order)
                {{-- Order Card --}}
                <div class="row mb-4">
                    <div class="card shadow-sm p-0">
                        <div class="card-header py-1">
                            <div class="row">
                                <div class="col-2">
                                    <span class="text-muted">Date of Order</span><br>
                                    <span class="{{ now()->diffInDays($order->created_at) > 2 ? 'text-danger fw-bold' : '' }}">
                                        {{ $order->created_at->format('Y/m/d') }}
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span class="text-muted">
                                        Quantity<br>{{ $order->orderItems->sum('quantity') }}
                                    </span>
                                </div>
                                <div class="col-2">
                                    <span class="text-muted">
                                        Total<br>${{ number_format($order->total_price, 2) }}
                                    </span>
                                </div>
                                <div class="col-auto">
                                    <span class="text-muted">
                                        Shipping Address<br>{{ $order->shipping_address }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ $order->orderItems->first()->item->picture_1 }}" 
                                     class="card-img-top rounded-bottom-left " 
                                     alt="{{ $order->orderItems->first()->item->name }}">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body mx-4">
                                    <div class="row">
                                        <div class="col-9">
                                            <a href="{{ route('showItem', $order->orderItems->first()->item_id) }}" class="text-decoration-none text-dark">
                                                <h2 class="card-title mt-2">{{ $order->orderItems->first()->item->name }}</h2>
                                                <p class="text-muted scrollable">
                                                    {{ $order->orderItems->first()->item->description }}
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <form action="{{ route('farm.orders.updateStatus', $order->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" name="status" value="{{ $order->status == 'shipped' ? 'pending' : 'shipped' }}" 
                                                        class="btn text-decoration-none h3 text-center {{ $order->status == 'shipped' ? 'text-success' : 'text-danger' }}">
                                                    @if($order->status == 'shipped')
                                                        <i class="fa-regular fa-circle-check fs-2"></i><br>
                                                        <span class="fs-2">Shipped</span>
                                                    @else
                                                        <span class="fs-3">Unshipped</span>
                                                    @endif
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Pagination Links --}}
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                            {{ $orders->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </ul>
                    </nav>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
