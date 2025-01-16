@forelse ($reviews as $review)
<hr class="mt-0">
<div class="bg-light d-flex justify-content-between align-items-center">
    <div>
        <span class="h3">{{ $review->title }}</span>
    </div>
    <div>
        <span class="h3">☆{{ $review->rating }}.0</span>
    </div>
</div>
<div>
    <h4 class="card-title text-primary mb-2"></h4>
    <p class="card-text">{{ $review->comment }}</p>
</div>
<div class="ms-auto small">

    <div class="row g-1">
        <div class="col-auto text-muted">Reviewed by</div>
        @if ($review->user_id === Auth::id())
        <span class="col text-primary">You</span>
        @else
        <div class="col text-muted">
            {{ $review->user->name ?? 'Anonymous' }}
        </div>
        @endif
    </div>
    <div class="row g-1">
        <div class="col-auto text-muted">Reviewed on</div>
        <div class="col text-muted">{{ $review->created_at->format('Y/m/d H:i') }}</div>
    </div>
</div>
@empty
<p class="text-center text-muted">No reviews available.</p>
@endforelse