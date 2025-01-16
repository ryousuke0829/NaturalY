<div class="col-3">
    <div class="card h-100 shadow-lg border-1 {{ $item->trashed() ? 'inactive-item' : '' }}">
        <a href="{{ route('showItem', ['item_id' => $item->id]) }}"
            class="text-decoration-none text-dark {{ $item->trashed() && auth()->id() !== $item->user_id ? 'disabled' : '' }}">         
            <div class="position-relative">
                <img src="{{ $item->picture_1 }}" class="card-img-top" alt="Item Image">
                <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50">
                    {{ $item->favoriteCount() }} {{ $item->favoriteCount() === 1 ? 'Favorite' : 'Favorites' }}
                </div>
            </div>
        </a>
        <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <p class="card-title mb-0 h5 text-ellipsis">{{ $item->name }}</p>
            </div>
            <span class="badge text-bg-success text-decoration-none mb-2">
                {{ $item->category }}
            </span>
            <p class="card-text my-0">Contents: {{ $item->contents }}</p>
            <p class="card-text scrollable">
                {{ $item->description }}
            </p>
        </div>

        <div class="d-flex justify-content-between align-items-center p-2">
            <h5 class="card-text mx-2 my-auto">${{ $item->price }}</h5>

            <form action="{{ route('farm.toggleVisibility', ['item_id' => $item->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm">
                    <span class="fs-5 item-status {{ $item->trashed() ? 'text-secondary' : 'text-success' }}">
                        <i class="fa-solid fa-rotate fw-bold"></i>
                        {{ $item->trashed() ? 'Inactive' : 'Active' }}
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>
