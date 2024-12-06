@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <!-- Title -->
            <div class="row">
                <p class="title text-yellowgreen text-start ps-3">
                    {{ __('Are You an Organic Enthusiast or Farmer?') }}
                </p>
            </div>

            <div class="row mt-5">

                <div class="col-6">
                    <a href="{{route('registerConsumer')}}" class="btn w-100 shadow-lg text-decoration-none py-5 d-flex flex-column justify-content-center align-items-center" 
                        style="height: 30vh; background-image: linear-gradient(180deg, #f6b13b 0%, #ffda9b 80%, #fff8ec 100%); color: #ffff;">
                        <i class="fa-solid fa-cart-shopping fs-1 text-white mb-3"></i>
                        <p class="text-center title text-white" style="text-shadow: 1px 1px 3px rgb(81, 81, 81);">Want to buy Organics</p>
                    </a>
                </div>                

                <div class="col-6">
                    <a href="{{route('registerFarm')}}" class="btn w-100 shadow-lg text-decoration-none py-5 d-flex flex-column justify-content-center align-items-center" 
                        style="height: 30vh; background-image: linear-gradient(180deg, #70B563 0%, #c6ffbb 80%, #f1ffee 100%); color: #ffff;">
                        <i class="fa-solid fa-tractor fs-1 text-white mb-3"></i>
                        <p class="text-center title text-white" style="text-shadow: 1px 1px 3px rgb(81, 81, 81);">Organic Fermer</p>
                    </a>
                </div>

            </div>
            
    </div>
</div>

@endsection
