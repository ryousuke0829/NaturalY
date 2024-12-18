@extends('layouts.app')
    
@section('content')
    
{{-- Content Section --}}
<div class="container">

    {{-- Title --}}
    <div class="text-center mb-5">
        <i class="fa-solid fa-cash-register fs-1"></i>
        <span class="title mx-1">Place your Order</span>
        <i class="fa-solid fa-cash-register fs-1"></i>
    </div>

    <ol>
        {{-- Items for purchase --}}
        <li class="h3">Items for purchase</li>
        @for ($i = 0; $i < 3; $i++)
            <div class="card mb-3 w-100 shadow">
                <div class="row g-0 align-items-start">
                    <div class="col-md-3">
                        <img src="/storage/images/banana.jpg" class="rounded-start img-cover h-100" alt="Banana Image">
                    </div>
                    <div class="col-md-9 d-flex flex-column ">
                        <div class="card-body d-flex flex-column px-5">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">GOOD BANANA <span class="text-muted h6">(Contents：10bananas)</span></h4>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="card-text">Unit fee</span>
                                <strong class="ms-auto">$3.00</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="card-text">Expected Delivery Date</span>
                                <strong class="ms-auto">4~7days</strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="card-text">Quantity</span>
                                <strong class="ms-auto text-end">
                                    <input type="number" name="quantity" id="quantity" class="form-control-sm  px-1 w-25" value="3" aria-describedby="quantity" >
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor

        {{-- Shipping Info --}}
        <li class="h3 mt-5">Shipping Information</li>
        <div class="card shadow p-4">
            <div class="card-body">
                {{-- Name --}}
                <div class="col-auto align-center-end">
                    <label for="name" class="form-label">Shipper Name</label>
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="000-0000" value="{{ Auth::user()->name }}"
                            aria-describedby="name">
                    </div>
                    @error('name')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                {{-- Zipcode --}}
                <div class="col-auto align-center-end mt-4">
                    <label for="zipcode" class="form-label">Zip Code</label>
                    <div class="input-group">
                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="000-0000" pattern="\d{3}-\d{4}" 
                            maxlength="8" aria-describedby="zipcode-info">
                    </div>
                    @error('zipcode')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                {{-- Prefecture --}}
                <div class="col-auto align-center-end mt-4">
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
                <div class="col-auto align-center-end mt-4">
                    <label for="address" class="form-label">Address</label>
                    <div class="input-group">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your full address (excluding prefecture)" maxlength="255" aria-describedby="address-info">
                    </div>
                    @error('address')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>

                {{-- Phone Number --}}
                <div class="col-auto align-center-end mt-4">
                        <label for="phone" class="form-label">Phone Number</label>
                    <div class="input-group">
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="000-0000-0000" pattern="\d{3}-\d{4}-\d{4}" maxlength="13" aria-describedby="phone-info">
                    </div>
                    @error('phone')
                    <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Payment --}}
        <li class="h3 mt-5">Payment</li>
        <div id="paypal-button-container"></div>
        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

        <script>
            // Render the PayPal button into #paypal-button-container
            paypal.Buttons({

                style: {
                    color:  'blue',
                    shape:  'pill',
                    label:  'pay',
                    height: 40
                },
                
                // Call your server to set up the transaction
                createOrder: function(data, actions) {
                    return fetch('/demo/checkout/api/paypal/order/create/', {
                        method: 'post'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(orderData) {
                        return orderData.id;
                    });
                },

                // Call your server to finalize the transaction
                onApprove: function(data, actions) {
                    return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
                        method: 'post'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(orderData) {
                        // Three cases to handle:
                        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                        //   (2) Other non-recoverable errors -> Show a failure message
                        //   (3) Successful transaction -> Show confirmation or thank you

                        // This example reads a v2/checkout/orders capture response, propagated from the server
                        // You could use a different API or structure for your 'orderData'
                        var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                        if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                            return actions.restart(); // Recoverable state, per:
                            // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                        }

                        if (errorDetail) {
                            var msg = 'Sorry, your transaction could not be processed.';
                            if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                            if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                            return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                        }

                        // Successful capture! For demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                        // Replace the above to show a success message within this page, e.g.
                        // const element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '';
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL:  actions.redirect('thank_you.html');
                    });
                }

            }).render('#paypal-button-container');
        </script>
    </ol>
    


    {{-- Buying Button --}}
    <a href="{{route('consumer.orderConfirm')}}" class="fixed-button bg-warning text-decoration-none">
        Confirm
    </a>
</div>
@endsection
