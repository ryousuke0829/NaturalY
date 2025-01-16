@extends('layouts.app')

@section('content')

{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">Good Organic Farms</p>
    
    {{-- Search bar --}}
    <form action="{{ route('searchFarms') }}" method="GET" class="w-100">
        <div class="input-group">
            <button 
                type="submit" 
                class="input-group-text bg-secondary text-white px-4 border-0" 
                id="search-label">
                <i class="fa-solid fa-search"></i>
            </button>
            <input 
                type="search" 
                name="search" 
                class="form-control form-control-sm" 
                placeholder="Search farm name or products..." 
                aria-label="Search organic farms" 
                aria-describedby="search-label"
                value="{{ request('search') }}">
        </div>
    </form>

    {{-- Farm Card --}}
    <div class="row g-3 mt-3">
        @forelse ($farms as $farm)
            @include('partials.farm-card', ['farm' => $farm])
        @empty
            <p class="text-center text-muted">No farms found matching your search.</p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $farms->links('pagination::bootstrap-4') }}
    </div>

</div>
@endsection
