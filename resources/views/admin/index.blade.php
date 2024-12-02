@extends('layouts.admin.app')

@section('content')
    <div class="row ms-5 mt-5">
        <div class="col-2">
            <img src="{{ asset('storage/images/admin-icon.png') }}" alt="admin-logo" class="img-thumbnail border-0 d-block mx-auto avatar-lg">
        </div>
        <div class="col-10 mb-5">
            <div class="row mb-2">
                <h6>THE ADMIN</h6>
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <h1 class="display-6 mb-0">John Doe</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row ms-5 mt-3">
        <div class="col">
            <h4>AFFILIATION</h4>
            <p>The marketing Department of Natural Corporation</p>
        </div>
        
    </div>
@endsection