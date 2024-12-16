<div class="col-md-3 col-sm-6 col-12">
    <div class="card shadow-sm border-1">
        <!-- Image -->
        <div class="position-relative">
            <img src="{{ $item['image'] }}" class="card-img-top" alt="Item Image">
            <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50">
                {{ $item['favorites'] }} Favorites
            </div>
        </div>

        <div class="card-body d-flex flex-column px-2pb-0">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <a href="#" class="card-title mb-0 h5 text-decoration-none">{{ $item['title'] }}</a>
                <button type="submit" class="btn btn-sm shadow-none p-0">
                    <i class="fa-regular fa-heart fs-5"></i>
                </button>
            </div>
            <div>
                <a href="#" class="badge text-bg-success text-decoration-none rounded-pill mb-1">
                    {{ $item['category'] }}
                </a>
            </div>
            <p class="card-text small mb-1">
                Contents: {{ $item['description'] }} <br>
                {{ $item['details'] }}
            </p>
            <h5 class="card-text text-end mb-0">${{ $item['price'] }}</h5>
        </div>

        <div class="card-footer py-1 bg-light mt-0">
            <a href="#" class="text-decoration-none text-dark">
                <div class="d-flex align-items-center">
                    <img src="{{ $item['farm_image'] }}" alt="Farm Image" class="rounded-circle avatar-sm">
                    <div class="ms-2">
                        <p class="mb-0 small">{{ $item['farm_name'] }}</p>
                    </div>
                </div>
            </a>
            {{-- Quantity --}}
            <div class="my-2 d-flex align-items-center justify-content-between">
                <button type="button" class="btn btn-light">ー</button>
                <h5 class="m-0">{{ $item['quantity'] }}</h5>
                <button type="button" class="btn btn-light">＋</button>
            </div>                    
        </div>
    </div>
</div>
