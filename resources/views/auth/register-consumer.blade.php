@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body p-5">
            <!-- Title -->
            <p class="title text-orange bg-transparent text-start mb-5">
                Create Your Profile
            </p>

            <form method="POST" action="{{route('storeProfile')}}" enctype="multipart/form-data">

                @csrf
                @include('partials.consumer-form')
                
                <!-- Submit Button -->
                <div class="row mt-5 mx-1">
                    <button type="submit" class="btn btn-orange w-100 fs-4 py-1">
                        Create
                    </button>
                </div>
            </form>
        
        </div>
    </div>
</div>
@endsection