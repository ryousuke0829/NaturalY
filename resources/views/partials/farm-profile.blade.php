<div class="container">

    <div class="card shadow-sm px-5 pb-5">

        {{-- Farm Title --}}
        <div class="row mt-4">
            <div class="col-auto">
                <img src="/storage/images/topbanner.jpg" alt="Farm Image" class="rounded-circle avatar-lg">
            </div>
            <div class="col d-flex flex-column justify-content-center ms-4">
                <h5 class="card-title mb-0 title">SASAKI NATURAL FARM</h5>
                <div class="row mb-2 d-flex">
                    <div class="col-8 flex-column">
                        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">Cucumber</a>
                        <a href="#" class="badge rounded-pill text-bg-success text-decoration-none mb-1">Rambutan</a>
                    </div>
                    <div class="col-4">
                        <h6 class="text-end">831 Followers</h6>   
                    </div>
                </div>
            </div>
        </div>

        {{-- Farm Description --}}
        <h5 class="mt-5">Farm Description</h5>
        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex velit pariatur officiis rem non quasi atque, voluptatum ipsum, ut voluptates incidunt facilis vitae ab recusandae perferendis impedit reiciendis fugiat quibusdam, harum obcaecati possimus neque! Magni consectetur itaque consequatur. Repellendus, perspiciatis dolor eligendi eius vero cum corporis deserunt ipsam a delectus.
        </p>

        {{-- Farm Adress--}}
        <h5 class="mt-4">Farm Adress</h5>
        <p>123 Sakura Street, Kyoto, Japan 605-0001</p>

        {{-- Farm Products --}}
        <h5 class="mt-4">Products</h5>
        <div class="row g-3">
            @foreach ($items as $item)
                @for ($i = 0; $i < 4; $i++)
                    @include('partials.item-card', ['item' => $item])
                @endfor
            @endforeach
        </div>

    </div>


