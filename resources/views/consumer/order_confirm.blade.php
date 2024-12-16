@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-cash-register fs-1"></i>
        <span class="title mx-1">Confirm your Order</span>
        <i class="fa-solid fa-cash-register fs-1"></i>
    </div>

    <ol>
        {{-- Billing Details --}}
        <li class="h3">Billing Details</li>
        <div class="card mb-3 w-100 px-4 pt-3" >
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <p class="card-title h5">GOOD BANANA <span class="text-muted h6">(Contents：10bananas)</span></p>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Unit Price</span>
                    <strong class="ms-auto">$3.00</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Quantity</span>
                    <strong class="ms-auto">3</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Shipping Fee</span>
                    <strong class="ms-auto">$2.00</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="card-title h5">NICE BANANA <span class="text-muted h6">(Contents：10bananas)</span></p>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Unit Price</span>
                    <strong class="ms-auto">$3.00</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Quantity</span>
                    <strong class="ms-auto">3</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Shipping Fee</span>
                    <strong class="ms-auto">$2.00</strong>
                </div>
                <hr>
                <h5 class="text-end">Total：$22.00</h5>
            </div>
        </div>

        {{-- Shipping Information --}}
        <li class="h3 mt-5">Shipping Information</li>
        <div class="card mb-3 w-100 px-4 py-3" >
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <span class="card-text">Shipper Name</span>
                    <strong class="ms-auto">Sasaki Ryosuke</strong>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <span class="card-text">Adress</span>
                    <strong class="ms-auto">#103 Bldg.B, Midori-danchi 2-8-1, nishi-shinjuku, sinjyuku-ku, Tokyo, 163-8001, JAPAN</strong>
                </div>
                <div class="d-flex justify-content-between mt-1">
                    <span class="card-text">Expected Delivery Date</span>
                    <strong class="ms-auto">4-7 days</strong>
                </div>
            </div>
        </div>

        {{-- Payment --}}
        <li class="h3 mt-5">Payment</li>
        <div class="card mb-3 w-100 px-4 py-3" >
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <span class="card-text">Credit card</span>
                    <strong class="ms-auto">**** - **** - **** - 1234</strong>
                </div>
            </div>
        </div>
    </ol>

    {{-- Buying Button --}}
    <a href="{{route('consumer.orderSuccess')}}" class="fixed-button bg-warning text-decoration-none fw-boldr">
        Submit
    </a>
</div>
@endsection
