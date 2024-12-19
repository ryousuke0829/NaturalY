<?php

namespace App\Http\Controllers\Farm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmController extends Controller
{
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
        return view('farm.index', compact('items'));
    }
    public function profileUpdate()
    {   
        return view('farm.profile-update');
    }
    public function itemList()
    {   
        return view('farm.item-list');
    }
    public function itemUpdate()
    {   
        return view('farm.item-update');
    }
    public function orderMng()
    {   
        return view('farm.order-mng');
    }

    public function analysis()
    {
        return view('farm-analysis');
    }

}
