<?php
namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\ServiceProvider;
use App\Models\CartItem;
use App\Models\Favorite; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $favoriteCount = Auth::check()
                ? Favorite::where('user_id', Auth::id())->count()
                : 0;

            $view->with('favoriteCount', $favoriteCount);
        });

        View::composer('*', function ($view) {
            $cartQuantity = 0;

            if (Auth::check() && Auth::user()->cart) {
                $cartQuantity = CartItem::where('cart_id', Auth::user()->cart->id)->sum('quantity');
            }

            $view->with('cartQuantity', $cartQuantity);
        });
    }
}
