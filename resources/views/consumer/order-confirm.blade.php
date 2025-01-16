@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-check-to-slot fs-1 text-success"></i>
        <h1 class="fw-bold mt-3">Order Confirmation</h1>
        <p class="text-muted">Please review your order details before proceeding to payment.</p>
    </div>

    {{-- Order Details --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-white fw-bold">
            <i class="fa-solid fa-box"></i> Items in Your Order
        </div>
        <div class="card-body">
            @foreach ($cartItems as $item)
            <div class="row align-items-center mb-3">
                <div class="col-md-3 text-center">
                    <img src="{{ $item->item->picture_1 }}" alt="{{ $item->item->name }}" class="rounded img-fluid"
                        style="max-height: 120px;">
                </div>
                <div class="col-md-6">
                    <h5 class="mb-1">{{ $item->item->name }}</h5>
                    <p class="mb-0 text-muted">Contents: {{ $item->item->contents }}</p>
                    <p class="mb-0">Unit Price: ${{ number_format($item->item->price, 2) }}</p>
                    <p class="mb-0">Quantity: {{ $item->quantity }}</p>
                </div>
                <div class="col-md-3 text-end">
                    <h5 class="text-muted">Subtotal: ${{ number_format($item->item->price * $item->quantity, 2) }}</h5>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="row">
                <div class="col-md-6 offset-md-6 text-end">
                    <h4 class="fw-bold">Total Price: ${{ number_format($totalPrice, 2) }}</h4>
                </div>
            </div>
        </div>
    </div>

    {{-- Shipping Information --}}
    <form action="{{ route('consumer.orderComplete') }}" method="POST">
        @csrf
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-white fw-bold">
                <i class="fa-solid fa-truck"></i> Shipping Information
            </div>
            <div class="card-body pb-0">
                <p><strong>Shipper Name:</strong> {{ session('shipping_name') }}</p>
                <input type="hidden" name="shipping_name" value="{{ session('shipping_name') }}">

                <p><strong>Zip Code:</strong> {{ session('shipping_zipcode') }}</p>
                <input type="hidden" name="shipping_zipcode" value="{{ session('shipping_zipcode') }}">

                <p><strong>Prefecture:</strong> {{ session('shipping_prefecture') }}</p>
                <input type="hidden" name="shipping_prefecture" value="{{ session('shipping_prefecture') }}">

                <p><strong>Address:</strong> {{ session('shipping_address') }}</p>
                <input type="hidden" name="shipping_address" value="{{ session('shipping_address') }}">

                <p><strong>Phone Number:</strong> {{ session('shipping_phone') }}</p>
                <input type="hidden" name="shipping_phone" value="{{ session('shipping_phone') }}">
            </div>
        </div>

        {{-- Payment --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-white fw-bold">
                <i class="fa-solid fa-credit-card"></i> Payment
            </div>
            <div class="card-body">
                <p><strong>Credit card:</strong> <span>**** - **** - **** - 1234</span></p>

            </div>
        </div>

        {{-- Confirm Button --}}
        <button type="submit" class="btn btn-warning text-white fs-4 w-100 mt-5 fw-bold">Place Order</button>
    </form>
</div>

@endsection