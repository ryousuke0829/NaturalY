@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Title --}}
    <h1 class="mb-2">Search Results for "{{ $query }}"</h1>

    {{-- Search bar --}}
    <form action="{{ route('searchFarms') }}" method="GET" class="w-100 mb-4">
        <div class="input-group">
            <button type="submit" class="input-group-text bg-secondary text-white px-4 border-0" id="search-label">
                <i class="fa-solid fa-search"></i>
            </button>
            <input type="search" name="search" class="form-control form-control-sm" placeholder="Search organic..."
                aria-label="Search organic" aria-describedby="search-label" value="{{ request('search') }}">
        </div>
    </form>

    {{-- Check if there are items --}}
    @if($farms->isEmpty())
    <p class="text-muted">No farms found.</p>
    @else
    {{-- Farm cards --}}
    <div class="row g-3 mt-3">
        @foreach ($farms as $farm)
        @include('partials.farm-card', ['farm' => $farm])
        @endforeach
    </div>
    @endif

</div>
@endsection