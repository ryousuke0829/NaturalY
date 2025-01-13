@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-check-to-slot fs-1 text-success"></i>
        <h1 class="fw-bold mt-3">Place Your Order</h1>
        <p class="text-muted">Please confirm your order details and fill your payment.</p>
    </div>

    {{-- Order Details --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-white fw-bold">
            <i class="fa-solid fa-box"></i> Items in Your Order
        </div>
        <div class="card-body">
            @foreach ($cartItems as $item)
                <div class="row align-items-center mb-3" data-item-id="{{ $item->item_id }}">
                    <div class="col-md-3 text-center">
                        <img src="{{ $item->item->picture_1 }}" alt="{{ $item->item->name }}" class="rounded img-fluid" style="max-height: 120px;">
                    </div>
                    <div class="col-md-6">
                        <span class="mb-1 h5">{{ $item->item->name }}</span>
                        <span class="text-muted p">（Contents: {{ $item->item->contents }}）</span>
                        
                        <p class="mb-0">Unit Price: ${{ number_format($item->item->price, 2) }}</p>
                        <p class="mb-0">
                            Quantity:　<span class="quantity-display fw-bold">{{ $item->quantity }}</span>
                            <button 
                            class="btn btn-sm btn-outline-warning py-0 " 
                            data-bs-toggle="modal" 
                            data-bs-target="#editQuantityModal"
                            onclick="openEditQuantityModal({{ $item->item_id }}, {{ $item->quantity }})"
                            >
                            Edit
                            </button>
                        </p>
                    </div>
                    <div class="col-md-3 text-end">
                        <h5 class="text-secondary subtotal-display">Subtotal: ${{ number_format($item->item->price * $item->quantity, 2) }}</h5>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="row">
                <div class="col-md-6 offset-md-6 text-end">
                    <h4 class="fw-bold total-price-display">Total Price: ${{ number_format($totalPrice, 2) }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Quantity Modal -->
    <div class="modal fade" id="editQuantityModal" tabindex="-1" aria-labelledby="editQuantityModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editQuantityForm" method="POST" action="{{ route('consumer.updateQuantity') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editQuantityModalLabel">Edit Item Quantity</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="modal-quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="modal-quantity" class="form-control" value="1" min="1" required>
                            <input type="hidden" name="item_id" id="modal-item-id">
                            <input type="hidden" name="redirect_to" value="order"> <!-- リダイレクト先を指定 -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    {{-- Shipping Information --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-white fw-bold">
            <span><i class="fa-solid fa-truck"></i> Shipping Information</span>
        </div>
        <div class="card-body">
            <form id="shippingInfoForm" action="{{ route('consumer.saveShippingInfoToSession') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="shipping_name" class="form-label"><strong>Shipper Name:</strong></label>
                    <input type="text" name="shipping_name" id="shipping_name" class="form-control" 
                           value="{{ session('shipping_name', $user->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_zipcode" class="form-label"><strong>Zip Code:</strong></label>
                    <input type="text" name="shipping_zipcode" id="shipping_zipcode" class="form-control" 
                           value="{{ session('shipping_zipcode', $user->zip_code) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_prefecture" class="form-label"><strong>Prefecture:</strong></label>
                    <input type="text" name="shipping_prefecture" id="shipping_prefecture" class="form-control" 
                           value="{{ session('shipping_prefecture', $user->prefecture) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_address" class="form-label"><strong>Address:</strong></label>
                    <input type="text" name="shipping_address" id="shipping_address" class="form-control" 
                           value="{{ session('shipping_address', $user->address) }}" required>
                </div>
                <div class="mb-3">
                    <label for="shipping_phone" class="form-label"><strong>Phone Number:</strong></label>
                    <input type="text" name="shipping_phone" id="shipping_phone" class="form-control" 
                           value="{{ session('shipping_phone', $user->phone_number) }}" required>
                </div>
    
            </div>
        </div>

    {{-- Payment --}}
    <div class="text-center mx-auto mt-5 w-50">
        <div id="paypal-button-container"></div>
        <script src="https://www.paypal.com/sdk/js?client-id=AZqvj_z_VPkDOTtJGG3EpSdBFwAILEh6IXuTpoLnFk24F1dkyY77VjQ1WAwR02IdUTogqZXlx3cTjrPk&currency=USD"></script>

        <script>
            paypal.Buttons({
                style: {
                    color:  'blue',
                    shape:  'pill',
                    label:  'pay',
                    height: 40
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{ $totalPrice }}'
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        alert('Transaction completed by ' + details.payer.name.given_name);
                        window.location.href = "{{ route('consumer.orderComplete') }}";
                    });
                }
            }).render('#paypal-button-container');
        </script>
    </div>

</form>



{{-- Confirmation Button --}}
<button id="goToConfirmationPageButton" class="btn btn-warning text-white fs-4 w-100 mt-5 fw-bold">
Go to Confirmation Page
</button>

<script>
document.getElementById('goToConfirmationPageButton').addEventListener('click', function () {
    const form = document.getElementById('shippingInfoForm');
    form.submit(); // Save to session and move to confirmation page
});
</script>

<script>
    function openEditQuantityModal(itemId, currentQuantity) {
        document.getElementById('modal-item-id').value = itemId;
        document.getElementById('modal-quantity').value = currentQuantity;
    }
</script>

@endsection
