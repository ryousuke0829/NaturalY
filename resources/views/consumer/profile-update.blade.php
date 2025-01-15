@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow-lg px-5 py-3">
            <div class="card-body">

                {{-- Title --}}
                <div class="text-center mb-5">
                    <i class="fa-solid fa-pen-nib fs-1"></i>
                    <span class="title mx-1">Update Profile</span>
                    <i class="fa-solid fa-pen-nib fs-1"></i>
                </div>

                {{-- Update form --}}
                <form method="POST" action="{{ route('UpdateProfile') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @include('partials.consumer-form')
                    
                    {{-- Submit Button --}}
                    <div class="row mt-5 mx-1">
                        <button type="submit" class="btn btn-orange w-100 fs-4 py-1">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection