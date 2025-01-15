@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-receipt fs-1"></i>
        <span class="title mx-1 text-uppercase">My Purchase History</span>
        <i class="fa-solid fa-receipt fs-1"></i>
    </div>

    @forelse ($orders as $order)
    @foreach ($order->orderItems as $orderItem)
    {{-- Individual Item Card --}}
    <div class="row mb-4">
        <div class="card shadow-sm p-0">
            <div class="card-header py-1">
                <div class="row">
                    <div class="col-3">
                        <span class="text-muted">
                            Date of Purchase<br>{{ $order->created_at->format('Y/m/d') }}
                        </span>
                    </div>
                    <div class="col-3">
                        <span class="text-muted">
                            Quantity<br>{{ $orderItem->quantity }}
                        </span>
                    </div>
                    <div class="col-auto">
                        <span class="text-muted">
                            Total<br>${{ number_format($orderItem->quantity * $orderItem->item->price, 2) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ $orderItem->item->picture_1 }}" class="rounded-bottom-left card-img-top"
                        alt="{{ $orderItem->item->name }}">
                </div>
                <div class="col-md-9">
                    <div class="card-body mx-4 pb-0 pe-0">
                        <div class="row">
                            <div class="col-10">
                                <a href="{{ route('farmProfile', ['id' => $orderItem->item->user->id]) }}"
                                    class="text-decoration-none text-dark">
                                    <img src="{{ $orderItem->item->user->avatar }}"
                                        alt="{{ $orderItem->item->user->name }}" class="rounded-circle avatar-sm">
                                    <span class="mb-0 ms-1 fw-bold">{{ $orderItem->item->user->name }}</span>
                                </a>
                                <h2 class="card-title mt-2">{{ $orderItem->item->name }}</h2>
                                <p class="text-muted scrollable mb-0">{{ $orderItem->item->description }}</p>
                            </div>
                            <div class="col-2 d-flex my-auto">
                                @if ($orderItem->review)
                                <span class="text-success text-center">
                                    <i class="fa-solid fa-check fs-1"></i><br>
                                    <span class="h4">Reviewed</span>
                                </span>
                                @else
                                <a href="{{ route('consumer.review', ['orderItemId' => $orderItem->id]) }}"
                                    class="text-decoration-none h5 text-center text-secondary">
                                    <i class="fa-solid fa-user fs-1"></i>
                                    <i class="fa-regular fa-comment-dots fs-1 align-top"></i><br>
                                    <span class="h4">Review</span>
                                </a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @empty
    <p class="text-center text-muted">You have no purchase history yet.</p>
    @endforelse

</div>
@endsection