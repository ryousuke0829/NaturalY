@extends('layouts.app')

@section('content')

{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-tractor fs-1"></i>
        <span class="title mx-1">My Following Farmers</span>
        <i class="fa-solid fa-tractor fs-1"></i>
    </div>

    {{-- Farms --}}
    <div class="row g-3">
        @forelse ($farms as $farm)
        @include('partials.farm-card', ['farm' => $farm])
        @empty
        <p class="text-center fs-1 text-muted">You have no folloings yet.</p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <nav aria-label="Page navigation" class="mt-5">
        {{ $farms->links() }}
    </nav>
</div>
@endsection