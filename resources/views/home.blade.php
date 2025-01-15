<style>
    /* General Styles */
    body,
    html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .top-banner {
        position: relative;
        height: 60vh;
        background: url('/storage/images/topbanner.jpg') no-repeat center center;
        background-size: cover;
    }

    .top-banner .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }

    .top-banner h2 {
        font-size: 3.5rem;
        margin: 0;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    }

    .top-banner p {
        font-size: 1.5rem;
        margin: 10px 0 20px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    /* Fade-in Animation */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<div class="top-banner mb-5">
    <div class="content">
        <h2>Welcome to</h2>
        <h2>The Natural Yield Market</h2>
        <a href="{{ route('about') }}" class="btn btn-outline-light">Learn More</a>
    </div>
</div>

{{-- Content Section --}}
<div class="container">

    {{-- Item Card --}}
    <p class="title mb-3 fade-in">LET'S BITE ORGANIC</p>
    <div class="row g-3 fade-in">
        @forelse ($items->take(8) as $item)
        @include('partials.item-card', ['item' => $item])
        @empty
        <div class="col-12">
            <p class="text-center">No items to display at the moment.</p>
        </div>
        @endforelse
    </div>
    <a href="{{ route('allItems') }}" class="btn btn-outline-secondary w-100 mt-3 mb-5 fade-in">Let's See More Organic
        Item</a>

    {{-- Farm Card --}}
    <p class="title mb-3 mt-5 fade-in">SPOTLIGHT FARMS</p>
    <div class="row g-3 fade-in">
        @forelse ($farms->take(4) as $farm)
        @include('partials.farm-card', ['farm' => $farm])
        @empty
        <div class="col-12">
            <p class="text-center">No Farms to display at the moment.</p>
        </div>
        @endforelse
    </div>
    <a href="{{ route('allFarms') }}" class="btn btn-outline-secondary w-100 mt-3 mb-5 fade-in">Let's See More Farm</a>

    {{-- Event Information --}}
    <p class="title mb-3 mt-5 fade-in">EVENT INFORMATION</p>
    <div class="row g-4 fade-in">
        @for ($i = 1; $i <= 4; $i++) <div class="col-md-3 fade-in">
            <div class="card shadow-sm">
                <img src="/storage/images/event{{ $i }}.webp" class="img-cover" alt="Event {{ $i }}">
                <div class="card-body">
                    <h5 class="card-title">Event {{ $i }} Title</h5>
                    <p class="card-text text-muted scrollable">Event {{ $i }} details...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
    </div>
    @endfor
</div>

{{-- Partners --}}
<p class="title mt-5 fade-in">OUR PARTNERS</p>
<div class="row g-4 fade-in">
    @foreach (['partner1', 'partner2', 'partner3'] as $partner)
    <div class="col-lg-4 col-md-6 fade-in">
        <div class="card h-100 text-center shadow-sm">
            <img src="/storage/images/{{ $partner }}.webp" alt="Partner" class="img-cover">
            <div class="card-body">
                <h5 class="card-title">{{ ucfirst(str_replace('partner', 'Partner ', $partner)) }}</h5>
                <p class="card-text text-muted small">Description for {{ $partner }}.</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

{{-- Scroll Animation --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const fadeIns = document.querySelectorAll('.fade-in');

        const checkVisibility = () => {
            fadeIns.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    el.classList.add('show');
                }
            });
        };

        window.addEventListener('scroll', checkVisibility);
        checkVisibility(); // Initial check
    });
</script>

@endsection