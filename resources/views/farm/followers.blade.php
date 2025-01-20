@extends('layouts.farm.app')

@section('content')
<div class="container mt-3 d-flex flex-column" style="min-height: 100vh;">
    {{-- Title --}}
    <h1 class="text-center mb-5">{{ $farm->farm_name }}'s Followers</h1>

    @if ($followers->isEmpty())
        <p class="text-center text-muted fs-2 flex-grow-1">No followers yet.</p>
    @else
        <div class="row g-4 align-items-stretch">
            @foreach ($followers as $follower)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <div class="row g-0 flex-grow-1">
                        {{-- Avatar --}}
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            @if ($follower->user->avatar)
                                <img src="{{ $follower->user->avatar }}" alt="{{ $follower->user->name }}" class="rounded-circle avatar-md">
                            @else
                                <div class="bg-light text-secondary d-flex align-items-center justify-content-center rounded-circle">
                                    <i class="fa-solid fa-circle-user  icon-md"></i>
                                </div>
                            @endif
                        </div>

                        {{-- Follower Details --}}
                        <div class="col-9 d-flex align-items-center">
                            <div class="w-100">
                                {{-- Name --}}
                                <h3 class="mb-0 text-ellipsis">{{ $follower->user->name }}</h3>
                                {{-- Prefecture --}}
                                <p class="text-muted my-0">{{ $follower->user->prefecture }}</p>
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
