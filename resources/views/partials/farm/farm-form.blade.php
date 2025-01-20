<!-- Avatar -->
<div class="text-center mb-3">
    @if ($user->avatar)
    <img src="{{$user->avatar}}" alt="{{$user->id}}" class="rounded-circle avatar-lg">
    @else
    <i class="fa-solid fa-circle-user text-secondary icon-lg"></i>
    @endif
</div>
<div class="col-auto d-flex flex-column mx-5 mt-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="avatar-info">
    <span id="avatar-info" class="text-muted">Acceptable formats are jpeg, jpg, png, and gif only. Max file size is
        1MB</span>
    @error('avatar')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Farm Name --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="address" class="form-label">Farm Name</label>
    <div class="input-group">
        <input type="text" name="farm_name" id="farm_name" value="{{old('farm_name',$user->farm_name)}}"
            class="form-control" maxlength="255" aria-describedby="farm-name-info">
    </div>
    @error('farm_name')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Zip_code --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="zip_code" class="form-label">Farm Zip Code</label>
    <div class="input-group">
        <input type="text" name="zip_code" id="zip_code" value="{{old('zip_code',$user->zip_code)}}"
            class="form-control" placeholder="000-0000" pattern="\d{3}-\d{4}" maxlength="8"
            aria-describedby="zip_code-info">
    </div>
    @error('zip_code')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Prefecture --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="prefecture" class="form-label">Farm Prefecture</label>
    <div class="input-group">
        <select name="prefecture" id="prefecture" class="form-select" aria-describedby="prefecture-info">
            @include('partials.prefecture')
        </select>
    </div>
    @error('prefecture')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Address --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="address" class="form-label">Farm Address</label>
    <div class="input-group">
        <input type="text" name="address" id="address" value="{{old('address',$user->address)}}" class="form-control"
            placeholder="Enter your full farm address (excluding prefecture)" maxlength="255"
            aria-describedby="address-info">
    </div>
    @error('address')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Phone Number --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="phone_number" class="form-label">Phone Number</label>
    <div class="input-group">
        <input type="tel" name="phone_number" id="phone_number" value="{{old('phone_number',$user->phone_number)}}"
            class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13"
            aria-describedby="phone_number-info">
    </div>
    @error('phone_number')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Your 1st Product --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="first_product" class="form-label">Your 1st Product</label>
    <div class="input-group">
        <select name="first_product" id="first_product" class="form-select" aria-describedby="first_product">
            <!-- Defolaut -->
            @include('partials.category', ['name' => 'first_product', 'user' => $user])
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('first_product')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Your 2nd Product --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="second_product" class="form-label">Your 2nd Product</label>
    <div class="input-group">
        <select name="second_product" id="second_product" class="form-select" aria-describedby="second_product">
            @include('partials.category', ['name' => 'second_product', 'user' => $user])
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('second_product')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Farm Description --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="farm_description" class="form-label">Farm Description</label>
    <div class="input-group">
        <textarea name="farm_description" id="farm_description" class="form-control"
            placeholder="Enter a brief description of your farm" maxlength="1000" rows="5"
            aria-describedby="farm-description-info">{{old('farm_description',$user->farm_description)}}</textarea>
    </div>
    <span class="text-muted">Provide up to 1000 characters to describe your farm.</span>
    @error('farm_description')
    <p class="text-danger small">{{$message}}</p>
    @enderror
</div>