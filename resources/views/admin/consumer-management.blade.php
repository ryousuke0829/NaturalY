@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <h1 class="fw-bold text-center">CONSUMER MANAGEMENT</h1>
    </div>
    <div class="mx-5">
        <div class="input-group mb-3">
            <span class="input-group-text" id="search">Search User</span>
            <input type="text" name="search" class="form-control" >
        </div>
    </div>
    <div class="mx-5 mb-3">
        <button type="button" class="btn btn-danger rounded-5 px-4">Active</button>
        <button type="button" class="btn btn-primary rounded-5 px-4">Inactive</button>
    </div>
    <div class="mx-5 mb-3">
        <a href="{{ route('admin.consumer.profile') }}" class="text-decoration-none mb-2">
            <div class="card rounded-5 text-center p-2 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">JOHN DOE</h5>
                            </div>
                            <div class="col text-end">
                                <p class="fs-5">Total purchase: $831</p>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <span>Start Date: August 29, 2024</span><br>
                            <span>Zip Code: 605-0001</span><br>
                            <span>Address: 123 Sakura Street, Kyoto, Japan</span><br>
                            <span>Phone Number: 0912-345-6789</span>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-danger d-flex align-items-center">
                        <i class="fa-solid fa-user-check"></i> Active
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none">
            <div class="card rounded-5 text-center p-2 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">JOHN DOE</h5>
                            </div>
                            <div class="col text-end">
                                <p class="fs-5">Total purchase: $831</p>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <span>Start Date: August 29, 2024</span><br>
                            <span>Zip Code: 605-0001</span><br>
                            <span>Address: 123 Sakura Street, Kyoto, Japan</span><br>
                            <span>Phone Number: 0912-345-6789</span>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-primary d-flex align-items-center">
                        <i class="fa-solid fa-user-xmark"></i> Inactive
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none">
            <div class="card rounded-5 text-center p-2 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">JOHN DOE</h5>
                            </div>
                            <div class="col text-end">
                                <p class="fs-5">Total purchase: $831</p>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <span>Start Date: August 29, 2024</span><br>
                            <span>Zip Code: 605-0001</span><br>
                            <span>Address: 123 Sakura Street, Kyoto, Japan</span><br>
                            <span>Phone Number: 0912-345-6789</span>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-danger d-flex align-items-center">
                        <i class="fa-solid fa-user-check"></i> Active
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="text-decoration-none">
            <div class="card rounded-5 text-center p-2 border-dark mb-3 shadow bg-body rounded">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-image fa-10x d-block text-center"></i>
                    </div>
                    <div class="col-7 border-end border-secondary">
                        <div class="row">
                            <div class="col text-start">
                                <h5 class="fw-bold fs-4">JOHN DOE</h5>
                            </div>
                            <div class="col text-end">
                                <p class="fs-5">Total purchase: $831</p>
                            </div>
                        </div>
                        <div class="text-start text-secondary fw-bold">
                            <span>Start Date: August 29, 2024</span><br>
                            <span>Zip Code: 605-0001</span><br>
                            <span>Address: 123 Sakura Street, Kyoto, Japan</span><br>
                            <span>Phone Number: 0912-345-6789</span>
                        </div>
                    </div>
                    <div class="col-2 fs-3 text-primary d-flex align-items-center">
                        <i class="fa-solid fa-user-xmark"></i> Inactive
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection