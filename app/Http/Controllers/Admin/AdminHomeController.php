<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $data = User::selectRaw("MONTH(created_at) as month, count(*) as aggregate")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->get()
            ->keyBy('month')
            ->toArray();

        $result = array_fill(1, 12, 0);

        foreach ($data as $month => $row) {
            $result[$month] = $row['aggregate'];
        }
                
        $userMonthlyCounts = [];

        foreach ($result as $key => $value) {
            $userMonthlyCounts[] = $value;
        }
                
        return view('admin.index', compact('userMonthlyCounts'));
    }

    public function consumerManagement($status = '')
    {
        if ($status == 'active') {
            $consumers = User::whereRoleId(User::CONSUMER_ROLE)->paginate(10);
        } elseif ($status == 'inactive') {
            $consumers = User::whereRoleId(User::CONSUMER_ROLE)->onlyTrashed()->paginate(10);
        } else {
            $consumers = User::whereRoleId(User::CONSUMER_ROLE)->withTrashed()->paginate(10);
        }

        return view('admin.consumer-management')->with('consumers', $consumers);
    }

    public function consumerProfile($id)
    {
        $user = User::withTrashed()->findOrFail($id);

        return view('admin.consumer-profile')->with('consumer', $user);
    }

    public function farmManagement($status = '', $product = '')
    {
        if ($status == 'active') {
            $farms = User::whereRoleId(User::FARM_ROLE)
                        ->when($product, function ($query, $product) {
                            $query->where(function ($q) use ($product) {
                                $q->where('first_product', $product)
                                ->orWhere('second_product', $product);
                            });
                        })
                        ->paginate(10);
        } elseif ($status == 'inactive') {
            $farms = User::whereRoleId(User::FARM_ROLE)
                        ->when($product, function ($query, $product) {
                            $query->where(function ($q) use ($product) {
                                $q->where('first_product', $product)
                                ->orWhere('second_product', $product);
                            });
                        })
                        ->onlyTrashed()
                        ->paginate(10);
        } else {
            $farms = User::whereRoleId(User::FARM_ROLE)
                        ->when($product, function ($query, $product) {
                            $query->where(function ($q) use ($product) {
                                $q->where('first_product', $product)
                                ->orWhere('second_product', $product);
                            });
                        })
                        ->withTrashed()->paginate(10);
        }

        $farmProducts = User::select('first_product', 'second_product')
            ->get()
            ->map(function ($user) {
                return [$user->first_product, $user->second_product];
            })
            ->flatten() // Flattens the nested arrays into a single-level array
            ->filter() // Remove null and falsy values
            ->unique() // Remove duplicate values
            ->values() // Re-index the array
            ->toArray();

        return view('admin.farm-management')
                ->with('farms', $farms)
                ->with('farmProducts', $farmProducts);
    }

    public function farmProfile($id)
    {
        $farm = User::withTrashed()->findOrFail($id);

        return view('admin.farm-profile')->with('farm', $farm);
    }

    public function itemManagement($status = '', $category = '')
    {   
        if ($status == 'active') {
            $items = Item::when($category, function ($query, $category) {
                            $query->where('category', $category);
                        })
                        ->paginate(10);
        } elseif ($status == 'inactive') {
            $items = Item::when($category, function ($query, $category) {
                            $query->where('category', $category);
                        })
                        ->onlyTrashed()
                        ->paginate(10);
        } else {
            $items = Item::when($category, function ($query, $category) {
                            $query->where('category', $category);
                        })
                        ->withTrashed()
                        ->paginate(10);
        }
        
        $itemsCategories = Item::pluck('category')->unique()->toArray(); 

        return view('admin.item-management')
                ->with('items', $items)
                ->with('itemsCategories', $itemsCategories);
    }

    public function showItem(Item $item)
    {
        return view('admin.show-item')->with('item', $item);
    }

    public function analysis()
    {
        $data = User::where('role_id', '!=', User::ADMIN_ROLE)
            ->selectRaw("MONTH(created_at) as month, count(*) as aggregate")
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->get()
            ->keyBy('month')
            ->toArray();

        $result = array_fill(1, 12, 0);

        foreach ($data as $month => $row) {
            $result[$month] = $row['aggregate'];
        }
                
        $numCustomersAndFarmers = [];

        foreach ($result as $key => $value) {
            $numCustomersAndFarmers[] = $value;
        }
                
        return view('admin.analysis', compact('numCustomersAndFarmers'));
    }

    public function consumerDeactivate(User $user)
    {
        $user->delete();

        return redirect()->route('admin.consumer.management');
    }

    public function consumerActivate(User $user)
    {
        $user->restore();

        return redirect()->route('admin.consumer.management');
    }

    public function consumerSearch(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->search;

        $consumers = User::where('name','like', '%'. $search .'%')
                        ->whereRoleId(User::CONSUMER_ROLE)
                        ->withTrashed()
                        ->paginate(10);
        
        return view('admin.consumer-search', compact('consumers', 'search'));
    }

    public function farmSearch(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->search;

        $farms = User::where('name','like', '%'. $search .'%')
                        ->whereRoleId(User::FARM_ROLE)
                        ->withTrashed()
                        ->paginate(10);
        
        return view('admin.farm-search', compact('farms', 'search'));
    }

    public function farmDeactivate(User $user)
    {
        $user->delete();

        return redirect()->route('admin.farm.management');
    }

    public function farmActivate(User $user)
    {
        $user->restore();

        return redirect()->route('admin.farm.management');
    }

    public function itemSearch(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->search;

        $items = Item::where('name','like', '%'. $search .'%')
                        ->withTrashed()
                        ->paginate(10);
        
        return view('admin.item-search', compact('items', 'search'));
    }

    public function itemDeactivate(Item $item)
    {
        $item->delete();

        return redirect()->route('admin.item.management');
    }

    public function itemActivate(Item $item)
    {
        $item->restore();

        return redirect()->route('admin.item.management');
    }
}
