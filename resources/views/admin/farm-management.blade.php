@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">FARM MANAGEMENT</h1>
    </div>
    <div class="mx-5">
        <form action="{{ route('admin.farm.search') }}">
                @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="search">Search User</span>

                <input type="text" name="search" class="form-control" value="{{ old('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <div class="mx-5 mb-2">
        @foreach ($farmProducts as $farm_product)
            <a href="{{ route('admin.farm.management', ['status' => 'active', 'product' => $farm_product]) }}" class="btn btn-success rounded-5 px-2">{{ $farm_product }}</a>
        @endforeach
    </div>

    <div class="mx-5 mb-3">
        <a href="{{ route('admin.farm.management') }}" class="btn btn-light rounded-5 px-4">All</a>
        <a href="{{ route('admin.farm.management', 'active') }}" class="btn btn-danger rounded-5 px-4">Active</a>
        <a href="{{ route('admin.farm.management', 'inactive') }}" class="btn btn-secondary rounded-5 px-4">Inactive</a>
    </div>

    <div class="mx-5 mb-3">
        @forelse ($farms as $farm)
            <a href="{{ route('admin.farm.profile', $farm->id) }}" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col-7 border-end border-secondary">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">{{ $farm->name }}</h5>
                                    <span class="badge rounded-pill bg-success">{{ $farm->first_product }}</span>
                                    <span class="badge rounded-pill bg-success">{{ $farm->second_product }}</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>{{ $farm->farm_description }}</p>
                            </div>
                        </div>
                        @if ($farm->trashed())
                            <div class="col-2 fs-3 text-secondary d-flex align-items-center">
                                <i class="fa-solid fa-user-xmark"></i> Inactive
                            </div>
                        @else
                            <div class="col-2 fs-3 text-danger d-flex align-items-center">
                                <i class="fa-solid fa-user-check"></i> Active
                            </div>
                        @endif
                    </div>
                </div>
            </a>
        @empty
            <h2 class="text-center">No Farms Yet.</h2>
        @endforelse

        <div class="justify-content-center d-flex">
            {{ $farms->links() }}
        </div>
    </div>
@endsection