<div class="container">

    <div class="card shadow-sm p-5 pb-5 mt-5 bg-farmgray bg-farmgray">

        {{-- Farm Title --}}
        <div class="row">
            <div class="col-auto">
                @if ($user->avatar)
                <img src="{{$user->avatar}}" alt="{{$user->id}}" class="rounded-circle avatar-lg">
                @else
                <i class="fa-solid fa-circle-user text-secondary icon-md"></i>
                @endif
            </div>
            <div class="col d-flex flex-column justify-content-center ms-4">
                <p class="card-title mb-0 ps-0 title">{{$user->farm_name}}</p>
                <p class="text-muted mb-0">Host Farmer：{{$user->name}}</p>
                <div class="row mb-2 d-flex">
                    <div class="col-8 flex-column">
                        <span href="#"
                            class="badge rounded-pill text-bg-success text-decoration-none mb-1">{{$user->first_product}}</span>
                        <span href="#"
                            class="badge rounded-pill text-bg-success text-decoration-none mb-1">{{$user->second_product}}</span>
                    </div>
                    <div class="col-4 text-end">
                        <a href="{{ route('farm.showFollowers', ['farm_id' => $user->id]) }}"
                            class="text-decoration-none text-dark fs-2">
                            {{ $user->followers_count }} {{ str('Follower')->plural($user->followers_count) }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Farm Description --}}
        <h5 class="mt-5">Farm Description</h5>
        <p class="card-text">
            {{$user->farm_description}}
        </p>

        {{-- Farm Adress--}}
        <h5 class="mt-4">Farm Adress</h5>
        <p>{{$user->address}}, {{$user->prefecture}}, #{{$user->zip_code}}, JAPAN</p>

        <h5 class="mt-4">Products</h5>
        <div class="row">
            @foreach ($items as $item)
                @include('partials.farm.item-card', ['item' => $item])
            @endforeach
        </div>
    </div>
    