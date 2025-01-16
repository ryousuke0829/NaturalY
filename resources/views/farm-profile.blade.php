@extends('layouts.app')

@section('content')

@include('partials.farm-profile')

{{-- Fixed Button --}}
<form action="{{ route('consumer.toggleFollow', ['farm_id' => $farm->id]) }}" method="POST"
    class="fixed-button text-decoration-none text-center d-flex flex-column align-items-center small bg-warning">
    @csrf
    @if($isFollowing)
    {{-- Followed --}}
    <button type="submit" class="btn text-center text-white border-0">
        <span class="fw-bold d-block">Unfollow</span>
    </button>
    @else
    {{-- Unfollow --}}
    <button type="submit" class="btn text-center text-white border-0">
        <i class="fa-solid fa-user-plus fs-4"></i>
        <span class="fw-bold d-block">Follow</span>
    </button>
    @endif
</form>



@endsection