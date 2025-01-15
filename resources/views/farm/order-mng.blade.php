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
                        <a href="{{ route('farm.orderMng', ['status' => 'pending', 'sort' => request('sort')]) }}"
                            class="btn btn-sm btn-outline-danger {{ request('status') === 'pending' ? 'active' : '' }}">
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
            @if($orderItems->isEmpty())
            <p class="text-muted text-center fs-4">No orders available.</p>
            @else
            @foreach($orderItems as $orderItem)
            {{-- Order Card --}}
            <div class="row mb-4">
                <div class="card shadow-sm p-0">
                    <div class="card-header py-1">
                        <div class="row">
                            <div class="col-2">
                                <span class="text-muted">Date of Order</span><br>
                                <span
                                    class="{{ now()->diffInDays($orderItem->created_at) > 0 ? 'text-danger fw-bold' : '' }}">
                                    {{ $orderItem->created_at->format('Y/m/d') }}
                                </span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Quantity<br>{{ $orderItem->quantity }}
                                </span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Total<br>${{ number_format($orderItem->quantity * $orderItem->unit_price, 2) }}
                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="text-muted">
                                    Shipping Address<br>{{ $orderItem->order->shipping_address }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ $orderItem->item->picture_1 }}" class="card-img-top rounded-bottom-left"
                                alt="{{ $orderItem->item->name }}">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body mx-4">
                                <div class="row">
                                    <div class="col-9">
                                        <a href="{{ route('showItem', $orderItem->item_id) }}"
                                            class="text-decoration-none text-dark">
                                            <h2 class="card-title mt-2">{{ $orderItem->item->name }}</h2>
                                            <p class="text-muted scrollable">
                                                {{ $orderItem->item->description }}
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 d-flex align-items-center">
                                        <form action="{{ route('farm.orders.updateStatus', $orderItem->order->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" name="status"
                                                value="{{ $orderItem->order->status == 'shipped' ? 'pending' : 'shipped' }}"
                                                class="btn text-decoration-none h3 text-center {{ $orderItem->order->status == 'shipped' ? 'text-success' : 'text-danger' }}">
                                                @if($orderItem->order->status == 'shipped')
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
                        {{ $orderItems->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </ul>
                </nav>
            </div>
            @endif
            
        </div>
    </div>
</div>
@endsection