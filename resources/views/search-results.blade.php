@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Title --}}
    <h1 class="mb-2">Search Results for "{{ $query }}"</h1>

    {{-- Search bar --}}
    <form action="{{ route('searchItems') }}" method="GET" class="w-100 mb-4">
        <div class="input-group">
            <button type="submit" class="input-group-text bg-secondary text-white px-4 border-0" id="search-label">
                <i class="fa-solid fa-search"></i>
            </button>
            <input type="search" name="search" class="form-control form-control-sm" placeholder="Search organic..."
                aria-label="Search organic" aria-describedby="search-label" value="{{ request('search') }}">
        </div>
    </form>

    {{-- Check if there are items --}}
    @if($items->isEmpty())
    <p class="text-muted">No items found.</p>
    @else
    <div class="row g-3">
        @foreach ($items as $item)
        @include('partials.item-card', ['item' => $item])
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $items->links('pagination::bootstrap-4') }}
    </div>
    @endif
</div>
@endsection