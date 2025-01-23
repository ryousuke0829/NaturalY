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

            @forelse ($farmFollowersCount as $farm_follower)
                <a href="#" class="text-decoration-none mb-2">
                    <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                        <div class="row">
                            <div class="col-3">
                                @if ($farm_follower->farm->avatar)
                                    <img src="{{ $farm_follower->farm->avatar }}" alt="{{ $farm_follower->farm->name }}" class="img-thumbnail">
                                @else
                                    <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                                @endif
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col text-start">
                                        <h5 class="fw-bold fs-4">{{ $farm_follower->farm->name }}</h5>
                                        <span class="badge rounded-pill bg-success">{{ $farm_follower->farm->first_product }}</span>
                                        <span class="badge rounded-pill bg-success">{{ $farm_follower->farm->second_product }}</span>
                                    </div>
                                    <div class="col text-end">
                                        <p class="fs-5">{{ $farm_follower->count }} Followers</p>
                                    </div>
                                </div>
                                <div class="text-start text-secondary fw-bold scrollable">
                                    <p>{{ $farm_follower->farm->farm_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h2 class="text-center">No records yet.</h2>
            @endforelse

            <div class="text-end">
                <a href="#" class="text-decoration-none text-dark fs-6 fw-bold">>>>Weekly and Daily data</a>
            </div>
        </div>

        <div class="row mx-5 mb-5">
            <h3>Annual Sales Ranking</h3>

            @forelse ($farmSales as $farm_sales)
                <a href="#" class="text-decoration-none mb-2">
                    <div class="card rounded-5 text-center p-3 border-dark mb-3 shadow bg-body rounded">
                        <div class="row">
                            <div class="col-3">
                                {{-- @if ($farm_sales->user->avatar)
                                    <img src="{{ $farm_sales->user->avatar }}" alt="{{ $farm_sales->user->name }}" class="img-thumbnail">
                                @else --}}
                                    <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                                {{-- @endif --}}
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col text-start">
                                        <h5 class="fw-bold fs-4">{{ $farm_sales->user->name }}</h5>
                                        <span class="badge rounded-pill bg-success">{{ $farm_sales->user->first_product }}</span>
                                        <span class="badge rounded-pill bg-success">{{ $farm_sales->user->second_product }}</span>
                                    </div>
                                    <div class="col text-end">
                                        <p class="fs-5">SALES: {{ $farm_sales->total_sales }}</p>
                                    </div>
                                </div>
                                <div class="text-start text-secondary fw-bold">
                                    <p>{{ $farm_sales->user->farm_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <h2 class="text-center">No records yet.</h2>
            @endforelse

            <div class="text-end">
                <a href="#" class="text-decoration-none text-dark fs-6 fw-bold">>>>Weekly and Daily data</a>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    @push('scripts')
    {{-- Number of customers and farmers --}}
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
        const configNumCustomersAndFarmers = {
            type: 'line',
            data: numCustomersAndFarmers
        };
        
        new Chart(
            document.getElementById('annualNumberOfCustomersAndFarmersChart'),
            configNumCustomersAndFarmers
        );
    </script>

    {{-- Number of purchase --}}
    <script>
        const numPurchase = {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            
            datasets: [{
                label: 'Annual Number of Purchase',
                data: @json($numPurchasePerMonth),
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
        const configNumPurchase = {
            type: 'line',
            data: numPurchase
        };
        
        new Chart(
            document.getElementById('annualNumberOfPurchaseChart'),
            configNumPurchase
        );
    </script>

    {{-- Amount sales --}}
    <script>
        const amountSales = {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            
            datasets: [{
                label: 'Annual Number of Purchase',
                data: @json($amountSalesPerMonth),
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
        const configAmountSales = {
            type: 'line',
            data: amountSales
        };
        
        new Chart(
            document.getElementById('annualAmountOfSalesChart'),
            configAmountSales
        );
    </script>
    @endpush
@endsection