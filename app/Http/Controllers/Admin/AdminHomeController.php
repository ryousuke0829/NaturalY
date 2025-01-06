<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function farmManagement($status = '')
    {
        if ($status == 'active') {
            $farms = User::whereRoleId(User::FARM_ROLE)->paginate(10);
        } elseif ($status == 'inactive') {
            $farms = User::whereRoleId(User::FARM_ROLE)->onlyTrashed()->paginate(10);
        } else {
            $farms = User::whereRoleId(User::FARM_ROLE)->withTrashed()->paginate(10);
        }

        return view('admin.farm-management')->with('farms', $farms);
    }

    public function farmProfile($id)
    {
        $farm = User::withTrashed()->findOrFail($id);

        return view('admin.farm-profile')->with('farm', $farm);
    }

    public function itemManagement()
    {
        return view('admin.item-management');
    }

    public function showItem()
    {
        return view('admin.show-item');
    }

    public function analysis()
    {
        return view('admin.analysis');
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
}
