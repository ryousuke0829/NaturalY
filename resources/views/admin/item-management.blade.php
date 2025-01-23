@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">ITEM MANAGEMENT</h1>
    </div>
    <div class="mx-5">
        <form action="{{ route('admin.item.search') }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="search">Search Item</span>

                <input type="text" name="search" class="form-control" value="{{ old('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    
    <div class="mx-5 mb-2">
        @foreach ($itemsCategories as $item_category)
            <a href="{{ route('admin.item.management', ['status' => 'active', 'category' => $item_category]) }}" class="btn btn-success rounded-5 px-2">{{ $item_category }}</a>
        @endforeach
    </div>

    <div class="mx-5 mb-3">
        <a href="{{ route('admin.item.management') }}" class="btn btn-light rounded-5 px-4">All</a>
        <a href="{{ route('admin.item.management', 'active') }}" class="btn btn-danger rounded-5 px-4">Active</a>
        <a href="{{ route('admin.item.management', 'inactive') }}" class="btn btn-secondary rounded-5 px-4">Inactive</a>
    </div>
    <div class="mx-5 mb-3">
        @forelse ($items as $item)
            <a href="{{ route('admin.item.show', $item->id) }}" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            @if ($item->picture_1)
                                <img src="{{ $item->picture_1 }}" alt="{{ $item->name }}" class="img-thumbnail">
                            @else
                                <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                            @endif
                        </div>
                        <div class="col-7 border-end border-secondary">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">{{ $item->name }}</h5>
                                    <span class="badge rounded-pill bg-success">{{ $item->category }}</span>
                                </div>
                                <div class="col text-end">
                                    {{-- <h5 class="fs-4"><i class="fa-regular fa-star"></i> 4.9</h5> --}}
                                    <span>Total Sales Quantity: {{ $item->orderItems->sum('quantity') }} units</span>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @if ($item->trashed())
                            <div class="col-2 fs-3 text-secondary d-flex align-items-center">
                                <i class="fa-solid fa-ban"></i> Inactive
                            </div>
                        @else
                            <div class="col-2 fs-3 text-danger d-flex align-items-center">
                                <i class="fa-solid fa-circle-check"></i> Active
                            </div>
                        @endif
                    </div>
                </div>
            </a>
            @empty
            <h2 class="text-center">No items yet.</h2>
        @endforelse

        <div class="justify-content-center d-flex">
            {{ $items->links() }}
        </div>
    </div>
@endsection