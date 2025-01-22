@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Tittle --}}
    <div class="text-center mb-4">
        <h1 class="title">Write a Review</h1>
        <p class="text-muted">Share your experience about this product!</p>
    </div>

    {{-- Form --}}
    <form action="{{ route('consumer.storeReview', ['orderItemId' => $orderItem->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="order_item_id" value="{{ $orderItem->id }}">

        <div class="mb-4 text-center">
            <img src="{{ $orderItem->item->picture_1}}" alt="{{ $orderItem->item->name }}" class="rounded w-25">
            <h2>{{ $orderItem->item->name }}</h2>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Review Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" id="rating" name="rating" required>
                <option value="" disabled selected>Select Rating</option>
                @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}" {{ old('rating')==$i ? 'selected' : '' }}>{{ $i }}
                    Star{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
            </select>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Review Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="5" required>{{ old('comment') }}</textarea>
        </div>

        <input type="hidden" name="order_item_id" value="{{ $orderItem->id }}">

        <div class="d-grid">
            <button type="submit" class="btn btn-secondary py-1 w-100 text-center mx-auto mt-3 fs-4">Submit</button>
        </div>
    </form>
</div>
@endsection