@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">LET'S BITE ORGANIC</p>
    <div class="row g-3">
    
    {{-- Search bar --}}
    <form action="{{ route('searchItems') }}" method="GET" class="w-100 mb-4">
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
                placeholder="Search organic..." 
                aria-label="Search organic" 
                aria-describedby="search-label"
                value="{{ request('search') }}">
        </div>
    </form>  

    {{-- Item Card --}}
    <div class="row g-3">
        @foreach ($items as $item)
            @include('partials.item-card')
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $items->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
        {{-- Category Tag --}}
        {{-- <div class="mt-0">
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
        </div> --}}