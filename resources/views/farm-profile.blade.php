@extends('layouts.app')
    
@section('content')

    @include('partials.farm-profile')


    {{-- Fixed Button --}}
    <a href="{{ route('consumer.followings') }}" class="fixed-button bg-warning text-decoration-none text-center d-flex flex-column align-items-center small">
        <i class="fa-solid fa-user-plus fs-4"></i>
        <span class="fw-bold">Follow !</span>
    </a>
    
@endsection