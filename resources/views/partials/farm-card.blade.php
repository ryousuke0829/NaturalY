<div class="col-6">
    <a href="{{ route('farmProfile') }}" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $farm['image'] }}" class="img-fluid rounded-start img-cover h-100" alt="Farm Image"">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <h6 class="card-title mb-0">{{ $farm['name'] }}</h6>
                            </div>
                            <div class="col">
                                <h6 class="text-muted text-end">{{ $farm['followers'] }} Followers</h6>
                            </div>
                        </div>
                        <p class="badge text-bg-success text-decoration-none mb-2 rounded-pill">{{ $farm['category'] }}</p>
                        <p class="card-text small">
                            {{ $farm['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
