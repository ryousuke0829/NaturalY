{{-- Item Name --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="item-name" class="form-label">Item Name</label><span class="text-danger">*</span>
    <input type="text" name="item-name" id="item-name" class="form-control" placeholder="Enter your organic item name" maxlength="30" aria-describedby="item-name-info">
    @error('item-name')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Category --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="item_category" class="form-label">Item Category</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="item_category" id="item_category" class="form-select" aria-describedby="item-category">
            <option value="" selected disabled>Select your main product</option>
            <!-- Root Vegetables -->
            <optgroup label="Root Vegetables">
                <option value="Onion">玉ねぎ / Onion</option>
                <option value="Carrot">人参 / Carrot</option>
                <option value="Radish">大根 / Radish</option>
                <option value="Sweet Potato">サツマイモ / Sweet Potato</option>
                <option value="Potato">じゃがいも / Potato</option>
                <option value="Turnip">カブ / Turnip</option>
                <option value="Beetroot">ビートルート / Beetroot</option>
                <option value="Yam">山芋 / Yam</option>
            </optgroup>
            <!-- Leafy Vegetables -->
            <optgroup label="Leafy Vegetables">
                <option value="Spinach">ほうれん草 / Spinach</option>
                <option value="Lettuce">レタス / Lettuce</option>
                <option value="Cabbage">キャベツ / Cabbage</option>
                <option value="Kale">ケール / Kale</option>
                <option value="Mustard Greens">からし菜 / Mustard Greens</option>
                <option value="Chard">チャード / Chard</option>
                <option value="Arugula">ルッコラ / Arugula</option>
                <option value="Komatsuna">小松菜 / Komatsuna</option>
            </optgroup>
            <!-- Fruit Vegetables -->
            <optgroup label="Fruit Vegetables">
                <option value="Tomato">トマト / Tomato</option>
                <option value="Cucumber">きゅうり / Cucumber</option>
                <option value="Eggplant">ナス / Eggplant</option>
                <option value="Bell Pepper">ピーマン / Bell Pepper</option>
                <option value="Zucchini">ズッキーニ / Zucchini</option>
                <option value="Chili Pepper">唐辛子 / Chili Pepper</option>
                <option value="Squash">カボチャ / Squash</option>
                <option value="Melon">メロン / Melon</option>
                <option value="Watermelon">スイカ / Watermelon</option>
            </optgroup>
            <!-- Legumes -->
            <optgroup label="Legumes">
                <option value="Soybean">大豆 / Soybean</option>
                <option value="Edamame">枝豆 / Edamame</option>
                <option value="Green Beans">インゲン / Green Beans</option>
                <option value="Peas">エンドウ / Peas</option>
                <option value="Mung Beans">ムング豆 / Mung Beans</option>
                <option value="Lentils">レンズ豆 / Lentils</option>
            </optgroup>
            <!-- Alliums -->
            <optgroup label="Alliums">
                <option value="Garlic">にんにく / Garlic</option>
                <option value="Ginger">生姜 / Ginger</option>
                <option value="Leek">リーク / Leek</option>
                <option value="Shallot">エシャロット / Shallot</option>
                <option value="Chives">チャイブ / Chives</option>
            </optgroup>
            <!-- Brassicas -->
            <optgroup label="Brassicas">
                <option value="Broccoli">ブロッコリー / Broccoli</option>
                <option value="Cauliflower">カリフラワー / Cauliflower</option>
                <option value="Brussels Sprouts">芽キャベツ / Brussels Sprouts</option>
                <option value="Kohlrabi">コールラビ / Kohlrabi</option>
                <option value="Bok Choy">チンゲンサイ / Bok Choy</option>
            </optgroup>
            <!-- Herbs -->
            <optgroup label="Herbs">
                <option value="Basil">バジル / Basil</option>
                <option value="Parsley">パセリ / Parsley</option>
                <option value="Cilantro">コリアンダー / Cilantro</option>
                <option value="Mint">ミント / Mint</option>
                <option value="Thyme">タイム / Thyme</option>
                <option value="Rosemary">ローズマリー / Rosemary</option>
            </optgroup>
            <!-- Other Vegetables -->
            <optgroup label="Other Vegetables">
                <option value="Asparagus">アスパラガス / Asparagus</option>
                <option value="Okra">オクラ / Okra</option>
                <option value="Fennel">フェンネル / Fennel</option>
                <option value="Celery">セロリ / Celery</option>
                <option value="Artichoke">アーティチョーク / Artichoke</option>
                <option value="Chayote">チャヨテ / Chayote</option>
            </optgroup>
            <!-- Fruit Crops -->
            <optgroup label="Fruit Crops (Optional)">
                <option value="Apple">りんご / Apple</option>
                <option value="Strawberry">いちご / Strawberry</option>
                <option value="Peach">桃 / Peach</option>
                <option value="Pear">梨 / Pear</option>
                <option value="Plum">プラム / Plum</option>
                <option value="Cherry">さくらんぼ / Cherry</option>
            </optgroup>
        </select>
    </div>
    <span class="text-muted">Select the main product you grow (e.g., onion, carrot, etc.)</span>
    @error('item_category')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Price --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="price" class="form-label">Price</label><span class="text-danger">*</span>
    <div class="input-group">
        <span class="input-group-text" id="price-info">$</span>
        <input type="number" name="price" id="price" class="form-control" placeholder="Enter your item price" aria-describedby="price-info">
    </div>
    @error('price')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Item Pictures --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <div class="row">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-4">
                <label for="item-picture-{{$i}}" class="form-label">Item Picture {{$i}}</label>
                <input type="file" name="item-picture-{{$i}}" id="item-picture-{{$i}}" class="form-control" aria-describedby="item-picture-{{$i}}-info">
                @error("item-picture-{{$i}}")
                    <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>
        @endfor
    </div>
    <p class="text-muted">Acceptable formats are jpeg, jpg, png, and gif only. Max file size is 1MB.</p>
</div>

{{-- Contents --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="contents" class="form-label">Contents</label><span class="text-danger">*</span>
    <input type="text" name="contents" id="contents" class="form-control" placeholder="Enter your item contents" aria-describedby="contents-info">
    @error('contents')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>


{{-- Expected Delivery Date --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="delivery-date" class="form-label">Expected Delivery Date</label><span class="text-danger">*</span>
    <div class="input-group">
        <select name="delivery-date" id="delivery-date" class="form-select" aria-describedby="Expected-Delivery-Date">
            <option value="" selected disabled>Expected Delivery Date</option>
                <option value="short">3~7 days</option>
                <option value="middle">7~14 days</option>
                <option value="long">14~21 days</option>
        </select>
    </div>
    @error('delivery-date')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>

{{-- Item Description --}}
<div class="col-auto align-center-end mx-5 mt-4">
    <label for="item_description" class="form-label">Item Description</label>
    <div class="input-group">
        <textarea name="item_description" id="item_description" class="form-control" placeholder="Enter a brief description of your Item" maxlength="1000" rows="5" aria-describedby="item-description-info"></textarea>
    </div>
    <span class="text-muted">Provide up to 1000 characters to describe your farm.</span>
    @error('item_description')
        <p class="text-danger small">{{$message}}</p>
    @enderror
</div>
