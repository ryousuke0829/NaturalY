@extends($user->role_id === 3 ? 'layouts.farm.app' : 'layouts.app')

@section('content')

<div class="container">

    <div class="card shadow-sm px-5 pb-3">

        {{-- Item Title --}}
        <div class="row mt-4">
            <div class="col">
                <h5 class="card-title mb-0 title">{{ $item->name }}</h5>
            </div>
            <div class="col-auto d-flex flex-column justify-content-center ms-4">
                <p class="fs-2 mb-0">☆{{ $averageRating }}</p>
            </div>
        </div>

        {{-- Category Tag --}}
        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">{{ $item->category ??
            'Uncategorized' }}</a>

        {{-- Item Carousel --}}
        <div id="carouselExampleIndicators" class="carousel slide mt-3 w-75 mx-auto">
            <div class="carousel-indicators">
                @foreach([$item->picture_1, $item->picture_2, $item->picture_3, Auth::user()->avatar] as $index =>
                $picture)
                @if ($picture)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}" aria-current="true"
                    aria-label="Slide {{ $index + 1 }}"></button>
                @endif
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach([$item->picture_1, $item->picture_2, $item->picture_3, $item->user->avatar] as $index =>
                $picture)
                @if ($picture)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ $picture }}" class="d-block w-100" alt="Item Image">
                </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- Farm Name --}}
        <div class="mt-5">
            <strong>Farm</strong>
            <p class="my-0">{{ $item->user->farm_name}} <span class="text-muted"> ({{ $item->user->name }})</span></p>
        </div>

        {{-- Production Area --}}
        <strong class="mt-4">Production Area</strong>
        <span class="my-0">〒{{ $item->user->zip_code}}</span>
        <span>{{ $item->user->address}},{{ $item->user->prefecture}},JAPAN</span>

        {{-- Contents --}}
        <strong class="mt-3">Contents</strong>
        <p>{{ $item->contents}}</p>

        {{-- Item Description --}}
        <strong class="mt-3">Item Description</strong>
        <p>{{ $item->description}}</p>

        {{-- Expected Delivery Date --}}
        <strong class="mt-3">Expected Delivery Date</strong>
        <p>
            @if ($item->delivery_date == 'short')
            3~7 days
            @elseif ($item->delivery_date == 'middle')
            7~14 days
            @elseif ($item->delivery_date == 'long')
            14~21 days
            @endif
        </p>

        {{-- Price --}}
        <div class="row">
            <div class="col-8"></div>
            <div class="col-2">
                <strong class="h2">Price</strong>
            </div>
            <div class="col-2">
                <p class="h2">${{ $item->price ?? 'N/A' }}</p>
            </div>
        </div>

    </div>

    {{-- Reviews --}}
    <div class="card shadow-sm px-5 pb-3 mt-5">
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
@endif

@endsection