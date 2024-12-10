@extends('layouts.app')
    
@section('content')
<div class="container text-center">
    <a href="{{route('farmProfile')}}">
        <img src="/storage/images/topbanner.jpg" alt="farm picture" style="width:300px; height:300px; border-radius:50%; object-fit:cover;">
    </a>
    <p class="display-4 mt-3 text-uppercase text-success" style="text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5)">
        We Appreciate<br>
        Your Rooting<br>
        <i class="fa-brands fa-pagelines"></i>
        for Our Organics
        <i class="fa-brands fa-pagelines"></i>
    </p>
</div>
@endsection