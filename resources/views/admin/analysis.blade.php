@extends('layouts.admin.app')

@section('content')
    <div class="bg-white p-2">
        <div class="row mx-5 mt-5 mb-3">
            <div class="col-2">
                <img src="{{ asset('storage/images/admin-icon.png') }}" alt="admin-logo" class="img-thumbnail border-0 d-block mx-auto avatar-lg">
            </div>
            <div class="col-10">
                <div class="row mb-2">
                    <h6 class="fw-bold">Natural Yield Market</h6>
                </div>
                <div class="row mb-3">
                    <div class="col-auto">
                        <h1 class="display-4 mb-0">ANALYSIS</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-5 mb-5">
            <div class="col">
                <canvas id="annualNumberOfCustomersAndFarmersChart"></canvas>
            </div>
            <div class="col">
                <canvas id="annualNumberOfPurchaseChart"></canvas>
            </div>
        </div>

        <div class="row mx-5 mb-5">
            <div class="col">
                <canvas id="annualAmountOfSalesChart"></canvas>
            </div>
            <div class="col">
                <canvas id="annualNumberOfUserBYSChart"></canvas>
            </div>
        </div>

        <div class="row mx-5 mb-5">
            <h3>Annual Follower Ranking</h3>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <div class="text-end">
                <a href="#" class="text-decoration-none text-dark fs-6 fw-bold">>>>Weekly and Daily data</a>
            </div>
        </div>

        <div class="row mx-5 mb-5">
            <h3>Annual Sales Ranking</h3>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none mb-2">
                <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-start">
                                    <h5 class="fw-bold fs-4">JOHN DOE</h5>
                                    <span class="badge rounded-pill bg-success">Cucumber</span>
                                </div>
                                <div class="col text-end">
                                    <p class="fs-5">831 Followers</p>
                                </div>
                            </div>
                            <div class="text-start text-secondary fw-bold">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, facere blanditiis? Porro iste minima blanditiis rem cupiditate assumenda est nostrum ut? Quas reprehenderit vel est natus, laborum perspiciatis dolore id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <div class="text-end">
                <a href="#" class="text-decoration-none text-dark fs-6 fw-bold">>>>Weekly and Daily data</a>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    @push('scripts')
    <script>
        const numCustomersAndFarmers = {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            
            datasets: [{
                label: 'Annual Number of Customers and Farmers',
                data: @json($numCustomersAndFarmers),
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
        const config = {
            type: 'line',
            data: numCustomersAndFarmers
        };
        
        new Chart(
            document.getElementById('annualNumberOfCustomersAndFarmersChart'),
            config
        );
    </script>
    @endpush
@endsection