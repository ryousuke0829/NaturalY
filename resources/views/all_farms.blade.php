<style>

</style>
@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <p class="title mb-3">Good Organic Farms</p>
    <div class="row g-3">
    
    {{-- Search bar --}}
    <form action="#" class="w-100">
        <div class="input-group">
            <span class="input-group-text bg-secondary text-white px-4" id="search-label">
                <i class="fa-solid fa-search"></i>
            </span>
            <input 
                type="search" 
                name="search" 
                class="form-control form-control-sm" 
                placeholder="Search organic..." 
                aria-label="Search organic" 
                aria-describedby="search-label">
        </div>
        {{-- Category Tag --}}
        <div class="mt-0">
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Cucumber</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Rambutan</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Apple</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Mango</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Tomato</a>
            <a href="#" class="badge rounded-pill text-bg-success text-decoration-none">Ube</a>
        </div>
    </form>

    {{-- Farm Card --}}
    <div class="row mt-3">
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>  
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('farmProfile')}}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="/storage/images/topbanner.jpg" class="img-fluid rounded-start" alt="Farm Image" style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-8">
                                        <h5 class="card-title mb-0">Farm Name</h5>
                                    </div>
                                    <div class="col-4 ">
                                        <h6 class="text-muted text-end">〇〇 Followers</h6>   
                                    </div>
                                </div>
                                <p class="badge text-bg-success text-decoration-none mb-2">Cucumber</p>
                                <p class="card-text small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aaaaasss accusamus!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>            
        </div>
        
    </div>

    {{-- Pagination --}}
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
        </ul>
    </nav>
</div>
@endsection