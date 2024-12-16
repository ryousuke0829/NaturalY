@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center">
        <i class="fa-solid fa-cart-shopping fs-1"></i>
        <span class="title mx-1">Your Cart</span>
        <i class="fa-solid fa-cart-shopping fs-1"></i>
    </div>
    {{-- Total Price --}}
    <h2 class="mt-5">Total：$12.00</h2>

    {{-- Item Card --}}
    <div class="row g-3">
        <div class="row g-3">
            @for ($i = 0; $i < 3; $i++)
                @foreach ($cartItems as $item)
                    @include('partials.cart-item', ['item' => $item])
                @endforeach
            @endfor
        </div>
    </div>
    
    {{-- Pagination --}}
    <nav aria-label="Page navigation" class=" mt-3">
        <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
        </ul>
    </nav>

    {{-- Buying Button --}}
    <a href="{{route('consumer.order')}}" class="fixed-button bg-warning text-decoration-none">
        Buy!!
    </a>
</div>
@endsection
