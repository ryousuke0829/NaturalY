@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-4 shadow-lg">
            <div class="card-body">
                <!-- Title -->
                <div class="row">
                    <p class="title text-orange text-start ms-5 my-5 ps-3">
                        {{ __("Let's Resiter Your Profile") }}
                    </p>
                </div>

                <form method="GET" action="{{route('registerHome')}}">
                    @csrf

                    <!-- Avatar -->
                    <div class="d-flex justify-content-center">
                        <i class="fa-solid fa-circle-user text-secondary d-block icon-lg"></i>
                    </div>
                    <div class="col-auto align-center-end mx-5 mt-3">
                        <label for="file" class="form-label">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="avatar-info">
                        <span class="text-muted">Acceptable formats are jpeg, jpg, png, and gif only.Max file size is 1048kb</span>
                        @error('file')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- Zipcode --}}
                    <div class="col-auto align-center-end mx-5 mt-4">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <div class="input-group">
                            <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="000-0000" pattern="\d{3}-\d{4}" 
                                maxlength="8" aria-describedby="zipcode-info">
                        </div>
                        <span class="text-muted">Enter your postal code in the format 000-0000.</span>
                        @error('zipcode')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- Prefecture --}}
                    <div class="col-auto align-center-end mx-5 mt-4">
                        <label for="prefecture" class="form-label">Prefecture</label>
                        <div class="input-group">
                            <select name="prefecture" id="prefecture" class="form-select" aria-describedby="prefecture-info">
                                <option value="" selected disabled>Select your prefecture</option>
                                <option value="Hokkaido">Hokkaido / 北海道</option>
                                <option value="Aomori">Aomori / 青森県</option>
                                <option value="Iwate">Iwate / 岩手県</option>
                                <option value="Miyagi">Miyagi / 宮城県</option>
                                <option value="Akita">Akita / 秋田県</option>
                                <option value="Yamagata">Yamagata / 山形県</option>
                                <option value="Fukushima">Fukushima / 福島県</option>
                                <option value="Ibaraki">Ibaraki / 茨城県</option>
                                <option value="Tochigi">Tochigi / 栃木県</option>
                                <option value="Gunma">Gunma / 群馬県</option>
                                <option value="Saitama">Saitama / 埼玉県</option>
                                <option value="Chiba">Chiba / 千葉県</option>
                                <option value="Tokyo">Tokyo / 東京都</option>
                                <option value="Kanagawa">Kanagawa / 神奈川県</option>
                                <option value="Niigata">Niigata / 新潟県</option>
                                <option value="Toyama">Toyama / 富山県</option>
                                <option value="Ishikawa">Ishikawa / 石川県</option>
                                <option value="Fukui">Fukui / 福井県</option>
                                <option value="Yamanashi">Yamanashi / 山梨県</option>
                                <option value="Nagano">Nagano / 長野県</option>
                                <option value="Gifu">Gifu / 岐阜県</option>
                                <option value="Shizuoka">Shizuoka / 静岡県</option>
                                <option value="Aichi">Aichi / 愛知県</option>
                                <option value="Mie">Mie / 三重県</option>
                                <option value="Shiga">Shiga / 滋賀県</option>
                                <option value="Kyoto">Kyoto / 京都府</option>
                                <option value="Osaka">Osaka / 大阪府</option>
                                <option value="Hyogo">Hyogo / 兵庫県</option>
                                <option value="Nara">Nara / 奈良県</option>
                                <option value="Wakayama">Wakayama / 和歌山県</option>
                                <option value="Tottori">Tottori / 鳥取県</option>
                                <option value="Shimane">Shimane / 島根県</option>
                                <option value="Okayama">Okayama / 岡山県</option>
                                <option value="Hiroshima">Hiroshima / 広島県</option>
                                <option value="Yamaguchi">Yamaguchi / 山口県</option>
                                <option value="Tokushima">Tokushima / 徳島県</option>
                                <option value="Kagawa">Kagawa / 香川県</option>
                                <option value="Ehime">Ehime / 愛媛県</option>
                                <option value="Kochi">Kochi / 高知県</option>
                                <option value="Fukuoka">Fukuoka / 福岡県</option>
                                <option value="Saga">Saga / 佐賀県</option>
                                <option value="Nagasaki">Nagasaki / 長崎県</option>
                                <option value="Kumamoto">Kumamoto / 熊本県</option>
                                <option value="Oita">Oita / 大分県</option>
                                <option value="Miyazaki">Miyazaki / 宮崎県</option>
                                <option value="Kagoshima">Kagoshima / 鹿児島県</option>
                                <option value="Okinawa">Okinawa / 沖縄県</option>
                                <option value="Overseas">Overseas / 海外</option>
                            </select>
                        </div>
                        @error('prefecture')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div class="col-auto align-center-end mx-5 mt-4">
                        <label for="address" class="form-label">Address</label>
                        <div class="input-group">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter your full address (excluding prefecture)" maxlength="255" aria-describedby="address-info">
                        </div>
                        @error('address')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div class="col-auto align-center-end mx-5 mt-4">
                            <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13" aria-describedby="phone-info">
                        </div>
                        @error('phone')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="row ms-5 mt-5 mb-2">
                        <div class="col-md-11">
                            <button type="submit" class="btn btn-orange w-100 fs-4 fw-bold py-1">
                                Resister
                            </button>                                
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
