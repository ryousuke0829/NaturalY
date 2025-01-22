@extends('layouts.admin.app')

@section('content')
    @include('admin.modal.farm-status')

    <div class="mx-5 mt-5 mb-3">
        <div class="card border border-dark shadow">
            <div class="row p-4">
                <div class="col-4">
                    @if ($farm->avatar)
                        <img src="{{ $farm->avatar }}" alt="{{ $farm->name }}" class="img-thumbnail">
                    @else
                        <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-lg"></i>
                    @endif
                </div>
                <div class="col-8">
                    <h2 class="display-5 mt-4 fw-bold">{{ $farm->name }} Natural Farm</h2>
                    <div class="row">
                        <div class="col text-start">
                            <span class="badge rounded-pill bg-success">{{ $farm->first_product }}</span>
                            <span class="badge rounded-pill bg-success">{{ $farm->second_product }}</span>
                        </div>
        
                        <div class="col fw-bold">
                            {{ $farm->followers->count() }} Followers
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <p>{{ $farm->farm_description }}</p>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <h5 class="fw-bold">Farm Address</h5>
                    <span>{{ $farm->address }}</span>
                </div>
            </div>

            <div class="row mx-5 mb-5 ps-3">
                <div>
                    {{-- Farm Products --}}
                    <h5 class="fw-bold mb-3">Products</h5>
                    <div class="row g-3">
                        @forelse ($farm->items as $item)
                             <div class="col-4">
                                <a href="{{ route('admin.item.show', $item->id) }}">
                                    <div class="card h-100 shadow-lg border-1">
                                        <div class="position-relative">
                                            <img src="{{ $item->picture_1 }}" 
                                                class="card-img-top" 
                                                alt="Item Image" 
                                                style="object-fit: cover;">
                                            <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                                                10 Favorites
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <a href="#" class="card-title mb-0 h5 text-decoration-none">{{ $item->name }}</a>
                                                <button type="submit" class="btn btn-sm shadow-none p-0">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                                {{ $item->category }}
                                            </a>
                                            <p class="card-text">
                                                Contents:{{ $item->contents }} <br>
                                                {{ $item->description }}
                                            </p>
                                            <h5 class="card-text text-end">${{ $item->price }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>   
                        @empty
                            <p>No Products Yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-5">
                    <a href="{{ route('admin.farm.management') }}" class="btn btn-secondary w-50">Cancel</a>
                </div>

                <div class="col">
                    @if ($farm->trashed())
                        <button class="btn btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#activate-farm-{{ $farm->id }}">
                            Activate {{ $farm->name }}
                        </button>
                    @else
                        <button class="btn btn-outline-secondary w-100" data-bs-toggle="modal" data-bs-target="#deactivate-farm-{{ $farm->id }}">
                            Deactivate {{ $farm->name }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection