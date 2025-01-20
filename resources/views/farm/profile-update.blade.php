@extends('layouts.farm.app')

@section('content')
<div class="container">
    <div class="card shadow bg-farmgray bg-farmgray">
        <div class="card-body py-5">
            <!-- Title -->
            <p class="title nav-color text-start mx-5 mb-5 text-shadow">
                UPDATE MY PROFILE
            </p>
            <form method="POST" action="{{route('UpdateProfile')}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                @include('partials.farm.farm-form')

                <!-- Submit Button -->
                <div class="row mx-4 mt-5">
                    <button type="submit" class="btn btn-outline-success w-100 fs-4 py-1">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection