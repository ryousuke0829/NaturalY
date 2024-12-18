<div class="col-3">
    <div class="card h-100 shadow-lg border-1">
        <a href="{{route('farm.itemUpdate')}}" class="text-decoration-none text-dark">
            <div class="position-relative">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="Item Image">
                <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 ">
                    {{ $item['favorites'] }} Favorites
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p class="card-title mb-0 h5">{{ $item['title'] }}</p>
                    <button type="submit" class="btn btn-sm shadow-none p-0">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                    {{ $item['category'] }}
                </a>
                <p class="card-text">
                    Contents: {{ $item['description'] }} <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <h5 class="card-text text-end">${{ $item['price'] }}</h5>
            </div>
        </a>
    </div>
</div>
