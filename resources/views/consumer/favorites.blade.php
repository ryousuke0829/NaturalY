@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-regular fa-thumbs-up fs-1"></i>
        <span class="title mx-1">My Favorites</span>
        <i class="fa-regular fa-thumbs-up fs-1"></i>
    </div>

    {{-- Item Cards --}}
    <div class="row g-3">
        @forelse ($favorites as $favorite)
            {{-- Include the item-card partial --}}
            @include('partials.item-card', ['item' => $favorite->item])
        @empty
            <p class="text-center fs-1 text-muted">You have no favorites yet.</p>
        @endforelse
    </div>
    
    {{-- Pagination --}}
    <nav aria-label="Page navigation" class="mt-5">
        {{ $favorites->links('pagination::bootstrap-4') }}
    </nav>
</div>
@endsection
