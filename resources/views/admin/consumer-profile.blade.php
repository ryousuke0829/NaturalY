@extends('layouts.admin.app')

@section('content')
    <div class="mx-5 mt-5 mb-3">
        <div class="card border border-dark shadow">
            <div class="row p-5">
                <div class="col-4">
                    <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-lg"></i>
                </div>
                <div class="col-8">
                    <h2 class="display-5 mt-4">John Doe</h2>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Zip Code</span><br>
                    <span>605-1001</span>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Address</span><br>
                    <span>123 Sakura street, Tokyo</span>
                </div>
            </div>

            <div class="row mx-5 mb-3 ps-3">
                <div class="col-4">
                    <span class="fw-bold">Phone Number</span><br>
                    <span>090-0831-0808</span>
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