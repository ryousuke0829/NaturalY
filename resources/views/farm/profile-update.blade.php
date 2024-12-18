@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5">
            <!-- Title -->
            <p class="title nav-color text-start mx-5 mb-5 text-shadow">
                UPDATE MY PROFILE
            </p>
            <form method="GET" action="{{route('farm.index')}}">
                @csrf
                @include('partials.farm.farm-form')
                <!-- Submit Button -->
                <div class="row mx-4 mt-5">
                    <div class="col-3">
                        <a href="javascript:history.back()" class="btn btn-outline-secondary w-100 fs-4 py-1">Cancel</a>
                    </div>
                    <div class="col-9">
                        <button type="submit" class="btn btn-outline-success w-100 fs-4 py-1">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection