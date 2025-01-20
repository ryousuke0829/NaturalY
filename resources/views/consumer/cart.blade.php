@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <i class="fa-regular fa-thumbs-up fs-1"></i>
        <h1 class="text-center title">Your Cart</h1>
    </div>
    
    @if ($cartItems->isEmpty())
    <p class="text-center fs-1 text-muted">Your cart is empty now.</p>
    @else
    <div class="row g-3">
        @foreach ($cartItems as $item)
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('showItem', ['item_id' => $item->item_id]) }}" class="text-decoration-none text-dark">
                <div class="card shadow-sm border-1 h-100">
                    <!-- Image -->
                    <div class="position-relative">
                        <img src="{{ $item->item->picture_1 }}" class="card-img-top" alt="Item Image">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50">
                            {{ $item->item->favoriteCount() }} {{ $item->item->favoriteCount() === 1 ? 'Favorite' :
                            'Favorites' }}
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column px-2 pb-0">
                        <h4 class="card-title mb-0 mb-1 text-ellipsis">{{ $item->item->name }}</h4>
                        <p class="card-text fw-bold">Contents: {{ $item->item->contents }}</p>
                        <p class="card-text small mb-1 scrollable">
                            {{ $item->item->description }}
                        </p>
                        <h5 class="card-text text-end mb-0 mt-2">${{ $item->item->price }}</h5>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer py-1 bg-light mt-0">
                        {{-- Quantity Management --}}
                        <div class="my-2 d-flex align-items-center justify-content-center">
                            {{-- Decrement Button --}}
                            <form action="{{ route('consumer.updateQuantity') }}" method="POST" class="me-2">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                                <input type="hidden" name="quantity" value="{{ max(0, $item->quantity - 1) }}">
                                <input type="hidden" name="redirect_to" value="cart">
                                <button type="submit" class="btn btn-outline-danger">－</button>
                            </form>

                            {{-- Quantity Display --}}
                            <h5 class="m-0 mx-2" id="quantity-{{ $item->item_id }}">{{ $item->quantity }}</h5>

                            {{-- Increment Button --}}
                            <form action="{{ route('consumer.updateQuantity') }}" method="POST" class="ms-2">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                                <input type="hidden" name="quantity" value="{{ $item->quantity + 1 }}">
                                <input type="hidden" name="redirect_to" value="cart">
                                <button type="submit" class="btn btn-outline-success">＋</button>
                            </form>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endif

    {{-- Show Orders Button --}}
    <a href="{{route('consumer.showOrder')}}" class="btn fixed-button text-decoration-none btn-warning">
        <i class="fa-solid fa-cash-register fs-2 text-white mb-0 position-relative top-25"> </i>
    </a>

</div>
@endsection