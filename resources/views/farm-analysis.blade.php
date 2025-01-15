@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center text-primary mb-5">
        <i class="fa-solid fa-chart-line fs-1"></i>
        <span class="fw-bold display-6 ms-2">Analysis</span>
    </div>

    <div class="card mb-3 w-100 px-4 pt-3 bg-primary text-white">
        <h1>Total Monthly Sales Report</h1>
        <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between">
                <span class="card-text fw-bold">Sales Amount:</span>
                <strong class="ms-auto fs-4">$730.00</strong>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span class="card-text fw-bold">Sales Quantity:</span>
                <strong class="ms-auto fs-4">190</strong>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span class="card-text fw-bold">Number of Likes:</span>
                <strong class="ms-auto fs-4">900</strong>
            </div>
            <hr>
        </div>
    </div>

    <div class="mb-5 bg-white">
        <canvas id="farmMonthlySalesChart"></canvas>
    </div>

    <div class="row g-5 mb-5">
        <div class="col-4">
            <a href="#">
                <div class="card shadow-lg border-1 mb-3">
                    <div class="position-relative">
                        <img src="/storage/images/banana.jpg" class="card-img-top" alt="Item Image"
                            style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 "
                            style="font-size: 0.8rem;">
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
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </div>
            </a>

            <div class="card text-white bg-primary mb-3">
                <h4 class="p-3">Monthly</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>

            <div class="card text-white bg-primary">
                <h4 class="p-3">Total</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <a href="#">
                <div class="card shadow-lg border-1 mb-3">
                    <img src="/storage/images/banana.jpg" class="card-img-top" alt="Item Image"
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 "
                        style="font-size: 0.8rem;">
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
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </div>
            </a>

            <div class="card text-white bg-primary mb-3">
                <h4 class="p-3">Monthly</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>

            <div class="card text-white bg-primary">
                <h4 class="p-3">Total</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <a href="#">
                <div class="card shadow-lg border-1 mb-3">
                    <img src="/storage/images/banana.jpg" class="card-img-top" alt="Item Image"
                        style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 px-2 text-white bg-danger opacity-50 "
                        style="font-size: 0.8rem;">
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
                        <h5 class="card-text text-end">$3.00</h5>
                    </div>
                </div>
            </a>

            <div class="card text-white bg-primary mb-3">
                <h4 class="p-3">Monthly</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>

            <div class="card text-white bg-primary">
                <h4 class="p-3">Total</h4>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Amount:</span>
                    </div>
                    <div class="col text-end">
                        <span>$99.00</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Sales Quantity:</span>
                    </div>
                    <div class="col text-end">
                        <span>33</span>
                    </div>
                </div>

                <div class="row px-3 mb-2">
                    <div class="col text-start">
                        <span>Number of Likes:</span>
                    </div>
                    <div class="col text-end">
                        <span>833</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <div class="card mb-3 px-4 pt-3 bg-warning text-white">
            <h1>Follower Report</h1>
            <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <span class="card-text fw-bold">Total Followers:</span>
                    <strong class="ms-auto fs-4">$730.00</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="card-text fw-bold">Monthly Followers:</span>
                    <strong class="ms-auto fs-4">190</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="card-text fw-bold">Yearly Followers:</span>
                    <strong class="ms-auto fs-4">900</strong>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="mb-5 bg-white">
        <canvas id="farmFollowerChart"></canvas>
    </div>

</div>
@endsection