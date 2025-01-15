<div class="container mt-5">
    <div class="card shadow-sm px-5 pb-5">

        <div class="row mt-4">
            <div class="col-auto">
                @if ($farm->avatar)
                <img src="{{ $farm->avatar }}" alt="Farm Image" class="rounded-circle avatar-lg">
                @else
                <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded-circle text-secondary"
                    style="width: 100px; height: 100px;">
                    <i class="fa-solid fa-tractor fs-2"></i>
                </div>
                @endif
            </div>
            <div class="col d-flex flex-column justify-content-center ms-4">
                <h5 class="card-title mb-0 title">{{ $farm->farm_name }}</h5>
                <div class="row mb-2 d-flex">
                    <div class="col-8 flex-column">
                        @if ($farm->first_product)
                        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">{{
                            $farm->first_product }}</a>
                        @endif
                        @if ($farm->second_product)
                        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">{{
                            $farm->second_product }}</a>
                        @endif
                    </div>
                    <div class="col-4">
                        <h2 class="text-end text-muted me-5">
                            {{ $farm->followers->count() }}
                            {{ $farm->followers->count() === 1 ? 'Follower' : 'Followers' }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- Farm Description --}}
        <h5 class="mt-5">Farm Description</h5>
        <p class="card-text">{{ $farm->farm_description }}</p>

        {{-- Farm Address --}}
        <h5 class="mt-4">Farm Address</h5>
        <p>{{ $farm->address ?? 'Address not provided' }}</p>

        {{-- Farm Products --}}
        <h5 class="mt-4">Products</h5>
        <div class="row g-3">
            @forelse ($farm->items as $item)
            @include('partials.item-card', ['item' => $item])
            @empty
            <p class="text-muted">No products available from this farm.</p>
            @endforelse
        </div>

    </div>
</div>