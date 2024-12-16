<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $items = $this->getItems(); 
        $farms = $this->getFarms(); 
    
        return view('home', compact('items','farms'));
    }
    

    public function registerRole()
    {
        return view('auth.register_role');
    }

    public function registerConsumer()
    {
        return view('auth.register_consumer');
    }

    public function registerFarm()
    {
        return view('auth.register_farm');
    }

    public function registerHome()
    {
        return view('home');
    }

    public function allItems()
    {   
        $items = $this->getItems(); 
        return view('all_items', compact('items'));
    }

    public function allFarms()
    {   
        $farms = $this->getFarms(); 
        return view('all_farms', compact('farms'));
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
        return view('show_item', compact('reviews'));
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
        return view('consumer.order_confirm');
    }
    public function orderSuccess()
    {
        return view('consumer.order_success');
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
        return view('consumer.purchase_history');
    }
    public function review()
    {   
        return view('consumer.review');
    }
    public function profile()
    {
        return view('consumer.profile');
    }
    public function profileUpdate()
    {
        return view('consumer.profile_update');
    }
    public function farmProfile()
    {   
        $items = $this->getItems(); 
        return view('farm_profile', compact('items'));
    }
}
