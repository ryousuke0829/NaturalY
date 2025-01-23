<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'NaturalY') }}</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Google Fonts で IM FELL French Canon SC をインポート -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&family=Noto+Sans+JP:wght@100..900&display=swap"
        rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-consumer">
    <div id="app">
        <div id="particles-js"></div>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm position-fixed top-0 w-100">
            <div class="container">
                <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="NaturalY Logo" class="logo-style">
                    <span class="brand-text">NaturalY</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link right-item" href="{{ route('login') }}" id="login-link">
                                <i class="fa-solid fa-right-to-bracket nav-icon"></i>
                                <span class="nav-text">
                                    {{ __('Login') }}
                                </span>
                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link right-item" href="{{ route('register') }}">
                                <i class="fa-solid fa-user-plus nav-icon"></i>
                                <span class="nav-text">
                                    {{ __('Register') }}
                                </span>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="my-auto me-5 nav-text">Hello, <span class="fw-bold fs-5">{{ Auth::user()->name}}</span> san!!</li>

                        {{-- Cart --}}
                        <li class="nav-item me-2 position-relative">
                            <a class="nav-link mx-auto text-center nav-link right-item"
                                href="{{route('consumer.showCart')}}" role="button" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                <i class="fa-solid fa-cart-shopping fs-3 nav-item nav-icon"></i>

                                @if ($cartQuantity > 0)
                                <span
                                    class="position-absolute top-25 start-50 translate-middle text-danger small fw-bold">
                                    {{ $cartQuantity }}
                                </span>
                                @endif

                                <span class="nav-text">Cart</span>
                            </a>
                        </li>

                        {{-- Hamburger --}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link mx-auto text-center nav-link right-item" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                <i class="fa-solid fa-burger fs-3 nav-item nav-icon"></i>
                                <span class="nav-text">Menu</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="navbarDropdown">

                                <!-- User Icon and Name -->
                                <a class="dropdown-item d-flex align-items-center justify-content-center gap-1"
                                    href="{{route('consumer.showProfile')}}">
                                    @if (Auth::user()->avatar)
                                    <img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}"
                                        class="rounded-circle avatar-sm"><strong class="text-secondary">{{
                                        Auth::user()->name }}</strong>
                                    @else
                                    <i class="fa-solid fa-circle-user text-secondary icon-sm"></i>{{ Auth::user()->name
                                    }}
                                    @endif
                                </a>
                                <hr>

                                <!-- Menu Items -->
                                <div class="row text-center">

                                    {{-- Update Profile --}}
                                    <div class="col-6 d-flex flex-column align-items-center">
                                        <a class="dropdown-item p-0" href="{{route('editProfile')}}">
                                            <i class="fa-solid fa-pen-nib text-secondary icon-sm"></i>
                                            <p class="text-secondary mt-1 mb-0 text-sm">Update</p>
                                        </a>
                                    </div>

                                    {{-- Favorite --}}
                                    <div class="col-6 d-flex flex-column align-items-center">
                                        <a class="dropdown-item p-0 position-relative"
                                            href="{{ route('consumer.showFavorites') }}">
                                            <i class="fa-regular fa-heart text-secondary fs-2"></i>
                                            @if ($favoriteCount)
                                            <span
                                                class="position-absolute top-25 start-50 translate-middle text-muted small fw-bold">
                                                {{ $favoriteCount }}
                                            </span>
                                            @endif
                                            <p class="text-secondary mt-1 mb-0 text-sm">Favorites</p>
                                        </a>
                                    </div>
                                    
                                </div>

                                <div class="row text-center">

                                    {{-- Purchase History --}}
                                    <div class="col-6 d-flex flex-column align-items-center mt-3">
                                        <a class="dropdown-item p-0" href="{{route('consumer.purchaseHistory')}}">
                                            <i class="fa-solid fa-receipt text-secondary icon-sm"></i>
                                            <p class="text-secondary mt-1 mb-0 text-sm">History</p>
                                        </a>
                                    </div>

                                    {{-- Following --}}
                                    <div class="col-6 d-flex flex-column align-items-center mt-3">
                                        <a class="dropdown-item p-0" href="{{ route('consumer.followings') }}">
                                            <i class="fa-solid fa-tractor text-secondary icon-sm"></i>
                                            <p class="text-secondary mt-1 mb-0 text-sm">Follow</p>
                                        </a>
                                    </div>

                                </div>
                                <hr>

                                <!-- Logout -->
                                <a class="dropdown-item d-flex align-items-center justify-content-center"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket text-secondary icon-sm"></i>
                                    <span class="text-secondary mt-1 mb-0 ms-2">{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        {{-- Hero Section--}}
        @if(request()->is('/'))
        <div class="top-banner">
            <video autoplay muted class="hero-video video1" id="video1">
                <source src="{{ asset('/storage/videos/top-movie1.mp4') }}" type="video/mp4">
            </video>
            <video autoplay muted class="hero-video video2" id="video2">
                <source src="{{ asset('/storage/videos/top-movie2.mp4') }}" type="video/mp4">
            </video>
            <video autoplay muted class="hero-video video3" id="video3">
                <source src="{{ asset('/storage/videos/top-movie3.mp4') }}" type="video/mp4">
            </video>

            <div class="overlay"></div>

            <div class="content">
                <h2>Welcome to</h2>
                <h2 class="animated-text text-uppercase">The Natural Yield Market</h2>
                <a href="{{ route('about') }}" class="btn btn-outline-light p-2 fs-5">About Us</a>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const videos = [
                    document.getElementById("video1"),
                    document.getElementById("video2"),
                    document.getElementById("video3"),
                ];

                let currentIndex = 0;
                let fadeDuration = 1800;
                let playDuration = 4500; 

                function playNextVideo() {
                    let currentVideo = videos[currentIndex];
                    let nextIndex = (currentIndex + 1) % videos.length;
                    let nextVideo = videos[nextIndex];

                    nextVideo.style.opacity = "0";
                    nextVideo.currentTime = 0;
                    nextVideo.play();

                    setTimeout(() => {
                        nextVideo.style.transition = `opacity ${fadeDuration}ms ease-in-out`;
                        currentVideo.style.transition = `opacity ${fadeDuration}ms ease-in-out`;
                        nextVideo.style.opacity = "1"; 
                        currentVideo.style.opacity = "0"; 
                    }, playDuration - fadeDuration); 

                    currentIndex = nextIndex;
                    setTimeout(playNextVideo, playDuration);
                }

                videos[0].style.opacity = "1";
                videos[0].play();
                setTimeout(playNextVideo, playDuration);
            });
        </script>
        @endif

        <main id="main-content">
            <div>
                @for ($i = 0; $i < 50; $i++)
                    <div class="floating-object"></div>
                @endfor
                <div class="py-5 position-relative z-1">
                    @yield('content')
                </div>
            </div>
        </main>
        
        <footer>
            <div class="container-fluid text-center">
                <div class="row">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="px-4 link-secondary fs-1 instagram" href="https://www.instagram.com/agtre.jaec/"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="px-4 link-secondary fs-1 facebook" href="https://www.facebook.com/jaec.trainee"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="px-4 link-secondary fs-1 youtube" href="https://youtube.com/channel/UCWhVH0KT-Rd_AoVmr6FXQxA?si=UgwJcF_BJei7nCac"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="px-4 link-secondary fs-1 line" href="https://page.line.me/znl1671g?openQrModal=true"><i class="fa-brands fa-line"></i></a>
                        </li>
                    </ul>                    
                    <small class="text-muted">&copy; 2024 Natural Yield Market</small>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/chart/farm-monthly-sales.js') }}"></script>
    <script src="{{ asset('js/chart/farm-follower-report.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>