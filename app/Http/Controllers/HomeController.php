<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{   
    private $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $user = $user;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function getItems()
    {
        return [
            [
                'image' => '/storage/images/banana.jpg',
                'favorites' => 20,
                'title' => 'Good Banana',
                'category' => 'Banana',
                'description' => '10 Bananas',
                'price' => 15.99,
                'farm_image' => '/storage/images/topbanner.jpg',
                'farm_name' => 'Farm Name',
            ]
        ];
    }
    public function getFarms()
    {
        return [
            [
                'image' => '/storage/images/topbanner.jpg',
                'name' => 'NATURAL YIELD FARM',
                'followers' => 120,
                'category' => 'Cucumber',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ]
        ];
    }

    public function index()
    {   
        $user = Auth::user();
        $items = $this->getItems(); 
        $farms = $this->getFarms(); 
        if ($user->role_id == 2) {
            return view('home', compact('items','farms'))->with('user', $user);
        } elseif ($user->role_id == 3) {
            return view('farm.index', compact('items','farms'))->with('user', $user);
        } elseif (is_null($user->role_id)) {
            return view('home', compact('items', 'farms'));
        }
    }

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

    public function allItems()
    {   
        $items = $this->getItems(); 
        return view('all-items', compact('items'));
    }

    public function allFarms()
    {   
        $farms = $this->getFarms(); 
        return view('all-farms', compact('farms'));
    }
    public function showItem()
    {   
        $reviews = [
            [
                'username' => 'Sasaki Ryosuke',
                'rating' => 4.5,
                'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'date' => '12/24/2024',
            ],
        ];
        return view('show-item', compact('reviews'));
    }
    public function cart()
    {   
        $cartItems = [
            [
                'image' => '/storage/images/banana.jpg',
                'favorites' => 10,
                'title' => 'Good Banana',
                'category' => 'Cucumber',
                'description' => 'Lorem ipsum dolor sit amet...',
                'details' => 'Vero eaque nesciunt praesentium...',
                'price' => 3.99,
                'farm_image' => '/storage/images/topbanner.jpg',
                'farm_name' => 'Farm Name',
                'quantity' => 3,
            ],
        ];
        return view('consumer.cart', compact('cartItems'));
    }
    public function order()
    {
        return view('consumer.order');
    }
    public function orderConfirm()
    {
        return view('consumer.order-confirm');
    }
    public function orderSuccess()
    {
        return view('consumer.order-success');
    }
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
    public function purchaseHistory()
    {
        return view('consumer.purchase-history');
    }
    public function review()
    {   
        return view('consumer.review');
    }

    public function farmProfile()
    {   
        $items = $this->getItems(); 
        return view('farm-profile', compact('items'));
    }
}
