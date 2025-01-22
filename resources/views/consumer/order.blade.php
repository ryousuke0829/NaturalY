@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-check-to-slot fs-1 text-success"></i>
        <h1 class="fw-bold mt-3">Place Your Order</h1>
        <p class="text-muted">Please confirm your order details and fill your payment.</p>
    </div>

    {{-- Order & Shipping Form --}}
    <form id="orderForm" action="{{ route('consumer.saveShippingInfoToSession') }}" method="POST">
        @csrf
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
                    <div class="col-md-5">
                        <span class="mb-1 h5">{{ $item->item->name }}</span>
                        <span class="text-muted p">（Contents: {{ $item->item->contents }}）</span>
                        <p class="mb-0">Unit Price: ${{ number_format($item->item->price, 2) }}</p>
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <label for="number">Quantity：</label>
                        <input type="number" name="quantities[{{ $item->item_id }}]" class="form-control w-50"
                            value="{{ old('quantities.' . $item->item_id, $item->quantity) }}" min="0">
                    </div>
                    <div class="col-md-2 text-end">
                        <h5 class="text-secondary">
                            Subtotal: ${{ number_format($item->item->price * $item->quantity, 2) }}
                        </h5>
                    </div>
                </div>
                <hr>
                @endforeach
                <div class="row">
                    <div class="col-md-6 offset-md-6 text-end">
                        <h4 class="fw-bold total-price-display">
                            Total Price: ${{ number_format($totalPrice, 2) }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Shipping Information --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-white fw-bold">
                <span><i class="fa-solid fa-truck"></i> Shipping Information</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="shipping_name" class="form-label"><strong>Shipper Name:</strong></label>
                    <input type="text" name="shipping_name" id="shipping_name" class="form-control"
                        value="{{ old('shipping_name', session('shipping_name', $user->name)) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_zipcode" class="form-label"><strong>Zip Code:</strong></label>
                    <input type="text" name="shipping_zipcode" id="shipping_zipcode" class="form-control"
                        value="{{ old('shipping_zipcode', session('shipping_zipcode', $user->zip_code)) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_prefecture" class="form-label"><strong>Prefecture:</strong></label>
                    <input type="text" name="shipping_prefecture" id="shipping_prefecture" class="form-control"
                        value="{{ old('shipping_prefecture', session('shipping_prefecture', $user->prefecture)) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_address" class="form-label"><strong>Address:</strong></label>
                    <input type="text" name="shipping_address" id="shipping_address" class="form-control"
                        value="{{ old('shipping_address', session('shipping_address', $user->address)) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_phone" class="form-label"><strong>Phone Number:</strong></label>
                    <input type="text" name="shipping_phone" id="shipping_phone" class="form-control"
                        value="{{ old('shipping_phone', session('shipping_phone', $user->phone_number)) }}" required>
                </div>
            </div>
        </div>

        {{-- PayPal Payment --}}
        <div class="text-center mx-auto mt-5 w-50">
            <div id="paypal-button-container"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AZqvj_z_VPkDOTtJGG3EpSdBFwAILEh6IXuTpoLnFk24F1dkyY77VjQ1WAwR02IdUTogqZXlx3cTjrPk&currency=USD"></script>
            <script>
                paypal.Buttons({
                    style: {
                        color: 'blue',
                        shape: 'pill',
                        label: 'pay',
                        height: 40
                    },
                    createOrder: function (data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: { value: '{{ $totalPrice }}' }
                            }]
                        });
                    },
                    onApprove: function (data, actions) {
                        return actions.order.capture().then(function (details) {
                            alert('Transaction completed by ' + details.payer.name.given_name);
                            document.getElementById("orderForm").submit(); // フォームを送信
                        });
                    }
                }).render('#paypal-button-container');
            </script>
        </div>

        {{-- Confirmation Button --}}
        <button type="submit" class="btn btn-warning text-white fs-4 w-100 mt-5 fw-bold">
            Go to Confirmation Page
        </button>
    </form>

@endsection
