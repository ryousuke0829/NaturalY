@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">LET'S BITE ORGANIC</p>
    <div class="row g-3">
    
    {{-- Search bar --}}
    <form action="#" class="w-100">
        <div class="input-group">
            <span class="input-group-text bg-secondary text-white px-4" id="search-label">
                <i class="fa-solid fa-search"></i>
            </span>
            <input 
                type="search" 
                name="search" 
                class="form-control form-control-sm" 
                placeholder="Search organic..." 
                aria-label="Search organic" 
                aria-describedby="search-label">
        </div>
        {{-- Category Tag --}}
        <div class="mt-0">
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
        </div>
    </form>

    {{-- Item Card --}}
    <div class="row g-3">
        @foreach ($items as $item)
            @for ($i = 0; $i < 16; $i++)
                @include('partials.item-card', ['item' => $item])
            @endfor
        @endforeach
    </div>

    {{-- Pagination --}}
    <nav aria-label="Page navigation">
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
</div>
@endsection
