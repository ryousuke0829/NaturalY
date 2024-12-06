@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow-lg">
            <div class="card-body">
                <!-- Title -->
                <div class="row">
                    <p class="title text-yellowgreen text-start ms-5 mt-3 ps-3">
                        Log in
                    </p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="row ms-5 mt-3">
                            <label for="email" class="col-form-label text-md-start fw-bold">
                                {{ __('Email Address') }}
                            </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="row ms-5 mt-3">
                            <label for="password" class="col-form-label text-md-start fw-bold">
                                {{ __('Password') }}
                            </label>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-11">
                            <input id="password" type="password" class="form-control         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Remember Me --}}
                    <div class="row mx-5 mt-3">
                        <div class="col">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row ms-5 my-4">
                        <div class="col-md-11">
                            <button type="submit" class="btn btn-yellowgreen w-100 fs-4 fw-bold py-1">
                                Log in
                            </button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{--Forgot Your Password? --}}
        <div class="text-end mt-3">
            @if (Route::has('password.request'))
            <a class="text-decoration-none text-dark" href="{{ route('password.request') }}">
                >>{{ __('Forgot Your Password?') }}
            </a>
            @endif 
        </div>
    </div>
</div>
@endsection
