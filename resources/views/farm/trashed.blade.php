@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Trashed Items</h2>

    @if (session('status'))
    <div class="alert alert-success text-center">
        {{ session('status') }}
    </div>
    @endif

    <div class="row">
        @forelse ($trashedItems as $item)
        <div class="col-md-3">
            <div class="card shadow-lg">
                <img src="{{ $item->picture_1 }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <form action="{{ route('farm.restore', $item->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Restore</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No trashed items available.</p>
        @endforelse
    </div>
</div>
@endsection
