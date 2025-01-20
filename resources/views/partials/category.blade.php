@php
    $routeName = Route::currentRouteName();

    if ($routeName === 'storeProfile') {
        $selectedValue = 'Please select';
    } else {
        $selectedValue = ($name === 'category')
            ? old($name, $item->$name ?? '')
            : old($name, $user->$name ?? '');
    }
@endphp

<!-- デフォルトの選択肢 -->
<option value="" disabled {{ $selectedValue == '' ? 'selected' : '' }}>Please select</option>

<!-- Root Vegetables -->
<optgroup label="Root Vegetables">
    <option value="Onion" {{ $selectedValue == 'Onion' ? 'selected' : '' }}>Onion</option>
    <option value="Carrot" {{ $selectedValue == 'Carrot' ? 'selected' : '' }}>Carrot</option>
    <option value="Radish" {{ $selectedValue == 'Radish' ? 'selected' : '' }}>Radish</option>
    <option value="Sweet Potato" {{ $selectedValue == 'Sweet Potato' ? 'selected' : '' }}>Sweet Potato</option>
    <option value="Potato" {{ $selectedValue == 'Potato' ? 'selected' : '' }}>Potato</option>
    <option value="Turnip" {{ $selectedValue == 'Turnip' ? 'selected' : '' }}>Turnip</option>
    <option value="Beetroot" {{ $selectedValue == 'Beetroot' ? 'selected' : '' }}>Beetro


<!-- Root Vegetables -->
<option value="" disabled {{ $selectedValue == 'Please select' ? 'selected' : '' }}>Please select</option>

<optgroup label="Root Vegetables">
    <option value="Onion" {{ $selectedValue == 'Onion' ? 'selected' : '' }}>Onion</option>
    <option value="Carrot" {{ $selectedValue == 'Carrot' ? 'selected' : '' }}>Carrot</option>
    <option value="Radish" {{ $selectedValue == 'Radish' ? 'selected' : '' }}>Radish</option>
    <option value="Sweet Potato" {{ $selectedValue == 'Sweet Potato' ? 'selected' : '' }}>Sweet Potato</option>
    <option value="Potato" {{ $selectedValue == 'Potato' ? 'selected' : '' }}>Potato</option>
    <option value="Turnip" {{ $selectedValue == 'Turnip' ? 'selected' : '' }}>Turnip</option>
    <option value="Beetroot" {{ $selectedValue == 'Beetroot' ? 'selected' : '' }}>Beetroot</option>
    <option value="Yam" {{ $selectedValue == 'Yam' ? 'selected' : '' }}>Yam</option>
</optgroup>

<!-- Leafy Vegetables -->
<optgroup label="Leafy Vegetables">
    <option value="Spinach" {{ $selectedValue == 'Spinach' ? 'selected' : '' }}>Spinach</option>
    <option value="Lettuce" {{ $selectedValue == 'Lettuce' ? 'selected' : '' }}>Lettuce</option>
    <option value="Cabbage" {{ $selectedValue == 'Cabbage' ? 'selected' : '' }}>Cabbage</option>
    <option value="Kale" {{ $selectedValue == 'Kale' ? 'selected' : '' }}>Kale</option>
    <option value="Mustard Greens" {{ $selectedValue == 'Mustard Greens' ? 'selected' : '' }}>Mustard Greens</option>
    <option value="Chard" {{ $selectedValue == 'Chard' ? 'selected' : '' }}>Chard</option>
    <option value="Arugula" {{ $selectedValue == 'Arugula' ? 'selected' : '' }}>Arugula</option>
    <option value="Komatsuna" {{ $selectedValue == 'Komatsuna' ? 'selected' : '' }}>Komatsuna</option>
</optgroup>

<!-- Fruit Vegetables -->
<optgroup label="Fruit Vegetables">
    <option value="Tomato" {{ $selectedValue == 'Tomato' ? 'selected' : '' }}>Tomato</option>
    <option value="Cucumber" {{ $selectedValue == 'Cucumber' ? 'selected' : '' }}>Cucumber</option>
    <option value="Eggplant" {{ $selectedValue == 'Eggplant' ? 'selected' : '' }}>Eggplant</option>
    <option value="Bell Pepper" {{ $selectedValue == 'Bell Pepper' ? 'selected' : '' }}>Bell Pepper</option>
    <option value="Zucchini" {{ $selectedValue == 'Zucchini' ? 'selected' : '' }}>Zucchini</option>
    <option value="Chili Pepper" {{ $selectedValue == 'Chili Pepper' ? 'selected' : '' }}>Chili Pepper</option>
    <option value="Squash" {{ $selectedValue == 'Squash' ? 'selected' : '' }}>Squash</option>
    <option value="Melon" {{ $selectedValue == 'Melon' ? 'selected' : '' }}>Melon</option>
    <option value="Watermelon" {{ $selectedValue == 'Watermelon' ? 'selected' : '' }}>Watermelon</option>
</optgroup>

<!-- Legumes -->
<optgroup label="Legumes">
    <option value="Soybean" {{ $selectedValue == 'Soybean' ? 'selected' : '' }}>Soybean</option>
    <option value="Edamame" {{ $selectedValue == 'Edamame' ? 'selected' : '' }}>Edamame</option>
    <option value="Green Beans" {{ $selectedValue == 'Green Beans' ? 'selected' : '' }}>Green Beans</option>
    <option value="Peas" {{ $selectedValue == 'Peas' ? 'selected' : '' }}>Peas</option>
    <option value="Mung Beans" {{ $selectedValue == 'Mung Beans' ? 'selected' : '' }}>Mung Beans</option>
    <option value="Lentils" {{ $selectedValue == 'Lentils' ? 'selected' : '' }}>Lentils</option>
</optgroup>

<!-- Alliums -->
<optgroup label="Alliums">
    <option value="Garlic" {{ $selectedValue == 'Garlic' ? 'selected' : '' }}>Garlic</option>
    <option value="Ginger" {{ $selectedValue == 'Ginger' ? 'selected' : '' }}>Ginger</option>
    <option value="Leek" {{ $selectedValue == 'Leek' ? 'selected' : '' }}>Leek</option>
    <option value="Shallot" {{ $selectedValue == 'Shallot' ? 'selected' : '' }}>Shallot</option>
    <option value="Chives" {{ $selectedValue == 'Chives' ? 'selected' : '' }}>Chives</option>
</optgroup>

<!-- Brassicas -->
<optgroup label="Brassicas">
    <option value="Broccoli" {{ $selectedValue == 'Broccoli' ? 'selected' : '' }}>Broccoli</option>
    <option value="Cauliflower" {{ $selectedValue == 'Cauliflower' ? 'selected' : '' }}>Cauliflower</option>
    <option value="Brussels Sprouts" {{ $selectedValue == 'Brussels Sprouts' ? 'selected' : '' }}>Brussels Sprouts</option>
    <option value="Kohlrabi" {{ $selectedValue == 'Kohlrabi' ? 'selected' : '' }}>Kohlrabi</option>
    <option value="Bok Choy" {{ $selectedValue == 'Bok Choy' ? 'selected' : '' }}>Bok Choy</option>
</optgroup>

<!-- Herbs -->
<optgroup label="Herbs">
    <option value="Basil" {{ $selectedValue == 'Basil' ? 'selected' : '' }}>Basil</option>
    <option value="Parsley" {{ $selectedValue == 'Parsley' ? 'selected' : '' }}>Parsley</option>
    <option value="Cilantro" {{ $selectedValue == 'Cilantro' ? 'selected' : '' }}>Cilantro</option>
    <option value="Mint" {{ $selectedValue == 'Mint' ? 'selected' : '' }}>Mint</option>
    <option value="Thyme" {{ $selectedValue == 'Thyme' ? 'selected' : '' }}>Thyme</option>
    <option value="Rosemary" {{ $selectedValue == 'Rosemary' ? 'selected' : '' }}>Rosemary</option>
</optgroup>

<!-- Fruit Crops -->
<optgroup label="Fruit Crops (Optional)">
    <option value="Apple" {{ $selectedValue == 'Apple' ? 'selected' : '' }}>Apple</option>
    <option value="Strawberry" {{ $selectedValue == 'Strawberry' ? 'selected' : '' }}>Strawberry</option>
    <option value="Peach" {{ $selectedValue == 'Peach' ? 'selected' : '' }}>Peach</option>
    <option value="Pear" {{ $selectedValue == 'Pear' ? 'selected' : '' }}>Pear</option>
    <option value="Plum" {{ $selectedValue == 'Plum' ? 'selected' : '' }}>Plum</option>
    <option value="Cherry" {{ $selectedValue == 'Cherry' ? 'selected' : '' }}>Cherry</option>
    <option value="Banana" {{ $selectedValue == 'Banana' ? 'selected' : '' }}>Banana</option>
</optgroup>
