<div class="row d-flex align-items-center mb-1">
    <div class="col-auto pe-0">
        <i class="fa-solid fa-circle-user text-secondary icon-sm"></i>
    </div>
    <div class="col">
        <p class="mb-0 h4">{{ $review['username'] }}</p>
    </div>
    <div class="col">
        <p class="mb-0 text-end h5">☆{{ $review['rating'] }}</p>
    </div>
</div>
<p class="mb-0">{{ $review['comment'] }}</p>
<p class="text-end text-muted text-sm my-0">{{ $review['date'] }}</p>
<hr class="mt-0 mb-5">
