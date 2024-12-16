@extends('layouts.app')
    
@section('content')
<div class="container text-center">
    <a href="{{route('farmProfile')}}">
        <img src="/storage/images/topbanner.jpg" alt="farm picture" class="avatar-xl">
    </a>
    <p class="display-4 mt-3 text-uppercase text-yellowgreen text-shadow">
        We Appreciate<br>
        Your Rooting<br>
        <i class="fa-brands fa-pagelines"></i>
        for Our Organics
        <i class="fa-brands fa-pagelines"></i>
    </p>
</div>
@endsection