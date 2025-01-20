@extends('layouts.app')

@section('content')

{{-- Content Section --}}
<div class="container">

    {{-- Item Card --}}
    <p class="title mb-3 fade-in mt-5">LET'S BITE ORGANIC</p>
    <div class="row g-3 fade-in">
        @forelse ($items->take(8) as $item)
        @include('partials.item-card', ['item' => $item])
        @empty
        <div class="col-12">
            <p class="text-center">No items to display at the moment.</p>
        </div>
        @endforelse
    </div>
    <a href="{{ route('allItems') }}" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Organic Item</a>

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
    <a href="{{ route('allFarms') }}" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Farm</a>

    {{-- Event Information --}}
    <p class="title mb-3 mt-5 fade-in">EVENT INFORMATION</p>
    <div class="row g-4 fade-in" id="events-section">
        {{-- Event 1 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event1.webp" class="img-event" alt="Organic Farming Workshop">
                <div class="card-body">
                    <h5 class="card-title">Organic Farming Workshop</h5>
                    <p class="card-text text-muted scrollable">
                        Join us for a hands-on workshop where you'll learn the fundamentals of organic farming from
                        experts. Ideal for beginners and seasoned farmers alike!
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-days"></i> Date: March 15, 2025</li>
                        <li class="text-ellipsis"><i class="fa-solid fa-location-dot"></i> Location: Tokyo Green Center</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 2 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event2.webp" class="img-event" alt="Farm-to-Table Festival">
                <div class="card-body">
                    <h5 class="card-title">Farm-to-Table Festival</h5>
                    <p class="card-text text-muted scrollable">
                        Celebrate the best of local organic produce at this lively festival featuring tastings, cooking
                        demos, and family-friendly activities.
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-days"></i> Date: April 8, 2025</li>
                        <li class="text-ellipsis"><i class="fa-solid fa-location-dot"></i> Location: Osaka Farmer's Market</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 3 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event3.webp" class="img-event" alt="Sustainable Living Seminar">
                <div class="card-body">
                    <h5 class="card-title">Sustainable Living Seminar</h5>
                    <p class="card-text text-muted scrollable">
                        Discover innovative ways to adopt a sustainable lifestyle and support organic farming in your
                        community.
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-days"></i> Date: May 10, 2025</li>
                        <li class="text-ellipsis"><i class="fa-solid fa-location-dot"></i> Location: Kyoto Eco Center</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        {{-- Event 4 --}}
        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="/storage/images/event4.webp" class="img-event" alt="Community Harvest Day">
                <div class="card-body">
                    <h5 class="card-title">Community Harvest Day</h5>
                    <p class="card-text text-muted scrollable">
                        Bring the whole family for a fun-filled day of harvesting organic fruits and vegetables.
                        Experience the joy of farm life!
                    </p>
                    <ul class="list-unstyled small text-muted">
                        <li><i class="fa-solid fa-calendar-days"></i> Date: June 20, 2025</li>
                        <li class="text-ellipsis"><i class="fa-solid fa-location-dot"></i> Location: Sapporo Family Farm</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>

    </div>
    <a href="#" class="btn btn-outline-secondary w-100 mt-3 mb-5">Let's See More Event</a>
    
    {{-- Partners --}}
    <p class="title mt-5 fade-in">OUR PARTNERS</p>
    <div class="row g-4 fade-in">
        {{-- Partner 1 --}}
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center shadow-sm">
                <img src="/storage/images/partner1.webp" alt="Nature's Best Foods" class="img-cover">
                <div class="card-body">
                    <h5 class="card-title">Nature's Best Foods</h5>
                    <p class="card-text text-muted small text-start">
                        A leading distributor of high-quality organic products, committed to supporting farmers and ensuring consumers receive fresh, ethically sourced food. Their mission is to bridge the gap between sustainable farms and global markets.
                    </p>
                </div>
            </div>
        </div>
        {{-- Partner 2 --}}
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center shadow-sm">
                <img src="/storage/images/partner2.webp" alt="EcoEarth Packaging" class="img-cover">
                <div class="card-body">
                    <h5 class="card-title">EcoEarth Packaging</h5>
                    <p class="card-text text-muted small text-start">
                        Innovators in sustainable packaging, providing biodegradable and compostable solutions tailored for organic products. Their eco-friendly approach reduces waste and promotes a greener future for the food industry.
                    </p>
                </div>
            </div>
        </div>
        {{-- Partner 3 --}}
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center shadow-sm">
                <img src="/storage/images/partner3.webp" alt="AgriFuture Institute" class="img-cover">
                <div class="card-body">
                    <h5 class="card-title">AgriFuture Institute</h5>
                    <p class="card-text text-muted small text-start">
                        A pioneer in agricultural research, dedicated to developing innovative organic farming techniques. Through education and cutting-edge studies, they empower farmers to cultivate more sustainable and efficient practices.
                    </p>
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
        checkVisibility(); 
    });
</script>

@endsection