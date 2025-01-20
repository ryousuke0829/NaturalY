{{-- Farm --}}
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

<body class="bg-farm">
    <div id="app">
        @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
        @endif
        <nav class="navbar navbar-expand-md navbar-light shadow-sm position-fixed top-0 w-100 farm-nav-bg">
            <div class="container">
                <a class="navbar-brand logo d-flex align-items-center" href="{{route('farm.index')}}">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="NaturalY Logo" class="farm-logo-style">
                    <span class="farm-brand-text">NaturalY</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="my-auto me-5 nav-text">Hello, <span class="fw-bold fs-5">{{ Auth::user()->name
                                }}</span> san!!</li>

                        {{-- Hamburger --}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link mx-auto text-center nav-link right-item" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                                <i class="fa-solid fa-burger fs-3 nav-item nav-icon"></i>
                                <span class="nav-text">Menu</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-4" aria-labelledby="navbarDropdown">
                                <!-- User Icon and Name -->
                                <a class="dropdown-item d-flex align-items-center justify-content-center gap-1"
                                    href="{{route('farm.index')}}">
                                    @if (Auth::user()->avatar)
                                    <img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}"
                                        class="rounded-circle avatar-sm">
                                    <strong class="text-secondary">{{ Auth::user()->name }}</strong>
                                    @else
                                    <i class="fa-solid fa-circle-user text-secondary icon-sm"></i> <strong
                                        class="text-secondary">{{ Auth::user()->name }}</strong>
                                    @endif
                                </a>
                                <hr>

                                <!-- Menu Items -->
                                <div class="row text-center">

                                    {{-- Item Listing --}}
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <a class="dropdown-item w-auto" href="{{route('farm.createItem')}}">
                                            <i class="fa-solid fa-apple-whole text-secondary icon-sm"></i>
                                            <p class="text-secondary my-auto">List Item</p>
                                        </a>
                                    </div>

                                    {{-- Order Mng --}}
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <a class="dropdown-item w-auto" href="{{route('farm.orderMng')}}">
                                            <i class="fa-solid fa-truck-fast text-secondary icon-sm"></i>
                                            <p class="text-secondary my-auto">Order Mng</p>
                                        </a>
                                    </div>

                                    {{-- Analysis --}}
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <a class="dropdown-item w-auto" href="#">
                                            <i class="fa-solid fa-chart-line text-secondary icon-sm"></i>
                                            <p class="text-secondary my-auto">Analysis</p>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <!-- Logout -->
                                <a class="dropdown-item d-flex align-items-center justify-content-center"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket text-secondary icon-sm"></i>
                                    <span class="text-secondary my-auto ms-2">{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main id="main-content">
            <div class="bg-farm">
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
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>