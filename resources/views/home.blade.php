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
        {{-- Event 1 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event1.webp" class="img-cover" alt="Organic Farming Workshop">
                <div class="card-body">
                    <h5 class="card-title">Organic Farming Workshop</h5>
                    <p class="card-text text-muted scrollable">
                        Join us for a hands-on workshop where you'll learn the fundamentals of organic farming from
                        experts. Ideal for beginners and seasoned farmers alike!
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-alt"></i> Date: March 15, 2025</li>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Location: Tokyo Green Center</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 2 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event2.webp" class="img-cover" alt="Farm-to-Table Festival">
                <div class="card-body">
                    <h5 class="card-title">Farm-to-Table Festival</h5>
                    <p class="card-text text-muted scrollable">
                        Celebrate the best of local organic produce at this lively festival featuring tastings, cooking
                        demos, and family-friendly activities.
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-alt"></i> Date: April 8, 2025</li>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Location: Osaka Farmer's Market</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 3 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event3.webp" class="img-cover" alt="Sustainable Living Seminar">
                <div class="card-body">
                    <h5 class="card-title">Sustainable Living Seminar</h5>
                    <p class="card-text text-muted scrollable">
                        Discover innovative ways to adopt a sustainable lifestyle and support organic farming in your
                        community.
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-alt"></i> Date: May 10, 2025</li>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Location: Kyoto Eco Center</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 4 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event4.webp" class="img-cover" alt="Community Harvest Day">
                <div class="card-body">
                    <h5 class="card-title">Community Harvest Day</h5>
                    <p class="card-text text-muted scrollable">
                        Bring the whole family for a fun-filled day of harvesting organic fruits and vegetables.
                        Experience the joy of farm life!
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-alt"></i> Date: June 20, 2025</li>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Location: Sapporo Family Farm</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Partners --}}
<p class="title mt-5 fade-in">OUR PARTNERS</p>
<div class="row g-4 fade-in">
    {{-- Partner 1 --}}
    <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center shadow-sm">
            <img src="/storage/images/partner1.webp" alt="Nature's Best Foods" class="img-cover">
            <div class="card-body">
                <h5 class="card-title">Nature's Best Foods</h5>
                <p class="card-text text-muted small">A trusted distributor of organic products worldwide.</p>
            </div>
        </div>
    </div>
    {{-- Partner 2 --}}
    <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center shadow-sm">
            <img src="/storage/images/partner2.webp" alt="EcoEarth Packaging" class="img-cover">
            <div class="card-body">
                <h5 class="card-title">EcoEarth Packaging</h5>
                <p class="card-text text-muted small">Eco-friendly packaging solutions for organic goods.</p>
            </div>
        </div>
    </div>
    {{-- Partner 3 --}}
    <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center shadow-sm">
            <img src="/storage/images/partner3.webp" alt="AgriFuture Institute" class="img-cover">
            <div class="card-body">
                <h5 class="card-title">AgriFuture Institute</h5>
                <p class="card-text text-muted small">Leading research in sustainable and organic agriculture.</p>
            </div>
        </div>
    </div>
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