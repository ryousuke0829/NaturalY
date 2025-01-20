@extends('layouts.app')

@section('content')
<div class="mx-5">
    <!-- Hero Section -->
    <section class="text-center py-5 position-relative overflow-hidden"
        style="background: linear-gradient(to bottom, #6f42c1, #e83e8c);">
        <div class="container position-relative text-white">
            <h1 class="display-3 fw-bold animated fadeInDown">Welcome to Natural Yield Market</h1>
            <p class="lead animated fadeInUp">Empowering Japan's Organic Farmers and Connecting Them with Consumers.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="my-5 py-5">
        <h2 class="text-dark title text-center">About Us</h2>
        <div class="container mt-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="/storage/images/topbanner.jpg" class="img-fluid rounded shadow-lg" alt="About Us">
                </div>
                <div class="col-md-6">
                    <p class="fs-5">
                        At Natural Yield Market, we are dedicated to fostering a vibrant ecosystem for organic farming
                        in Japan. Our mission is to empower passionate farmers and health-conscious consumers,
                        creating a bridge that encourages sustainable agriculture and supports local communities.
                    </p>
                    <p class="fs-5">
                        By prioritizing sustainability and community engagement, we aim to make organic farming the
                        backbone of a healthier and greener future for everyone.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="my-5 p-5 bg-light">
        <h2 class="text-dark title text-center">Our Mission</h2>
        <div class="container mt-4">
            <div class="text-start">
                <p class="fs-4">
                    To revolutionize agriculture in Japan by promoting organic practices and creating opportunities for
                    farmers to thrive.
                </p>
                <p class="fs-4">
                    We believe in a future where fresh, organic produce is accessible to everyone, and farmers are
                    celebrated as the stewards of sustainability.
                </p>
            </div>
        </div>
    </section>

    <!-- What We Offer Section -->
    <section class="my-5 py-5">
        <h2 class="text-dark title text-center">What We Offer</h2>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fa-solid fa-store fs-1 text-success mb-3"></i>
                    <h4 class="fw-bold">Marketplace</h4>
                    <p>A platform for organic farmers to sell directly to consumers.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa-solid fa-graduation-cap fs-1 text-info mb-3"></i>
                    <h4 class="fw-bold">Education</h4>
                    <p>Workshops and resources to excel in organic farming practices.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa-solid fa-people-group fs-1 text-warning mb-3"></i>
                    <h4 class="fw-bold">Community</h4>
                    <p>A network supporting the organic farming movement in Japan.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Custom JavaScript for Animations -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('section');
        window.addEventListener('scroll', () => {
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    section.classList.add('visible');
                } else {
                    section.classList.remove('visible');
                }
            });
        });
    });
</script>

<style>
    section {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-in-out;
    }

    section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .bg-gradient {
        background: linear-gradient(45deg, #6f42c1, #e83e8c);
        z-index: -1;
    }
</style>
@endsection