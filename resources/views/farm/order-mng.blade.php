@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5 px-5">
            <!-- Title -->
            <p class="title nav-color text-start mb-5 text-shadow">
                ORDER MANAGEMENT
            </p>
            {{-- Item Card --}}
            <div class="row mb-4">
                <div class="card shadow-sm p-0">
                    <div class="card-header py-1">
                        <div class="row">
                            <div class="col-2">
                                <span class="text-muted">Date of Order</span>
                                <span class="text-danger">2024/12/31</span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Quantity<br>3
                                </span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Total<br>$12.00
                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="text-muted">
                                    Shipping Adress<br>Tokyo
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/banana.jpg" class="img-fluid rounded-bottom-left img-cover h-100" alt="Item Image">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body mx-4">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center">
                                            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                                                <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="rounded-circle avatar-sm">
                                                <span class="mb-0 ms-1 fw-bold">SASAKI NATURAL FARM</span>
                                            </a>            
                                        </div>
                                        <a href="{{route('showItem')}}" class="text-decoration-none text-dark">
                                            <h2 class="card-title mt-2">Good Banana</h2>
                                            <p class="text-muted">10 bananas</p>
                                        </a>
                                    </div>
                                    <div class="col-3 d-flex align-items-center">
                                        <a href="#" class="text-decoration-none h3 text-center text-danger">
                                            Unshipped
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="card shadow-sm p-0">
                    <div class="card-header py-1">
                        <div class="row">
                            <div class="col-2">
                                <span class="text-muted">
                                    Date of Order<br>2024/12/31
                                </span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Quantity<br>3
                                </span>
                            </div>
                            <div class="col-2">
                                <span class="text-muted">
                                    Total<br>$12.00
                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="text-muted">
                                    Shipping Adress<br>Tokyo
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/banana.jpg" class="img-fluid rounded-bottom-left img-cover h-100" alt="Item Image">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body mx-4">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center">
                                            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                                                <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="rounded-circle avatar-sm">
                                                <span class="mb-0 ms-1 fw-bold">SASAKI NATURAL FARM</span>
                                            </a>            
                                        </div>
                                        <a href="{{route('showItem')}}" class="text-decoration-none text-dark">
                                            <h2 class="card-title mt-2">Good Banana</h2>
                                            <p class="text-muted">10 bananas</p>
                                        </a>
                                    </div>
                                    <div class="col-3 d-flex align-items-center">
                                        <a href="#" class="text-decoration-none h3 text-center">
                                            <i class="fa-regular fa-circle-check fs-2"></i> <br>
                                            Shipped
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection