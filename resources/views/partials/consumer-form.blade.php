{{-- Avatar --}}
<div class="mb-4">
    <div class="text-center mb-3">
        @if ($user->avatar)
        <img src="{{$user->avatar}}" alt="{{$user->id}}" class="rounded-circle avatar-lg">
        @else
        <i class="fa-solid fa-circle-user text-secondary icon-lg"></i>
        @endif
    </div>
    <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="avatar-info">
    <small id="avatar-info" class="form-text text-muted">
        Acceptable formats: jpeg, jpg, png, gif. Max size: 1MB.
    </small>
    @error('avatar')
    <p class="text-danger small">{{ $message }}</p>
    @enderror
</div>

{{-- Zip code --}}
<div class="mb-4">
    <label for="zip_code" class="form-label">Zip Code</label>
    <input type="text" name="zip_code" id="zip_code" value="{{old('zip_code',$user->zip_code)}}" class="form-control"
        placeholder="000-0000" pattern="\d{3}-\d{4}" maxlength="8">
    @error('zip_code')
    <p class="text-danger small">{{ $message }}</p>
    @enderror
</div>

{{-- Prefecture --}}
<div class="mb-4">
    <label for="prefecture" class="form-label">Prefecture</label>
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
<div class="mb-4">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" id="address" value="{{old('address',$user->address)}}" class="form-control"
        placeholder="Enter your full address" maxlength="255">
    @error('address')
    <p class="text-danger small">{{ $message }}</p>
    @enderror
</div>

{{-- Phone Number --}}
<div class="mb-5">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="tel" name="phone_number" id="phone_number" value="{{old('phone_number',$user->phone_number)}}"
        class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13">
    @error('phone_number')
    <p class="text-danger small">{{ $message }}</p>
    @enderror
</div>