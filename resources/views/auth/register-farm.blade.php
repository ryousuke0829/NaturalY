@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body py-5">
            <!-- Title -->
            <p class="title text-yellowgreen text-start mx-5 mb-5">
                Let's Regist Your Profile and Farm info
            </p>
            <form method="GET" action="{{route('index')}}">
                @csrf
                @include('partials.farm.farm-form')
                <!-- Submit Button -->
                <div class="row mx-5 mt-5">
                    <button type="submit" class="btn btn-yellowgreen w-100 fs-4 py-1">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection