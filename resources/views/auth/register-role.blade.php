@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- Title -->
        <div class="row">
            <p class="title text-start ps-3 text-shadow">
                Are You an Organic Enthusiast or Farmer? 
            </p>
        </div>
        
        <div class="row mt-5">

            <!-- Consumer Role Form -->
            <div class="col-6">
                <form action="{{ route('storeRole') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_id" value="2">
                    <button type="submit" class="btn w-100 shadow-lg text-decoration-none py-5 d-flex flex-column justify-content-center align-items-center text-shadow btn-consumer-role">
                        <i class="fa-solid fa-cart-shopping fs-1 text-white mb-3"></i>
                        <p class="text-center title text-white">Want to buy Organics</p>
                    </button>
                </form>
            </div>                

            <!-- Farmer Role Form -->
            <div class="col-6">
                <form action="{{ route('storeRole') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_id" value="3">
                    <button type="submit" class="btn w-100 shadow-lg text-decoration-none py-5 d-flex flex-column justify-content-center align-items-center text-shadow btn-farm-role">
                        <i class="fa-solid fa-tractor fs-1 text-white mb-3"></i>
                        <p class="text-center title text-white">Organic Farmer</p>
                    </button>
                </form>
            </div>

        </div>
        
    </div>
</div>

@endsection
