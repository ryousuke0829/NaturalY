<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\OrderItem;
use App\Models\Review;
use App\Models\Follow;
use App\Models\Favorite;

class HomeController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $user;
    private $item;
    public function __construct(User $user, Item $item)
    {
        $this->middleware('auth');
        $user = $user;
        $this->item=$item; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getFarms()
    {
        return User::where('role_id', 3)->orderBy('created_at', 'desc');
    }
    public function getItems()
    {
        return Item::orderBy('created_at', 'desc');
    }

    // Home Page
    public function index()
    {   
        $user = Auth::user();
        $items = $this->getItems()->take(8)->get();
        $farms = $this->getFarms()->take(4)->get()->map(function ($farm) {
            $farm->followers_count = $farm->followers()->count();
            return $farm;
        });
    
        return $this->redirectBasedOnRole($user, $items, $farms,);
    }

    public function allItems()
    {   
        $items = $this->getItems()->paginate(8);
        return view('all-items', compact('items'));
    }

    public function allFarms()
    {   
        $farms = $this->getFarms()->paginate(4); 
        return view('all-farms', compact('farms'));
    }
    
    // Register
    public function storeRole()
    {
        return view('auth.register-consumer');
    }

    public function registerFarm()
    {
        return view('auth.register-farm');
    }

    public function registerHome()
    {
        return view('home');
    }

    public function showItem($item_id)
    {   
        $orderItems = OrderItem::where('item_id', $item_id)->pluck('id');
        
        $reviews = Review::with('user')
            ->whereIn('order_item_id', $orderItems)
            ->get();
    
        $item = $this->item->findOrFail($item_id);
    
        $averageRating = $reviews->count() > 0
        ? number_format($reviews->avg('rating'), 1)
        : 'N/A';
    
        $user = Auth::user();
    
        return view('show-item', compact('item', 'user', 'reviews', 'averageRating'));
    }
    


    // Tentative method
    public function favorites()
    {   
        $items = $this->getItems(); 
        return view('consumer.favorites', compact('items'));
    }
    public function followings()
    {   
        $farms = $this->getfarms(); 
        return view('consumer.followings', compact('farms'));
    }

    public function showFarmProfile($farm_id)
    {
        $user = Auth::user();
        $farm = User::where('id', $farm_id)
            ->where('role_id', 3)
            ->with('items')
            ->firstOrFail();
        
        $isFollowing = Follow::where('user_id', $user->id)->where('farm_id', $farm_id)->exists();

        return view('farm-profile', compact('farm', 'isFollowing'));
    }
}
