@extends('layouts.farm.app')

@section('content')
<div class="container mt-3">
    {{-- Title --}}
    <h1 class="text-center mb-5">{{ $farm->farm_name }}'s Followers</h1>

    @if ($followers->isEmpty())
    <p class="text-center text-muted fs-2">No followers yet.</p>
    @else
    <div class="row g-4">
        @foreach ($followers as $follower)
        <div class="col-6">
            <div class="card h-100 shadow-sm">
                <div class="row g-0">
                    {{-- Avatar --}}
                    <div class="col-md-3">
                        @if ($follower->user->avatar)
                        <img src="{{ $follower->user->avatar }}" alt="{{ $follower->user->name }}"
                            class="card-img-top rounded-start">
                        @else
                        <div class="bg-light text-secondary" style="height: 100px; width: 100px; border-radius: 50%;">
                            <i class="fa-solid fa-circle-user fs-2"></i>
                        </div>
                        @endif
                    </div>
                    {{-- Follower Details --}}
                    <div class="col-md-9">
                        <div class="card-body d-flex align-items-center h-100">
                            <div class="row w-100">
                                {{-- Name --}}
                                <div class="col-8">
                                    <h2 class="card-title mb-0 text-ellipsis">{{ $follower->user->name }}</h2>
                                </div>
                                {{-- Prefecture --}}
                                <div class="col-4 d-flex align-items-center justify-content-end">
                                    <h2 class="text-muted my-0">
                                        {{ $follower->user->prefecture }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection