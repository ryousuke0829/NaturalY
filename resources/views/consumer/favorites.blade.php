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

    {{-- Item Card --}}
    <div class="row g-3">
        @foreach ($items as $item)
            @for ($i = 0; $i < 5; $i++)
                @include('partials.item-card', ['item' => $item])
            @endfor
        @endforeach
    </div>
    
    {{-- Pagination --}}
    <nav aria-label="Page navigation" class="mt-5">
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
