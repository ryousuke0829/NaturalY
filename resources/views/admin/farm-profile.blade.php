@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <div class="card border border-dark shadow">
            <div class="row p-4">
                <div class="col-4">
                    <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-lg"></i>
                </div>
                <div class="col-8">
                    <h2 class="display-5 mt-4 fw-bold">John Natural Farm</h2>
                    <div class="row">
                        <div class="col text-start">
                            <span class="badge rounded-pill bg-success">Cucumber</span>
                            <span class="badge rounded-pill bg-success">Onion</span>
                        </div>
        
                        <div class="col fw-bold">
                            800 Followers
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, magni molestiae corrupti fugiat fuga temporibus soluta iusto architecto voluptatem sed ut! Fuga deserunt debitis minus animi? Quos est officia repellat.</p>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <h5 class="fw-bold">Farm Address</h5>
                    <span>123 Sakura street, Tokyo</span>
                </div>
            </div>

            <div class="row mx-5 mb-5 ps-3">
                <div>
                    {{-- Farm Products --}}
                    <h5 class="fw-bold mb-3">Products</h5>
                    <div class="row g-3">
                        <div class="col-4">
                            <a href="#">
                                <div class="card h-100 shadow-lg border-1">
                                    <div class="position-relative">
                                        <img src="/storage/images/banana.jpg" 
                                            class="card-img-top" 
                                            alt="Item Image" 
                                            style="object-fit: cover;">
                                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                                            10 Favorites
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
                                            <button type="submit" class="btn btn-sm shadow-none p-0">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                            Cucumber
                                        </a>
                                        <p class="card-text">
                                            Contents:{{"#"}} <br>
                                            Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                                        <h5 class="card-text text-end">$3.00</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <div class="card h-100 shadow-lg border-1">
                                                    <img src="/storage/images/banana.jpg" 
                                        class="card-img-top" 
                                        alt="Item Image" 
                                        style="object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                                        10 Favorites
                                    </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
                                        <button type="submit" class="btn btn-sm shadow-none p-0">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                    <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                        Cucumber
                                    </a>
                                    <p class="card-text">
                                        Contents:{{"#"}} <br>
                                        Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                                    <h5 class="card-text text-end">$3.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card h-100 shadow-lg border-1">
                                                    <img src="/storage/images/banana.jpg" 
                                        class="card-img-top" 
                                        alt="Item Image" 
                                        style="object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 " style="font-size: 0.8rem;">
                                        10 Favorites
                                    </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <a href="#" class="card-title mb-0 h5 text-decoration-none">Item Title</a>
                                        <button type="submit" class="btn btn-sm shadow-none p-0">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                    <a href="#" class="badge text-bg-success text-decoration-none mb-2">
                                        Cucumber
                                    </a>
                                    <p class="card-text">
                                        Contents:{{"#"}} <br>
                                        Lorem aaa aaa ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, perferendis.</p>
                                    <h5 class="card-text text-end">$3.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-5">
                    <a href="#" class="btn btn-secondary w-50">Cancel</a>
                </div>

                <div class="col">
                    <a href="#" class="btn btn-outline-danger w-100">Active</a>
                </div>
            </div>
        </div>
    </div>
@endsection