@extends($user->role_id === 3 ? 'layouts.farm.app' : 'layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm px-5 pb-3 bg-farmgray">

        {{-- Item Title --}}
        <div class="row mt-4">
            <div class="col">
                <h5 class="card-title mb-0 title ps-0">{{ $item->name }}</h5>
            </div>
            <div class="col-auto d-flex flex-column justify-content-center ms-4">
                <p class="fs-2 mb-0">☆{{ $averageRating }}</p>
            </div>
        </div>

        {{-- Category Tag --}}
        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">{{ $item->category ??
            'Uncategorized' }}</a>

        {{-- Item Carousel --}}
        <div id="carouselExampleIndicators" class="carousel slide mt-3 w-75 mx-auto" data-bs-ride="carousel">
            @php
                $pictures = array_values(array_filter([$item->picture_1, $item->picture_2, $item->picture_3, $item->user->avatar]));
                $slides = count($pictures);
            @endphp
        
            @if ($slides > 1)
            <div class="carousel-indicators">
                @foreach($pictures as $index => $picture)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                        class="{{ $index == 0 ? 'active' : '' }}" aria-current="true"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            @endif
        
            <div class="carousel-inner">
                @foreach($pictures as $index => $picture)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $picture }}" class="d-block w-100" alt="Item Image">
                    </div>
                @endforeach
            </div>
        
            @if($slides > 1)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            @endif
        </div>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var carouselElement = document.getElementById('carouselExampleIndicators');
                var carousel = new bootstrap.Carousel(carouselElement, {
                    interval: false, 
                    wrap: true 
                });
        
                var slides = document.querySelectorAll('#carouselExampleIndicators .carousel-item').length;
        
                if (slides <= 3) { 
                    document.querySelector(".carousel-control-next").addEventListener("click", function () {
                        let activeItem = document.querySelector('#carouselExampleIndicators .carousel-item.active');
                        let activeIndex = [...activeItem.parentElement.children].indexOf(activeItem);
                        if (activeIndex === slides - 1) { 
                            carousel.to(0);
                        }
                    });
        
                    document.querySelector(".carousel-control-prev").addEventListener("click", function () {
                        let activeItem = document.querySelector('#carouselExampleIndicators .carousel-item.active');
                        let activeIndex = [...activeItem.parentElement.children].indexOf(activeItem);
                        if (activeIndex === 0) { 
                            carousel.to(slides - 1);
                        }
                    });
                }
            });
        </script>
        
        
        <div class="container py-4">
            {{-- Farm Information --}}
            <div class="pb-3 mb-3 border-bottom">
                <h4 class="text-dark fw-bold">Farm</h4>
                <p class="text-dark  fw-bold mb-1">{{ $item->user->farm_name}}</p>
                <p class="text-muted">({{ $item->user->name }})</p>
            </div>
        
            {{-- Production Area --}}
            <div class="pb-3 mb-3 border-bottom">
                <h5 class="text-dark fw-bold">Production Area</h5>
                <p class="mb-0 text-muted">〒{{ $item->user->zip_code}}</p>
                <p class="mb-0">{{ $item->user->address}}, {{ $item->user->prefecture}}, JAPAN</p>
            </div>
        
            {{-- Contents & Description --}}
            <div class="pb-3 mb-3 border-bottom">
                <h5 class="text-dark fw-bold">Contents</h5>
                <p class="text-muted">{{ $item->contents}}</p>
        
                <h5 class="text-dark fw-bold mt-3">Item Description</h5>
                <p class="text-muted">{{ $item->description}}</p>
            </div>
        
            {{-- Expected Delivery Date --}}
            <div class="pb-3 mb-3 border-bottom">
                <h5 class="text-dark fw-bold">Expected Delivery Date</h5>
                <p class="fs-5">
                    @if ($item->delivery_date == 'short')
                        <span class="text-muted">3~7 days</span>
                    @elseif ($item->delivery_date == 'middle')
                        <span class="text-muted">7~14 days</span>
                    @elseif ($item->delivery_date == 'long')
                        <span class="text-muted">14~21 days</span>
                    @endif
                </p>
            </div>
        
            {{-- Price --}}
            <h2 class="text-black fw-bold text-end">PRICE: ${{ $item->price ?? 'N/A' }}</h2>
        </div>
        

    </div>

    {{-- Reviews --}}
    <div class="card shadow-sm px-5 pb-3 mt-5 bg-farmgray">
        <h5 class="card-title mb-0 fs-1 text-center mt-4 mb-5 title">REVIEW</h5>
        @include('partials.review')
    </div>

</div>

@if ($user->role_id == 2)
{{-- Add to Cart Button --}}
<form action="{{ route('consumer.addToCart') }}" method="POST" class="fixed-button bg-warning text-decoration-none">
    @csrf
    <input type="hidden" name="item_id" value="{{ $item->id }}">
    <button type="submit" class="btn btn-link p-0 text-decoration-none">
        <i class="fa-solid fa-cart-shopping fs-3 text-white">＋</i>
    </button>
</form>
@elseif ($user->role_id == 3)
{{-- Edit Button --}}
<a href="{{ route('farm.editItem', ['item_id' => $item->id]) }}" class="fixed-button bg-success text-decoration-none">
    <i class="fa-solid fa-pen-nib fs-2"></i>
</a>
<div class="container">
    <form action="{{ route('farm.deleteItem', ['item_id' => $item->id]) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to permanently delete this item? This action cannot be undone.');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger w-100 mt-5 py-2 fs-5">
            <i class="fa-solid fa-trash"></i> Delete
        </button>
    </form>
</div>
@endif

@endsection