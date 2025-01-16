<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Farm\FarmController;
use App\Http\Controllers\Farm\FarmOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FollowController;

use Illuminate\Support\Facades\Route;

/**
 * Routes related to Regular(all) users
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
// Show general pages
Route::get('/all-farms', [HomeController::class, 'allFarms'])->name('allFarms');
Route::get('/farm-profile', [HomeController::class, 'farmProfile'])->name('farmProfile');
Route::get('/farm-info/{farm_id}', [HomeController::class, 'showFarmProfile'])->name('showfarmProfile');
Route::get('/all-items', [HomeController::class, 'allItems'])->name('allItems');
Route::get('/show-item/{item_id}', [HomeController::class, 'showItem'])->name('showItem');
Route::get('/about', function () {return view('about');})->name('about');
// Search 
Route::get('/search-items', [HomeController::class, 'searchItems'])->name('searchItems');
Route::get('/search-farms', [HomeController::class, 'searchFarms'])->name('searchFarms');

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

    // Resister for users
    Route::get('/select-role', [ProfileController::class, 'selectRole'])->name('registerRole'); 
    Route::post('/register-form', [ProfileController::class, 'storeRole'])->name('storeRole');
    Route::get('/register-consumer', [ProfileController::class, 'showRegiserConsumer'])->name('showRegiserConsumer');
    Route::get('/register-farm', [ProfileController::class, 'showRegiserFarm'])->name('showRegiserFarm');
    Route::post('/store-profile', [ProfileController::class, 'storeProfile'])->name('storeProfile');
    Route::post('/register-farm', [ProfileController::class, 'registerFarm'])->name('registerFarm');

    // Update Profile for cnsumer and farm
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('editProfile');
    Route::patch('/profile/update', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');

    /**
     * Routes related to CONSUMER
     */
    Route::group(['prefix'=>'consumer', 'as'=>'consumer.'],function(){

        // Profile
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showProfile');

        // Cart
        Route::post('/cart/add', [CartController::class, 'addToCart'])->name('addToCart');
        Route::get('/cart', [CartController::class, 'showCart'])->name('showCart');
        Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('updateQuantity');
        Route::get('/order', [CartController::class, 'showOrder'])->name('showOrder');

        // Order Items
        Route::post('/save-shipping-info-to-session', [OrderController::class, 'saveShippingInfoToSession'])->name('saveShippingInfoToSession');
        Route::get('/order/confirm', [CartController::class, 'showOrderConfirmation'])->name('showOrderConfirmation');
        Route::post('/order/complete', [OrderController::class, 'store'])->name('orderComplete');
        Route::get('/order/complete', [OrderController::class, 'complete'])->name('orderComplete');
        Route::get('/purchase-history', [OrderController::class, 'purchaseHistory'])->name('purchaseHistory');

        // Review
        Route::get('/review/{orderItemId}', [ReviewController::class, 'create'])->name('review');
        Route::post('/review/{orderItemId}', [ReviewController::class, 'storeReview'])->name('storeReview');
        
        // Favorite
        Route::post('/favorites/{item_id}/add', [FavoriteController::class, 'addToFavorites'])->name('addToFavorites');
        Route::post('/favorites/{item_id}/remove', [FavoriteController::class, 'removeFromFavorites'])->name('removeFromFavorites');
        Route::get('/favorites', [FavoriteController::class, 'showFavorites'])->name('showFavorites');

        // Follow
        Route::get('/followings', [FollowController::class, 'followings'])->name('followings');
        Route::post('/follow/{farm_id}', [FollowController::class, 'follow'])->name('follow');
        Route::post('/unfollow/{farm_id}', [FollowController::class, 'unfollow'])->name('unfollow');
        Route::post('/consumer/toggle-follow/{farm_id}', [FollowController::class, 'toggleFollow'])->name('toggleFollow');
    });

    /**
     * Routes related to FARM
     */
    Route::group(['prefix'=>'farm', 'as'=>'farm.', 'middleware'=>'auth'],function(){

        Route::get('/', [FarmController::class, 'index'])->name('index');

        // Item Listing
        Route::get('/list-item', [FarmController::class, 'createItem'])->name('createItem');
        Route::post('/store-item', [FarmController::class, 'storeItem'])->name('storeItem');
        Route::get('/item/{item_id}', [FarmController::class, 'showItem'])->name('showItem');
        Route::get('/item/edit/{item_id}', [FarmController::class, 'editItem'])->name('editItem');
        Route::patch('/item/update/{item_id}', [FarmController::class, 'updateItem'])->name('updateItem');

        // Follow
        Route::get('/farm/{farm_id}/followers', [FollowController::class, 'showFollowers'])->name('showFollowers');

        // Order Management
        Route::get('/order-management', [FarmOrderController::class, 'orderMng'])->name('orderMng');
        Route::patch('/orders/{id}/status', [FarmOrderController::class, 'updateStatus'])->name('orders.updateStatus');

        // Pending Route
        Route::get('/analysis', [FarmController::class, 'analysis'])->name('analysis');
    });

    /**
     * Routes related to ADMIN
     */
    Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'admin'],function(){
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        // CONSUMER
        Route::get('/consumer-management/{status?}', [AdminHomeController::class, 'consumerManagement'])->name('consumer.management');
        Route::get('/consumer/{id}/profile', [AdminHomeController::class, 'consumerProfile'])->name('consumer.profile');
        Route::delete('/consumer/{user}/deactivate', [AdminHomeController::class, 'consumerDeactivate'])->name('consumer.deactivate');
        Route::patch('/consumer/{user}/activate', [AdminHomeController::class, 'consumerActivate'])->withTrashed()->name('consumer.activate');
        Route::get('/consumer/search', [AdminHomeController::class, 'consumerSearch'])->name('consumer.search');

        // FARM
        Route::get('/farm-management/{status?}/{product?}', [AdminHomeController::class, 'farmManagement'])->name('farm.management');
        Route::get('/farm/{id}/profile', [AdminHomeController::class, 'farmProfile'])->name('farm.profile');
        Route::get('/farm/search', [AdminHomeController::class, 'farmSearch'])->name('farm.search');
        Route::delete('/farm/{user}/deactivate', [AdminHomeController::class, 'farmDeactivate'])->name('farm.deactivate');
        Route::patch('/farm/{user}/activate', [AdminHomeController::class, 'farmActivate'])->withTrashed()->name('farm.activate');

        // ITEM
        Route::get('/item-management/{status?}/{category?}', [AdminHomeController::class, 'itemManagement'])->name('item.management');
        Route::get('/item/{item}/show', [AdminHomeController::class, 'showItem'])->withTrashed()->name('item.show');
        Route::get('/item/search', [AdminHomeController::class, 'itemSearch'])->name('item.search');
        Route::delete('/item/{item}/deactivate', [AdminHomeController::class, 'itemDeactivate'])->name('item.deactivate');
        Route::patch('/item/{item}/activate', [AdminHomeController::class, 'itemActivate'])->withTrashed()->name('item.activate');

        Route::get('/analysis', [AdminHomeController::class, 'analysis'])->name('analysis');
    });

});
