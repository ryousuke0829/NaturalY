@extends('layouts.app')

@section('content')

<div class="container mt-5">

    {{-- Title --}}
    <div class="text-center mb-5">
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            @foreach ($order->orderItems as $orderItem)
            <a href="{{ route('showfarmProfile', ['farm_id' => $orderItem->item->user->id]) }}" class="text-decoration-none text-dark">
                <div class="d-flex align-items-center m-2">
                    <img src="{{ $orderItem->item->user->avatar }}" alt="{{ $orderItem->item->user->name }}" class="rounded-circle avatar-lg shake-on-hover">
                </div>
            </a>
            @endforeach            
        </div>
        <h1 class="title mt-3">
            <i class="fa-brands fa-pagelines"></i>
            Thank You for Rooting for Our Organics!
            <i class="fa-brands fa-pagelines"></i>
        </h1>
        <p class="text-secondary">Your order has been successfully placed.</p>
    </div>
    

    {{-- Order Summary --}}
    <div class="card shadow p-4 w-50 mx-auto">
        <div class="card-body">
            <h2 class="mb-4 text-center">Order Summary</h2>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td scope="row" class="text-end">Shipper Name:</td>
                        <td>{{ $order->shipping_name }}</td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-end">Email:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-end">Shipping Address:</td>
                        <td>{{ $order->shipping_address }}, {{ $order->shipping_prefecture }}</td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-end">Phone Number:</td>
                        <td>{{ $order->shipping_phone }}</td>
                    </tr>
                    <tr>
                        <td scope="row" class="text-end">Total Price:</td>
                        <td>＄{{ $order->total_price }}</td>
                    </tr>
                </tbody>
            </table>
            
            <hr>

            <p class="text-center mt-4 mb-0">
                <a href="{{ route('index') }}" class="btn btn-outline-secondary w-25">Back to Home</a>
            </p>
        </div>
    </div>

</div>

@endsection
